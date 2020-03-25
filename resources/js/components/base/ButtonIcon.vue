<template>
    <div class="bg-white h-8 w-16 rounded-lg shadow inline-block flex items-center font-bold">
        <font-awesome-icon :icon="iconName" class="mr-2 ml-2" />
        <span v-bind:class="textColor">{{ textContent }}</span>
    </div>
</template>

<script>
    import Button from "./Button";
    export default {
        name: "ButtonIcon",
        props: ['iconName', 'textContent', 'textColor'],
        components: { Button },
        data: function() {

        }
    }
</script>

<style scoped>

</style>
