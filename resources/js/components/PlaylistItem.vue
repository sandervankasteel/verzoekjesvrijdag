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
                <div class="bg-white h-8 w-16 rounded-lg shadow inline-block flex items-center font-bold" v-on:click="handleVote('up', $event)">
                    <font-awesome-icon icon="thumbs-up" class="mr-2 ml-2"/>
                    <span class="text-green-500">{{ item.upvotes }}</span>
                </div>
            </div>
            <div class="w-1/2">
<!--                <div class="bg-white h-8 w-16 rounded-lg shadow inline-block flex items-center font-bold" v-on:click="handleVote('down', $event)">-->
<!--                    <font-awesome-icon icon="thumbs-down" class="mr-2 ml-2"/>-->
<!--                    <span class="text-red-500">{{ item.downvotes }}</span>-->
<!--                </div>-->
                <VoteButton v-bind:votes="item.downvotes"></VoteButton>
            </div>
        </div>
    </div>
</template>

<script>
    import VoteButton from "./VoteButton";
    export default {
        name: "PlaylistItem",
        components: {VoteButton},
        props: ["item"],
        methods: {
            handleVote: function(type, event) {

                let element = event.target;
                let spanEl = element.querySelector('span');
                let value = parseInt(spanEl.textContent);
                if (type === 'up') {
                    spanEl.textContent = value + 1;
                } else {
                    spanEl.textContent = value - 1;
                }

                element.classList.add('animated', 'tada')
            }
        }
    }
</script>

<style scoped>
    font-awesome-icon {
        cursor: pointer;
    }
</style>
