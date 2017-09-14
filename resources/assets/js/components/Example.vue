<!--<template>-->
    <!--<a class="mdl-list__item-secondary-action" href="#"  v-on:click="handleClick" ><i class="material-icons">thumb_up</i></a>-->
<!--</template>-->
<!--<script>-->
    <!--modules.exports = {-->
<!--//        methods: {-->
<!--//            handleClick: function(event) {-->
<!--//                console.log("handleClick has been pressed");-->
<!--//            }-->
<!--//        }-->
        <!--data: function() {-->
            <!--return {-->
                <!--greeting: 'hello'-->
            <!--}-->
        <!--}-->
    <!--}-->
<!--</script>-->
<!--<style>-->
    <!---->
<!--</style>-->
<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div class="panel-body">
                        I'm an example component!
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>