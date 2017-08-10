<template>
    <a class="mdl-list__item-secondary-action" href="#"  v-on:click="handleClick" ><i class="material-icons">thumb_up</i></a>
</template>
<script>
    modules.export = {
        el: '.vote-up',
        methods: {
            handleClick: function(event) {
                console.log("handleClick has been pressed");
            }
        }
    }
</script>