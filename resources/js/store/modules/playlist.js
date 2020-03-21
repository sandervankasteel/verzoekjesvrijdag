const state = {
    items: [{
        youtube_id: 'dQw4w9WgXcQ',
        image_url: 'https://i.ytimg.com/vi/dQw4w9WgXcQ/sddefault.jpg',
        title: 'Rick Astley - Never Gonna Give You Up',
        upvotes: 10,
        downvotes: 1
    }, {
        youtube_id: 'QwdbFNGCkLw',
        'image_url': 'https://i.ytimg.com/vi/QwdbFNGCkLw/default.jpg',
        title: 'Nightcore - Ievan Polkka (VSNS Remix)',
        upvotes: 420,
        downvotes: 69
    }],
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
    addToPlaylist({ state, commit, rootState }, item) {
        const roomName = rootState.room.id;
        commit('pushToPlaylist', { item, roomName });
    },
    removeFirstFromPlaylist({ state, commit}) {
        commit('popFromPlaylist')
    }
};

const mutations = {
    pushToPlaylist( state, { item, roomName }) {
        if(item.pushToBackend) {
            window.axios.post(`/api/v1/rooms/${roomName}/add_to_playlist`, item);
        }

        // if(state.items[state.items.length -1].youtube_id !== item.youtube_id) {
            state.items.push({
                downvotes: 0,
                upvotes: 0,
                ...item
            });
        // }
    },
    removeFromPlaylist( state ) {
        state.items = state.items.slice(1);
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
