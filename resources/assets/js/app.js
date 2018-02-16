
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

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
import VueRouter from 'vue-router'
var VueResource = require('vue-resource');

Vue.use(VueResource);
Vue.use(VueRouter)
Vue.use(require('bootstrap-vue'))
const routes = [
    {path: '/', component: Home, name: 'home'},
    {path: '/women', component: Women, name: 'women'},
    {path: '/men', component: Men, name: 'men'},
    {path: '/contact', component: Contact, name: 'contact'}
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
