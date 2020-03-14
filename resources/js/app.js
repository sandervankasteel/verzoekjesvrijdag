window.axios = require('axios');
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

// /**
//  * First we will load all of this project's JavaScript dependencies which
//  * includes Vue and other libraries. It is a great starting point when
//  * building robust, powerful web applications using Vue and Laravel.
//  */
//
// window.Vue = require('vue');
// /**
//  * The following block of code may be used to automatically register your
//  * Vue components. It will recursively scan this directory for the Vue
//  * components and automatically register them with their "basename".
//  *
//  * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
//  */
//
import Vue from 'vue';
import App from './App.vue';
import routes from './routes';
import store from './store'
import { library } from '@fortawesome/fontawesome-svg-core'
import { fas } from '@fortawesome/free-solid-svg-icons'
import { FontAwesomeIcon } from '@fortawesome/vue-fontawesome'
import VueRouter from 'vue-router';
import VueYoutube from 'vue-youtube'

library.add(fas);

Vue.use(VueRouter);
Vue.use(VueYoutube);

const router = new VueRouter(routes);

const files = require.context('./', true, /\.vue$/i);
files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

Vue.component('font-awesome-icon', FontAwesomeIcon);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

import Echo from 'laravel-echo';

window.Pusher = require('pusher-js');
window.Pusher.logToConsole = true;

window.Echo = new Echo({
    broadcaster: 'pusher',
    key: process.env.MIX_PUSHER_APP_KEY,
    cluster: process.env.MIX_PUSHER_APP_CLUSTER,
    encrypted: true,
        auth: {
            headers: {
                'X-CSRF-TOKEN': document.querySelector('[name="csrf-token"]').content,
        },
    },
});

const app = new Vue({
    el: '#app',
    store,
    router,
    render: h => h(App),
});
