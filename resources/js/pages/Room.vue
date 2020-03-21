<template>
    <div class="h-screen">
        <div class="flex h-12 items-center bg-purple-400 text-white pl-4 font-semibold">
            <div class="w-1/4">Room name <span class="text-gray-800 font-bold">{{ roomName }}</span></div>
            <div class="w-3/4 float-right">Share button</div>
        </div>
        <div class="flex mb-4 h-10">
            <SearchBar></SearchBar>
        </div>
        <div class="flex mb-4 bg-blue-600 h-full">
            <div class="w-3/4">
<!--                <iframe width="100%"-->
<!--                        height="100%"-->
<!--                        src="https://www.youtube.com/embed/dQw4w9WgXcQ?wmode=transparent"-->
<!--                        frameborder="0"-->
<!--                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"-->
<!--                        allowfullscreen-->
<!--                        class="z-0">-->
<!--                </iframe>-->
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
    import {mapActions, mapState} from "vuex";
    import Player from "../components/Player";

    export default {
        name: "Room",
        components: {Player, SearchBar, Playlist},
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
