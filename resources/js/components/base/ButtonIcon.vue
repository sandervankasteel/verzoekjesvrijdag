<template>
    <Button :text-color="textColor">
        <font-awesome-icon :icon="iconName" class="mr-2" />
        <slot></slot>
    </Button>
</template>

<script>
    import Button from "./Button";
    export default {
        name: "ButtonIcon",
        props: ['iconName', 'textColor'],
        components: { Button },
        data: function() {

        }
    }
</script>

<style scoped>

</style>
