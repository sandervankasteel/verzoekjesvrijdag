const state = {
    id: '',
    members: [],
};

const getters = {};

const actions = {
    setRoom({ state, commit }, roomId) {
        commit('setRoomId', roomId);
    },
    addMember({ state, commit}, name) {
        commit('appendMember', name)
    }
};

const mutations = {
    setRoomId(state, id) {
        state.id = id;
    },
    appendMember(state, name) {
        state.members.push(name);
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
}
