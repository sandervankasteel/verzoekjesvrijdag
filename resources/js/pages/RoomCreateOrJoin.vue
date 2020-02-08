<template>
    <div class="flex h-screen flex-row">
        <div class="m-auto">
            <button v-on:click="handleButtonClick('join')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mr-8">
                Join room
            </button>
            <button v-on:click="handleButtonClick('create')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                Create new room
            </button>
        </div>
    </div>
</template>

<script>
    export default {
        name: "RoomCreateOrJoin",
        methods: {
            handleButtonClick: function(type) {
                switch (type) {
                    case 'join':
                        this.$router.push({ name: 'room', params: {id: 'abcd1234'} });
                        break;
                    case 'create':
                        break;
                    default:
                        alert(`Unsupported ${type}`);
                }
            }
        }
    }
</script>

<style scoped>

</style>
