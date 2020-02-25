<template>
    <div class="bg-gfx h-full">
        <div class="flex justify-center w-full">
        <div class="h-16">
            <button v-on:click="handleButtonClick('join_existing')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-8">
                Join room
            </button>
            <button v-on:click="handleButtonClick('create')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create new room
            </button>
        </div>
        </div>
        <div class="flex justify-center w-full" v-bind:class="{ 'animated fadeInUp': showRoomDetails}">
            <div class="text-teal-600" v-show="showRoomDetails">
                <input v-model="username" placeholder="Your name" class="bg-white focus:outline-none focus:shadow-outline border border-gray-300 py-2 px-4 w-2/5 appearance-none leading-normal" >
                <button v-on:click="handleButtonClick('join')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 m-12 rounded">
                    Continue
                </button>
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
                showRoomDetails: false,
            }
        },
        computed: mapState({
            roomName: state => state.room.id
        }),
        methods: {
            ...mapActions('room', ['setRoom', 'addMember']),
            createNewRoom: async function() {
                const axios = require('axios');

                const data = await axios.get('/api/v1/rooms/create');
                this.setRoom(data.data.data.name);
            },
            handleButtonClick: function(type) {
                this.showRoomDetails = true;

                switch (type) {
                    case 'join_existing':
                        break;
                    case 'create':
                        this.createNewRoom();
                        break;
                    case 'join':
                        this.addMember(this.username);
                        this.$router.push({ name: 'room', params: {id: this.roomName} });
                        break;
                    default:
                        alert(`Unsupported ${type}`);
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
