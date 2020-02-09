<template>
    <div class="h-screen">
        <div class="flex h-12 items-center bg-purple-400 text-white pl-4 font-semibold">
            <div class="w-1/4">Room name <span class="text-gray-800 font-bold">{{ roomName }}</span></div>
            <div class="w-3/4 float-right">Share button</div>
        </div>
        <div class="flex mb-4 h-10">
            <input placeholder="SEARCHING!" class="mx-auto bg-white focus:outline-none focus:shadow-outline border border-gray-300 py-2 px-4 block w-full appearance-none leading-normal">
        </div>
        <div class="flex mb-4 bg-blue-600 h-auto">
            <div class="w-3/4">
                <iframe width="100%" height="100%"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
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
    export default {
        name: "Room",
        components: {Playlist},
        computed: {
            roomName: function() {
                return Math.random().toString(36).substring(2, 10);
            }
        }
    }
</script>

<style scoped>

</style>
