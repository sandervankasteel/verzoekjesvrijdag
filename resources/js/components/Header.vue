<template>
    <div class="flex w-screen">
        <div class="flex">
            <ButtonIcon icon-name="home" class="mr-2" v-on:click="handleHomeClick">Home</ButtonIcon>
        </div>
        <div class="w-1/4">Room name: <span class="text-gray-800 font-bold">{{ roomName }}</span></div>
        <div class="flex w-full justify-end">
            <ButtonIcon icon-name="users" text-color="text-black" class="mr-2">{{ members.length }} member(s)</ButtonIcon>
<!--            <ButtonIcon icon-name="share-alt" v-on:click="handleShareClick()" class="mr-2">Share</ButtonIcon>-->
        </div>
    </div>
</template>
<script>
import { mapState, mapGetters } from "vuex";
import ButtonIcon from "./base/ButtonIcon";
import Button from "./base/Button";

export default {
    name: "Header",
    components: {Button, ButtonIcon },
    computed: {
        ...mapGetters('room', ['members', 'roomName'])
    },
    data() {
        return {}
    },
    methods: {
        handleShareClick: function() {
            console.log("handleShareClick")
        },
        handleHomeClick: function () {
            console.log("handleHomeClick");
            this.$router.push({ path: '/' })
        }
    }
}
</script>

<style scoped>

</style>
