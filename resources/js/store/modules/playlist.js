const state = {
    items: [],
    loading: true
};

// getters
const getters = {
    getItems: state => {
        return state.items;
    },
    getNextInQueue: state => {
        return state.items[0];
    }
};

// actions
const actions = {
    addToPlaylist({commit, rootState }, item) {
        const roomName = rootState.room.id;

        commit('pushToPlaylist', { item, roomName });
    },
    removeFirstFromPlaylist({ state, commit}) {
        commit('popFromPlaylist', state);
    },
    populatePlaylist({ commit, rootState}) {
        const roomName = rootState.room.id;

        window.axios.get(`/api/v1/rooms/${roomName}/playlist_items`)
            .then((resp) => {
                commit('populatePlaylist', { items: resp.data.data });
            });
    }
};

const mutations = {
    populatePlaylist(state, { items }) {
        state.items = items;
        state.loading = false;
    },
    pushToPlaylist(state, { item, roomName }) {
        if(item.pushToBackend) {
            window.axios.post(`/api/v1/rooms/${roomName}/add_to_playlist`, item);
        }

        state.items.push({
            downvotes: 0,
            upvotes: 0,
            ...item
        });
    },
    popFromPlaylist( state ) {
        state.items = state.items.slice(1);
    },
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
