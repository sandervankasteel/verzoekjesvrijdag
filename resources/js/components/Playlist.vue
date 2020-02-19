<template>
    <div class="pl-4 pt-4">
        <ul>
            <li v-for="(item, index) in items">
                <PlaylistItem :item="item" :key="index"></PlaylistItem>
            </li>
        </ul>
    </div>
</template>

<script>
    export default {
        name: "Playlist",
        data() {
            return {
                items: [
                    {
                        image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg',
                        title: 'Rick Astley - Never Gonna Give You Up',
                        upvotes: 10,
                        downvotes: 1
                    },
                    {
                        image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg',
                        title: 'Rick Astley - Never Gonna Give You Up',
                        upvotes: 10,
                        downvotes: 1
                    },
                    {
                        image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg',
                        title: 'Rick Astley - Never Gonna Give You Up',
                        upvotes: 10,
                        downvotes: 1
                    },
                    {
                        image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg',
                        title: 'Rick Astley - Never Gonna Give You Up',
                        upvotes: 10,
                        downvotes: 1
                    },
                    {
                        image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg',
                        title: 'Rick Astley - Never Gonna Give You Up',
                        upvotes: 10,
                        downvotes: 1
                    },
                    {
                        image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg',
                        title: 'Rick Astley - Never Gonna Give You Up',
                        upvotes: 10,
                        downvotes: 1
                    },
                    // {
                    //     image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg',
                    //     title: 'Rick Astley - Never Gonna Give You Up',
                    //     upvotes: 10,
                    //     downvotes: 1
                    // },
                    // {
                    //     image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg',
                    //     title: 'Rick Astley - Never Gonna Give You Up',
                    //     upvotes: 10,
                    //     downvotes: 1
                    // },
                    // {
                    //     image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg',
                    //     title: 'Rick Astley - Never Gonna Give You Up',
                    //     upvotes: 10,
                    //     downvotes: 1
                    // },
                    // {
                    //     image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg',
                    //     title: 'Rick Astley - Never Gonna Give You Up',
                    //     upvotes: 10,
                    //     downvotes: 1
                    // },
                    // {
                    //     image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg',
                    //     title: 'Rick Astley - Never Gonna Give You Up',
                    //     upvotes: 10,
                    //     downvotes: 1
                    // }
                ]
            }
        }
    }
</script>

<style scoped>
ul {
    overflow-y: auto;
}
</style>
