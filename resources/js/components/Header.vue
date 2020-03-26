<template>
    <div class="flex w-screen">
        <div class="w-1/4">Room name: <span class="text-gray-800 font-bold">{{ roomName }}</span></div>
        <ButtonIcon icon-name="users" text-color="text-black">{{ members.length }} member(s)</ButtonIcon>
        <div class="w-2/4 float-right">Share button</div>
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

    }
}
</script>

<style scoped>

</style>
