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
    addToPlaylist({ state, commit }, item) {
        commit('pushToPlaylist', { item });
    }
};

const mutations = {
    pushToPlaylist( state, { item }) {

        state.items.push({
            downvotes: 0,
            upvotes: 0,
            ...item
        });
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
