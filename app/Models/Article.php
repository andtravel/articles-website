<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
use Illuminate\Support\Str;

class Article extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'image',
        'body',
    ];

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

    public function state()
    {
        return $this->hasOne(State::class);
    }

    public function body(): Attribute
    {
        return Attribute::make(
            get: fn (string $value) => request()->routeIs('article') ? $value : Str::limit($value, 100)
        );
    }

    public function createdAt(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Carbon::parse($value)->diffForHumans()
        );
    }

    public function scopeLastLimit(Builder $query, int $number): void
    {
        $query->with(['tags', 'state'])->orderBy('created_at', 'desc')->limit($number);
    }

    public function scopeAllPaginate(Builder $query): void
    {
        $query->with(['tags', 'state'])->orderBy('created_at', 'desc');
    }
}
