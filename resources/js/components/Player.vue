<template>
    <youtube v-if="videoId !== ''"
        :video-id="videoId"
        :player-vars="playerVars"
        @ready="this.readyPlaying"
        @ended="this.finishedPlaying"
        :fitParent="fitParent"
        :resize="resize">
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
                videoId: 'u0oQymk7ZXE',
                playerVars: {
                    // autoplay: 1
                },
                fitParent: true,
                resize: true
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
