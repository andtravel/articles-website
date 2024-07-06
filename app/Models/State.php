<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;

    protected $fillable = [
        'article_id',
        'views',
        'likes',
    ];

    public function article()
    {
        return $this->belongsTo(Article::class);
    }
}
