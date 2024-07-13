<script setup>
import { Head } from '@inertiajs/vue3'
import AppLayout from "@/Layouts/AppLayout.vue"
</script>

<template>
    <Head title="Статья" />
    <AppLayout>
        <div class="col-10 offset-1">
<!--            <img src="https://placehold.co/600x400" class="card-img-top" alt="https://placehold.co/600x400">-->
            <div class="card-body">
                <h2 class="card-title">Card title</h2>
                <p class="card-text"><small class="text-body-secondary">Last updated 3 mins ago</small></p>
                <span class="badge rounded-pill text-bg-dark m-2">tag1</span>
                <span class="badge rounded-pill text-bg-dark m-2">tag2</span>
                <span class="badge rounded-pill text-bg-dark m-2">tag3</span>
                <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.This is a longer card with supporting text below as a natural lead-in to additional content.This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                <div class="d-flex justify-content-between align-items-center">
                    <p>shows 30</p>
                    <p>likes 12</p>
                </div>
            </div>
        </div>
        <hr>

        <div class="col-8 offset-2">
            <h3 class="text-center">Comments</h3>
            <form>
                <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Subject</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Comment</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-primary mb-5">Submit</button>
            </form>
            <div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Comment 1</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Comment 2</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
                <div class="card mb-3">
                    <div class="card-body">
                        <h5 class="card-title">Comment 3</h5>
                        <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    </div>
                </div>
            </div>
        </div>

    </AppLayout>
</template>

<style scoped>

</style>
