require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

import router from './Router/index';
import auth from './Store/auth';
import App from './App.vue';

Vue.use(VueRouter);

const app = new Vue({
    el: '#app',
    router,
    store: { 
        auth      
    },
    components: { App }
});
  