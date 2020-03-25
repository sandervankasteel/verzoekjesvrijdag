<template>
    <span>
<!--        {{ roomName }} -->
        <div class="w-1/4">Room name <span class="text-gray-800 font-bold">ABCD1234</span></div>
        <div class="w-1/4">
            <ButtonIcon icon="users" text-content="8 members"></ButtonIcon>
        </div>
        <div class="w-3/4 float-right">Share button</div>
    </span>
</template>
<script>
import { mapState, mapGetters } from "vuex";
import ButtonIcon from "./base/ButtonIcon";

export default {
    name: "Header",
    components: {ButtonIcon},
    // computed: {
    //     ...mapGetters('room', ['getMembers'])
    // },
    data() {

    },
    methods: {

    }
}
</script>

<style scoped>

</style>
