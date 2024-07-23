<script setup>
import {Head, Link} from '@inertiajs/vue3'
import AppLayout from "@/Layouts/AppLayout.vue";

defineProps({
    articles: Object,
    tag: Object
})

</script>

<template>
    <Head title="Articles List by Tag" />
    <AppLayout>
        <div class="d-flex justify-content-center align-items-center flex-wrap">
            <div class="col-6" v-for="article in articles.data" :key="article.id">
                <div class="card m-3">
                    <img :src="article.image" class="card-img-top" :alt="article.image">
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
    </AppLayout>
</template>

<style scoped>

</style>
