<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from "@/Layouts/AppLayout.vue";
import Pagination from "@/Components/Pagination.vue";
</script>

<template>
    <Head title="Статейник" />
    <AppLayout>
        <div class="row row-cols-1 row-cols-md-2 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="https://placehold.co/600x400">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                        <span class="badge rounded-pill text-bg-dark m-2">tag1</span>
                        <span class="badge rounded-pill text-bg-dark m-2">tag2</span>
                        <span class="badge rounded-pill text-bg-dark m-2">tag3</span>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <p>shows 30</p>
                            <p>likes 12</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="https://placehold.co/600x400">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="https://placehold.co/600x400">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.This is a longer card with supporting text below as a natural lead-in to additional content.This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="https://placehold.co/600x400">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="https://placehold.co/600x400">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="https://placehold.co/600x400" class="card-img-top" alt="https://placehold.co/600x400">
                    <div class="card-body">
                        <h5 class="card-title">Card title</h5>
                        <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>
        <Pagination />
    </AppLayout>
</template>

<style scoped>

</style>
