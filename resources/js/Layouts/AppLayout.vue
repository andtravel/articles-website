<script setup>
import { Link } from '@inertiajs/vue3'
</script>

<template>
    <div class="container">
        <nav class="navbar navbar-expand-lg bg-body-tertiary position-block top-0 z-index-10">
            <div class="container-fluid">
                <Link class="navbar-brand" :href="route('home')">Статейник</Link>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <Link :href="route('home')" class="nav-link" :class="route().current('home') === true ? 'text-secondary fw-bold text-decoration-underline' : ''">Главная</Link>
                        </li>
                        <li class="nav-item">
                            <Link :href="route('articles')" class="nav-link" :class="route().current('articles') || route().current('article') === true ? 'text-secondary fw-bold text-decoration-underline' : ''">Каталог статей</Link>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <div class="mt-5">
            <slot />
        </div>
    </div>
</template>
