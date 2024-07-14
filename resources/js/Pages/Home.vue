<script setup>
import { Head,Link } from '@inertiajs/vue3'
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
    articles: Object
})

</script>

<template>
    <Head title="Статейник" />
    <AppLayout>
        <div class="row row-cols-1 row-cols-md-2 g-4" >
            <div class="col" v-for="article in articles">
                <div class="card h-100">
                    <img :src="article.image" class="card-img-top" alt="https://placehold.co/600x400">
                    <div class="card-body">
                        <h5 class="card-title">{{ article.title }}</h5>
                        <p class="card-text"><small class="text-body-secondary">{{ article.created_at }}</small></p>
                        <p class="card-text"><small class="text-body-secondary">Published at: {{ article.published_at }}</small></p>
                            <span class="badge rounded-pill text-bg-dark m-2" v-for="tag in article.tags">
                                <Link :href="route('articles.tag', tag.id)">
                                    {{ tag.label }}
                                </Link>
                            </span>
                        <p class="card-text">{{ article.body }}</p>
                        <Link :href="route('article', article.slug)" class="btn btn-primary mb-3">Read more...</Link>
                        <div class="d-flex justify-content-between align-items-center">
                            <p>shows {{ article.state.views }}</p>
                            <p>likes {{ article.state.likes  }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AppLayout>
</template>

<style scoped>

</style>
