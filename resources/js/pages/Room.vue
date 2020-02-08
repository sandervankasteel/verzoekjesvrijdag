<template>
    <div class="h-full">
        <div class="flex mb-4 h-10">
            <input placeholder="SEARCHING!" class="mx-auto bg-white focus:outline-none focus:shadow-outline border border-gray-300 py-2 px-4 block w-full appearance-none leading-normal">
        </div>
        <div class="flex mb-4 bg-blue-600 h-auto">
            <div class="w-3/4">
                <iframe width="560" height="315"
                        src="https://www.youtube.com/embed/dQw4w9WgXcQ"
                        frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen>
                </iframe>
            </div>
            <div class="w-1/4">
                <Playlist></Playlist>
            </div>
        </div>
        <div class="flex mb-4 h-64">
            CHAT WINDOW
        </div>
    </div>
</template>

<script>
    import Playlist from "../components/Playlist";
    export default {
        name: "Room",
        components: {Playlist}
    }
</script>

<style scoped>

</style>
