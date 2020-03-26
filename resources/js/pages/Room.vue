<template>
    <div class="h-screen">
        <div class="flex h-12 items-center bg-purple-400 text-white pl-4 font-semibold">
            <Header></Header>
        </div>
        <div class="flex mb-4 h-10">
            <SearchBar></SearchBar>
        </div>
        <div class="flex mb-4 bg-blue-600 h-full">
            <div class="w-3/4">
                <Player></Player>
            </div>
            <div class="w-1/4">
                <span class="text-lg font-extrabold my-4 ml-2">Playing next</span>
                <Playlist></Playlist>
            </div>
        </div>
    </div>
</template>

<script>
    import Playlist from "../components/Playlist";
    import SearchBar from "../components/SearchBar";
    import { mapActions, mapState } from "vuex";
    import Player from "../components/Player";
    import Header from "../components/Header";

    export default {
        name: "Room",
        components: {Header, Player, SearchBar, Playlist},
        computed: mapState({
            roomName: state => state.room.id
        }),
        created () {
            this.subscribe()
        },
        methods: {
            ...mapActions('room', ['addMember', 'addMembers']),
            subscribe() {
                Echo.join(`room.${this.roomName}`)
                    .listen('UserJoinedRoom', (e) => {
                        this.addMember(e.user.name);
                    });
            }
        }
    }
</script>

<style scoped>

</style>
