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
<!--                <font-awesome-icon :icon="['far', 'fa-thumbs-up']"/>-->
                Upvotes: {{ item.upvotes }}
            </div>
            <div class="w-1/2">
<!--                <font-awesome-icon :icon="['far', 'fa-thumbs-down']"/>-->
                Downvotes: {{ item.downvotes }}
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "PlaylistItem",
        props: ["item"],
        methods: {
            handleVote: function(type) {
                // set animation type to bounce
                console.log('vote has been cast')
            }
        }
    }
</script>

<style scoped>

</style>
