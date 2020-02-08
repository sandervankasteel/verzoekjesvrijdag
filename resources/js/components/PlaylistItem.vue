<template>
    <div>
        <div class="flex mb-4">
            <div class="w-1/5">
                <img :src="item.image_url">
            </div>
            <div class="w-4/5 ml-4" id="title">
                {{ item.title }}
            </div>
        </div>
        <div class="flex mb-4">
            <div class="w-1/2">
                <i class="far fa-thumbs-up"></i> {{ item.upvotes }}
            </div>
            <div class="w-1/2">
                <i class="far fa-thumbs-down"></i> {{ item.downvotes }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PlaylistItem",
        props: ["item"]
    }
</script>

<style scoped>
</style>
