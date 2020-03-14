const axios = window.axios;

const state = {
    items: [{
        youtube_id: 'dQw4w9WgXcQ',
        image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg',
        title: 'Rick Astley - Never Gonna Give You Up',
        upvotes: 10,
        downvotes: 1
    }],
};

// getters
const getters = {};

// actions
const actions = {
    addToPlaylist({ state, commit, rootState }, item) {
        const roomName = rootState.room.id;
        commit('pushToPlaylist', { item, roomName });
    }
};

const mutations = {
    pushToPlaylist( state, { item, roomName }) {
        if(item.pushToBackend) {
            axios.post(`/api/v1/rooms/${roomName}/add_to_playlist`, item);
        }

        // if(state.items[state.items.length -1].youtube_id !== item.youtube_id) {
            state.items.push({
                downvotes: 0,
                upvotes: 0,
                ...item
            });
        // }
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
