<script setup>
import {Head, Link} from '@inertiajs/vue3'
import AppLayout from "@/Layouts/AppLayout.vue"
import Pagination from "@/Components/Pagination.vue"

defineProps({
        articles: Object,
        tags: Object
    });
</script>

<template>
    <Head title="Каталог статей"/>
    <AppLayout>
        <div class="d-flex justify-content-between">
            <div class="col-4">
                <span class="badge rounded-pill text-bg-dark m-2" v-for="tag in tags" :key="tag.label">
                <Link :href="route('articles.tag', tag.id)">
                    {{ tag.label }}
                </Link>
                </span>
            </div>
            <div class="col-8">
                <div class="card mb-3" v-for="article in articles.data" :key="article.id">
                    <img :src="article.image" class="card-img-top" alt="https://placehold.co/600x400">
                    <div class="card-body">
                        <h5 class="card-title">
                            <Link :href="route('article', article.slug)">{{ article.title }}</Link>
                        </h5>
                        <p class="card-text"><small class="text-body-secondary">{{ article.created_at }}</small></p>
                        <span class="badge rounded-pill text-bg-dark m-2" v-for="tag in article.tags">
                            <Link :href="route('articles.tag', tag.id)">
                                {{ tag.label }}
                            </Link>
                        </span>
                        <p class="card-text">{{ article.body }}</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p>shows {{ article.state.views }}</p>
                            <p>likes {{ article.state.likes  }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <Pagination :articles="articles" />
    </AppLayout>
</template>

<style scoped>

</style>
