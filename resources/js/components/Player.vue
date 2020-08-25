<template>
    <youtube v-if="this.playing.videoId !== ''"
        :video-id="this.playing.videoId"
        :player-vars="this.config.playerVars"
        @ready="this.readyPlaying"
        @ended="this.finishedPlaying"
        :fitParent="this.config.fitParent"
        :resize="this.config.resize">
    </youtube>
</template>

<script>
    import { mapActions, mapGetters } from "vuex";

    export default {
        name: "Player",
        computed: {
            ...mapGetters('playlist', ['getItems', 'getNextInQueue']),
            player() {
                return this.$refs.youtube.player;
            }
        },
        data() {
            return {
                playing: {
                    videoId: 'u0oQymk7ZXE',
                },
                config: {
                    playerVars: {
                        autoplay: true
                    },
                    fitParent: true,
                    resize: true
                }
            }
        },
        methods: {
            ...mapActions('playlist', ['removeFirstFromPlaylist']),
            created () {
             // no sure yet
                this.subscribe();
            },
            async finishedPlaying() {
                const nextInQueue = this.getNextInQueue;
                await this.$set(this.playing, 'videoId', nextInQueue.youtube_id);

                this.removeFirstFromPlaylist();
                await this.$refs.youtube.player.playVideo()

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
