<script setup>
defineProps({
    comment: Object
})
</script>

<template>
        <div class="card-body p-3">
            <div class="d-flex justify-content-between">
                <h5 class="card-title">{{ comment.subject }}</h5>
                <p>{{ comment.created_at}}</p>
            </div>
            <p class="card-text">{{ comment.body }}</p>
        </div>
</template>
