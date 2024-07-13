<script setup>
import {Link} from '@inertiajs/vue3'

defineProps({
    articles: Object
})
</script>

<template>
    <nav aria-label="Page navigation example">
        <ul class="pagination justify-content-center mt-3">
            <li
                v-for="link in articles.links"
                :key="link.label"
                class="page-item"
                :class="link.url === null ? 'disabled' : ''"
                >
            <Link
                :href="link.url"
                :class="link.active ? 'page-link active' : 'page-link'"
                v-html="link.label"
            />
            </li>
        </ul>
    </nav>

</template>

<style scoped>

</style>
