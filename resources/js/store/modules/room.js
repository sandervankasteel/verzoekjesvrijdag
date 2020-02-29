import Echo from "laravel-echo";

const state = {
    id: '',
    members: [],
};

const getters = {};

const actions = {
    setRoom({ state, commit }, roomId) {
        commit('setRoomId', roomId);

        window.Echo.channel(roomId).listen('users', function(data) {
            console.log('Echo reply: ', data);
        });

    },
    addMember({ state, commit}, name) {
        commit('appendMember', name)
    },
    addMembers({ state, commit}, users) {
        for(let user of users) {
            commit('appendMember', user);
        }
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
