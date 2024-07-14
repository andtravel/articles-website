<script setup>
import {Head, Link} from '@inertiajs/vue3'
import AppLayout from "@/Layouts/AppLayout.vue"
import CommentsForm from "@/Components/CommentsForm.vue";
import ArticleComponent from "@/Components/ArticleComponent.vue";
import CommentsList from "@/Components/CommentsList.vue";

defineProps({
    article: Object,
})

</script>

<template>
    <Head :title="article.title" />
    <AppLayout>
        <div class="col-8 offset-2">
            <ArticleComponent :article="article" />
        </div>
        <hr>

        <div class="col-8 offset-2">
            <h3 class="text-center">Comments</h3>
            <CommentsForm :article="article" />
            <div>
                <div class="card mb-3" v-for="comment in article.comments">
                    <CommentsList :comment="comment" />
                </div>
            </div>
        </div>

    </AppLayout>
</template>
