<script setup>
import { useForm } from '@inertiajs/vue3'

const props = defineProps({
    article: Object
})

const form = useForm({
    subject: '',
    body: '',
    article_id: props.article.id
})

const Submit = () => {
    form.post(route('comment.store'),
        {
            onFinish: () => {
                    form.reset('subject', 'body');
                    form.subject = '';
                    form.body = '';
            }
        })
}
</script>

<template>
    <form @submit.prevent="Submit">
        <div class="mb-3">
            <label for="subject" class="form-label">Subject</label>
            <input type="text" class="form-control" id="subject" aria-describedby="emailHelp" v-model="form.subject">
        </div>
        <div class="mb-3">
            <label for="comment" class="form-label">Comment</label>
            <textarea class="form-control" id="comment" rows="3" v-model="form.body"></textarea>
        </div>
        <button type="submit" class="btn btn-primary mb-5">Submit</button>
    </form>
</template>
