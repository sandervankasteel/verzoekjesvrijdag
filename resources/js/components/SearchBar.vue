<template>
    <div class="w-full z-40">
        <div v-bind:class="{ loading:loading }">
        <input
            placeholder="SEARCHING!"
            class="mx-auto bg-white focus:outline-none focus:shadow-outline border border-gray-300 w-full py-2 px-4 block appearance-none leading-normal"
            v-on:keypress="onKeyPress"
            v-on:keyup.esc="onCancelClick"
            v-bind:value="searchTerm" />
        <font-awesome-icon icon="spinner" pulse class="mr-2 ml-2" v-bind:class="{ hidden: !loading }"/>

        </div>

        <div v-if="foundItems.length > 0" class="w-11/12 mb-4 z-40 bg-gray-300 rounded-b-lg shadow-xl">
            <div v-for="(item, index) of foundItems" class="p-4">
                <div class="flex">
                    <div class="flex-col">
                        <img :src="item.image_url" alt="preview image" class="h-16 w-16 rounded-lg mr-2"/>
                    </div>
                    <div class="flex-row w-4/6">
                        <div class="h-8">{{ item.title }}</div>
                    </div>
                    <div class="flex-col">
                        <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" v-on:click="handleAddToPlaylist(item)">
                            Add to playlist
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { debounce } from "lodash";
    import { mapActions } from 'vuex'

    export default {
        name: "SearchBar",
        data() {
            return {
                foundItems: [],
                searchTerm: "",
                loading: false,
            }
        },
        methods: {
            ...mapActions('playlist', ['addToPlaylist']),
            onKeyPress: debounce(async function (event) {
                const axios = require('axios');
                this.loading = true;

                let value = event.target.value;
                this.searchTerm = value;
                let array = [];

                // Some browser handle esc with both handler's
                if (event.keyCode === 27) {
                    return;
                }

                const response = await axios.get(`/api/v1/search?q=${value}`);
                this.foundItems = response.data.data;

                this.loading = false;
            }, 500),
            onCancelClick: function(event) {
                this.foundItems = [];
                this.searchTerm = "";
            },
            handleAddToPlaylist: function(item) {
                this.addToPlaylist({ ... item });
                this.onCancelClick();
            }
        }
    }
</script>

<style scoped>
    .loading input {
        padding-left: 40px;
        transition: padding-left 0.25s;
    }

    .loading svg {
        position: absolute;
        top: 3.9em;
        left: 0.5em;
        transition: display 0.5s;
    }
</style>
