import Vue from "vue";
import Vuex from "vuex";
import playlist from "./modules/playlist";
import room from "./modules/room";

Vue.use(Vuex);

const debug = process.env.NODE_ENV !== 'production';

export default new Vuex.Store({
    modules: {
        room,
        playlist,
    },
    strict: debug
});
