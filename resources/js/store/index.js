import Vue from "vue";
import Vuex from "vuex";
import playlist from "./modules/playlist";
import room from "./modules/room";

Vue.use(Vuex);

export default new Vuex.Store({
    modules: {
        playlist,
        room
    }
});
