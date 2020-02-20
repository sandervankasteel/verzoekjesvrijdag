<template>
    <div class="bg-white h-8 w-16 rounded-lg shadow inline-block flex items-center font-bold" v-on:click="handleVote('down', $event)">
        <font-awesome-icon icon="thumbs-down" class="mr-2 ml-2"/>
        <span class="text-red-500">{{ votes }}</span>
    </div>
</template>

<script>
    export default {
        name: "VoteButton",
        data: function() {
            return {
                votes: 0
            }
        },
        methods: {
            handleVote: function (type, event) {
                console.log(type);
            },
            handleAnimationEnd: function() {
                console.log('Animation ended!');
            }
        }
    }
</script>

<style scoped>

</style>
