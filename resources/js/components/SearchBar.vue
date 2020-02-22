<template>
    <div class="w-full z-40">
        <input
            placeholder="SEARCHING!"
            class="mx-auto bg-white focus:outline-none focus:shadow-outline border border-gray-300 w-full py-2 px-4 block appearance-none leading-normal"
            v-on:keypress="onKeyPress"
            v-on:keyup.esc="onCancelClick"
            v-bind:value="searchTerm"
        >
        <div v-if="foundItems.length > 0" class="w-full mb-4 z-40 bg-gray-300">
            <div v-for="(item, index) of foundItems" class="p-4">
                <div class="flex">
                    <div class="flex-col">
                        <img :src="item.image_url" alt="preview image" class="h-16 w-16 rounded-lg mr-2"/>
                    </div>
                    <div class="flex-row w-4/6">
                        <div class="h-8">{{ item.title }}</div>
<!--                        <div class="h-8">{{ item.song_name }}</div>-->
                    </div>
                    <div class="flex-col">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" v-on:click="onCancelClick">
                            Add to playlist
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        name: "SearchBar",
        data() {
            return {
                foundItems: [],
                searchTerm: ""
            }
        },
        methods: {
            onKeyPress: async function (event) {
                const axios = require('axios');

                let value = event.target.value;
                this.searchTerm = value;
                let array = [];

                // Some browser handle esc with both handler's
                if (event.keyCode === 27) {
                    return;
                }

                const response = await axios.get(`/api/v1/search?q=${value}`);
                this.foundItems = response.data;

                // for(let i =0; i <= value.length; i++) {
                //     array.push({
                //         title: 'Artist name ' + i,
                //         song_name: 'Song name ' + i,
                //         image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg'
                //     })
                // }
                //
                // this.foundItems = array;
            },
            onCancelClick: function(event) {
                this.foundItems = [];
                this.searchTerm = "";
            }
        }
    }
</script>

<style scoped>

</style>
