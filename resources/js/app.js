require('./bootstrap');
window.Vue = require('vue');

import Vue from 'vue'
import { BootstrapVue, IconsPlugin } from 'bootstrap-vue'
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'
import VueRouter from 'vue-router';
import VueAxios from 'vue-axios';
import Axios from 'axios';

Vue.use(VueRouter,VueAxios,Axios);
// Install BootstrapVue
Vue.use(BootstrapVue)
// Optionally install the BootstrapVue icon components plugin
Vue.use(IconsPlugin)


// route target
//pelanggan
import App from './components/App.vue';
import BerandaPelanggan from './components/pelanggan/Beranda.vue';
import Kemeja from './components/pelanggan/Kemeja.vue';
import Kaos from './components/pelanggan/Kaos.vue';
import Jaket from './components/pelanggan/Jaket.vue';
import Bmuslim from './components/pelanggan/Bmuslim.vue';
//import Pencarian from './store/index'
//admin
import BerandaAdmin from './components/admin/Beranda.vue';
import Tambah from './components/admin/Tambah.vue';
import Edit from './components/admin/Edit.vue';

const routes = [
    
    {
        name:'Beranda',
        path:'/',
        component: BerandaPelanggan
    },
    {
        name:'Kemeja',
        path:'/kemeja',
        component: Kemeja
    },
    {
        name:'Kaos',
        path:'/kaos',
        component: Kaos
    },
    {
        name:'Jaket',
        path:'/jaket',
        component: Jaket
    },
    {
        name:'Bmuslim',
        path:'/bmuslim',
        component: Bmuslim
    },

    //admin
    {
        name:'BerandaAdmin',
        path:'/admin',
        component: BerandaAdmin
    },
    {
        name:'Tambah',
        path:'/admin/proses',
        component: Tambah
    },
    {
        name:'Edit',
        path:'/admin/edit/:id',
        component: Edit
    },
    
];

const router = new VueRouter({ mode: 'history', routes: routes });
new Vue(Vue.util.extend({ router }, App)).$mount("#app");
