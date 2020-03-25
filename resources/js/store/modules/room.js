const state = {
    id: '',
    members: [],
};

const getters = {
    hasJoinedRoom: (state) => {
        // console.log('room hasJoinedRoom getters state: ', state);
        // return !!state.id;
        return true;
    },
    getMembers: (state) => {
        return state.members;
    }
};

const actions = {
    async setRoom({state, commit}, roomId) {
        const axios = require('axios');

        await axios.patch(`/api/v1/room/join/${roomId}`);

        commit('setRoomId', roomId);
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
