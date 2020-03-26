<template functional id="btn">
    <div class="bg-white h-8 p-4 w-auto rounded-lg shadow inline-block flex items-center font-bold">
        <span class="text-black">
            <slot></slot>
        </span>
    </div>
</template>

<script>
    export default {
        name: "Button",
        props: { 'textColor': String },
        data: function() { }
    }
</script>

<style scoped>

</style>
