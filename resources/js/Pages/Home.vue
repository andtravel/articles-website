<script setup>
import { ref } from 'vue';

const message = ref('Hello World!');
</script>

<template>
    <div class="container">
        <div class="mb-3 mt-3 text-center">
            <h1 class="bg-success text-warning">{{ message }}</h1>
        </div>
    </div>
</template>

<style scoped>

</style>
