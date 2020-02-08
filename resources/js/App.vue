<template>
    <div class="h-full">
        <nav class="flex items-center justify-between flex-wrap bg-teal-500 p-6">
            <Navigation></Navigation>
        </nav>
        <main class="h-full">
            <router-view></router-view>
        </main>
    </div>
</template>

<script>
    import Navigation from "./components/Navigation";
    export default {
        name: "App",
        components: {Navigation}
    }
</script>

<style scoped>

</style>
