window.Vue = require('vue');


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
import Men from './components/Men'
import Home from './components/Home'
import Women from './components/Women'
import Header from './components/Header'
import App from './components/Application'
import Contact from './components/Contact'
import Login from './components/Login'
import Dashboard from './components/Dashboard'
import VueRouter from 'vue-router'
import Add from './components/Add'
import List from './components/List'
var VueResource = require('vue-resource');

if (localStorage.getItem('jwt_token') !== null) {
    window.Vue.http.headers.common['Authorization'] = 'Bearer ' + localStorage.getItem('jwt_token')
}
Vue.http.options.root = 'http://localhost:8000';

Vue.use(VueResource);
Vue.use(VueRouter);
Vue.use(require('bootstrap-vue'))
const routes = [
    { path: '/', component: Home, name: 'home' },
    { path: '/women', component: Women, name: 'women' },
    { path: '/men', component: Men, name: 'men' },
    { path: '/contact', component: Contact, name: 'contact' },
    { path: '/login', component: Login, name: 'login' },
    { path: '/dashboard', component: Dashboard, name: 'dashboard' },
    { path: '/list/:type', component: List, name: 'list' },
    { path: '/add/:type', component: Add, name: 'add' }
]
const router = new VueRouter({
    routes
})
Vue.component('application', App)
Vue.component('app-header', Header)
const app = new Vue({
    el: '#app',
    router
});


export { router }
