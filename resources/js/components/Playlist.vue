<template>
    <div class="pl-4 pt-4">
        <ul>
            <li v-for="(item, index) in items">
                <PlaylistItem :item="item" :key="index"></PlaylistItem>
            </li>
        </ul>
    </div>
</template>

<script>
    import {mapActions, mapState} from 'vuex';

    export default {
        name: "Playlist",
        created () {
            this.subscribe()
        },
        computed: mapState({
            items: state => state.playlist.items,
            roomName: state => state.room.id
        }),
        methods: {
            ...mapActions('playlist', ['addToPlaylist']),
            subscribe () {
                Echo.join(`room.items.${this.roomName}`)
                .listen('ItemAddedToPlaylist', (e) => {
                    e.playlistItem.pushToBackend = false;
                    this.addToPlaylist(e.playlistItem);
                });
            }
        }
    }
</script>

<style scoped>
ul {
    overflow-y: auto;
}
</style>
