<template functional id="btn">
    <div class="bg-white h-8 w-16 rounded-lg shadow inline-block flex items-center font-bold">
        <span v-bind:class="textColor">{{ textContent }}</span>
    </div>
</template>

<script>
    export default {
        name: "Button",
        props: ['textContent', 'textColor'],
        data: function() {

        }
    }
</script>

<style scoped>

</style>
