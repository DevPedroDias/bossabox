require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';
Vue.use(VueRouter);

import VueAxios from 'vue-axios';
import axios from 'axios';
Vue.use(VueAxios, axios);


import App from './components/App.vue';
import Tools from './components/Tools.vue';


const routes = [
    {
        name: 'Tools',
        path: '/',
        component: Tools
    }
  ];

const router = new VueRouter({ mode: 'history', routes: routes});
new Vue(Vue.util.extend({ router }, App)).$mount('#app');
