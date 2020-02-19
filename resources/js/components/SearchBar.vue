<template>
    <div class="w-full z-40">
        <input
            placeholder="SEARCHING!"
            class="mx-auto bg-white focus:outline-none focus:shadow-outline border border-gray-300 w-full py-2 px-4 block appearance-none leading-normal"
            v-on:keypress="onKeyPress"
        >
        <div v-if="foundItems.length > 0" class="w-full mb-4 z-40 bg-gray-300">
            <div v-for="(item, index) of foundItems" class="flex p-4">
                <img :src="item.image_url" alt="preview image" class="h-16 w-16 rounded-lg mr-2"/>
                <div class="w-full h-8">{{ item.title }}</div>
                <div class="w-full h-8"> {{ item.song_name }}</div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "SearchBar",
        data() {
            return {
                foundItems: []
            }
        },
        methods: {
            onKeyPress: function(event) {
                let value = event.target.value;
                let array = [];

                for(let i =0; i <= value.length; i++) {
                    array.push({
                        title: 'Artist name ' + i,
                        song_name: 'Song name ' + i,
                        image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg'
                    })
                }

                this.foundItems = array;
            },
            onCancelClick: function(event) {
                this.foundItems = [];
            }
        }
    }
</script>

<style scoped>

</style>
