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
    import { mapState } from 'vuex';

    export default {
        name: "Playlist",
        computed: mapState({
            items: state => state.playlist.items
        })
    }
</script>

<style scoped>
ul {
    overflow-y: auto;
}
</style>
