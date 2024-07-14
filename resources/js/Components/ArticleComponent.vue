<script setup>
import {ref} from 'vue'
import {Link} from '@inertiajs/vue3'
import axios from "axios";

const props =defineProps({
    article: Object
})

const likes = ref(props.article.state.likes)

const views = ref(props.article.state.views)

const toggleLikes = ref(true)
const toggleViews = ref(true)

const incrementViews = async (id) => {

            const response = await axios.put(route('article.view', id))
            setTimeout(() => {
                views.value = response.data.views
            }, 5000)
            toggleViews.value = false
}

const incrementLikes = async (id) => {
    try {
        const response = await axios.put(route('article.like', id))
        likes.value = response.data.likes
        toggleLikes.value = false
    } catch (error) {
        console.error(error)
    }
}

</script>

<template>
    <div class="card-body">
        <div v-if="toggleViews">{{ incrementViews(article.id)}}</div>
        <h2 class="card-title">{{ article.title }}</h2>
        <p class="card-text"><small class="text-body-secondary">{{ article.created_at }}</small></p>
        <span class="badge rounded-pill text-bg-dark m-2" v-for="tag in article.tags">
                        <Link :href="route('articles.tag', tag.id)">
                            {{ tag.label }}
                        </Link>
                    </span>
        <p class="card-text">{{ article.body }}</p>
        <div class="d-flex justify-content-between align-items-center">
            <p>shows {{ views }}</p>
            <button  @click="toggleLikes ? incrementLikes(article.id) : ''" class="btn btn-primary">likes {{ likes }}</button>
        </div>
    </div>
</template>
