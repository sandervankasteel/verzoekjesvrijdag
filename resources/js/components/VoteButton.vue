<template>
    <div class="bg-white h-8 w-16 rounded-lg shadow inline-block flex items-center font-bold" v-on:click="handleVote('down', $event)">
        <font-awesome-icon icon="thumbs-down" class="mr-2 ml-2"/>
        <span class="text-red-500">{{ totalVotes }}</span>
    </div>
</template>

<script>
    export default {
        name: "VoteButton",
        props: ["votes"],
        // data: function() {
        //     // return {
        //     //     votes: this.$props.votes
        //     // }
        // },
        methods: {
            handleVote: function (type, event) {
                console.log(type);
                this.totalVotes = this.totalVotes +1;
            },
            handleAnimationEnd: function() {
                console.log('Animation ended!');
            }
        },
        computed: {
            totalVotes: {
                get: function() {
                    return this.$props.votes;
                },
                set: function(newValue) {
                    this.totalVotes = newValue;
                }
            }
        }
    }
</script>

<style scoped>

</style>
