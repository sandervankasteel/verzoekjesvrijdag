const axios = require('axios');

const state = {
    items: [{
        id: 'dQw4w9WgXcQ',
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
        console.log(rootState);
        const roomName = rootState.room.id;
        commit('pushToPlaylist', { item, roomName});
    }
};

const mutations = {
    pushToPlaylist( state, { item, roomName}) {

        state.items.push({
            downvotes: 0,
            upvotes: 0,
            ...item
        });

        axios.post(`/api/v1/rooms/${roomName}/add_to_playlist`, item);
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
