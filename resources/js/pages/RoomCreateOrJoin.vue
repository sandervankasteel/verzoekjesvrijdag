<template>
    <div class="bg-gfx h-full flex justify-center items-center">
        <div class="flex justify-center w-full" v-show="!(joinExistingRoom || showRoomDetails)">
            <div class="h-16">
                <button v-on:click="handleButtonClick('join_existing')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-8">
                    Join room
                </button>
                <button v-on:click="handleButtonClick('create')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Create new room
                </button>
            </div>
        </div>
        <div class="lg:w-2/5" v-bind:class="{ 'animated fadeInUp': showRoomDetails}" v-show="joinExistingRoom || showRoomDetails">
            <div class="bg-red-500 rounded-lg opacity-75">
                <div class="w-full flex justify-center">
                    <span class="text-3xl" v-if="joinExistingRoom">Join room</span>
                    <span class="text-3xl" v-else>Create new room</span>
                </div>
                <div class="w-full flex justify-center my-4" v-show="joinExistingRoom">
                    <div class="text-teal-600">
                        <input v-model="toJoinRoomName" placeholder="Room name / code" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 py-2 px-4 appearance-none leading-normal" >
                    </div>
                </div>
                <div class="w-full flex justify-center my-4" v-show="showRoomDetails">
                    <div class="text-teal-600">
                        <input v-model="username" placeholder="Your name" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 py-2 px-4 appearance-none leading-normal" >
                    </div>
                </div>
                <div class="w-full flex justify-center my-4">
                    <button v-on:click="handleButtonClick('join')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" v-bind:disabled="loading">
                        Continue
                    </button>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    import { mapActions, mapState } from "vuex";

    export default {
        name: "RoomCreateOrJoin",
        data() {
            return {
                username: '',
                joinExistingRoom: false,
                toJoinRoomName: '',
                showRoomDetails: false,
                loading: false
            }
        },
        computed: mapState({
            roomName: state => state.room.id
        }),
        methods: {
            ...mapActions('room', ['setRoom', 'addMember']),
            createNewRoom: async function() {
                const axios = require('axios');

                const resp = await axios.get('/api/v1/rooms/create');
                await this.setRoom(resp.data.data.name);
            },
            createNewuser: async function() {
                const axios = require('axios');

                await axios.post('/api/v1/authorize', {
                    name: this.username
                });
            },
            handleButtonClick: async function (type) {
                this.showRoomDetails = true;

                switch (type) {
                    case 'join_existing':
                        this.joinExistingRoom = true;
                        break;
                    case 'join':
                        this.loading = true;

                        if (this.joinExistingRoom) {
                            await this.createNewuser();
                            await this.setRoom(this.toJoinRoomName);
                        } else {
                            await this.createNewuser();
                            await this.createNewRoom();
                        }

                        this.addMember(this.username);
                        this.$router.push({name: 'room', params: {id: this.roomName}});
                    break;
                }
            }
        },
    }
</script>

<style scoped>
.bg-gfx {
    background-image: url("/img/bg-gfx.jpg");
    background-size: cover;
}
</style>
