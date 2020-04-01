<template>
    <div class="pl-4 pt-4">
        <div v-if="roomIsLoading">
            <font-awesome-icon icon="spinner" class="mr-2 ml-2" spin/>
        </div>
        <ul v-else>
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
        created: function () {
            this.subscribe();
            this.populatePlaylist();
        },
        computed: mapState({
            items: state => state.playlist.items,
            roomName: state => state.room.id,
            roomIsLoading: state => state.playlist.loading
        }),
        methods: {
            ...mapActions('playlist', ['addToPlaylist', 'populatePlaylist']),
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
