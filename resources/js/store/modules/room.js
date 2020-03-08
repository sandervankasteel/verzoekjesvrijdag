import Echo from "laravel-echo";


const state = {
    id: '',
    members: [],
};

const getters = {
    hasJoinedRoom: (state) => {
        console.log(this);
        return true;
    }
};

const actions = {
    async setRoom({state, commit}, roomId) {
        const axios = require('axios');

        await axios.patch(`/api/v1/room/join/${roomId}`);
        console.log(`room.${roomId}`);

        window.Echo.join(`room.${roomId}`)
            .listen('UserJoinedRoom', (e) => {
                console.log('Echo reply: ', e);
            });

        commit('setRoomId', roomId);
        //     .then(() => {
        // });
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
