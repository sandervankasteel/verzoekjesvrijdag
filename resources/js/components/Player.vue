<template>
    <youtube v-if="youtube_id !== ''"
        :video-id="youtube_id"
        player-vars={}
        @ready="this.readyPlaying"
        @ended="this.finishedPlaying"
        fitParent="true"
        resize="true">
    </youtube>
</template>

<script>
    import { mapActions, mapGetters } from "vuex";

    export default {
        name: "Player",
        computed: {
            ...mapGetters('playlist', ['getItems', 'getNextInQueue']),
            // 'nowPlaying': this.getNextInQueue()
            // player() {
            //     return this.$refs.youtube.player;
            // }
        },
        data() {
            return {
                'autoplay': false,
                'youtube_id': 'u0oQymk7ZXE'
            }
        },
        methods: {
            ...mapActions('playlist', ['removeFirstFromPlaylist']),
            created () {
             // no sure yet
                this.subscribe();
            },
            finishedPlaying() {
                console.log('We finished playing');
            },
            readyPlaying() {
                // if(this.autoplay) {
                //     this.player.playVideo();
                // }
            },
            subscribe() {

            }
        }
    }
</script>

<style scoped>

</style>
