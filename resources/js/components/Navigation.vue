<template>
    <div class="w-full block flex-grow lg:flex lg:items-center lg:w-auto">
        <div class="items-center flex-shrink-0 text-white mr-6">
            <router-link to="/">
                <span class="font-semibold text-xl tracking-tight">Verzoekjes Vrijdag</span>
            </router-link>
        </div>
        <div class="text-sm lg:flex-grow">
            <router-link to="/about" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">About</router-link>
            <router-link to="/contact" class="block mt-4 lg:inline-block lg:mt-0 text-teal-200 hover:text-white mr-4">Contact</router-link>
        </div>
    </div>
</template>

<script>
    export default {
        name: "Navigation"
    }
</script>

<style scoped>

</style>
