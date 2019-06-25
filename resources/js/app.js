/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

Vue.component('Profile', require('./components/Profile.vue').default);
Vue.component('Universidad', require('./components/Universidad.vue').default);
Vue.component('Cursos', require('./components/Cursos.vue').default);
Vue.component('Becas', require('./components/Becas.vue').default);
Vue.component('Paises', require('./components/Paises.vue').default);
Vue.component('Ciudades', require('./components/Ciudades.vue').default);
Vue.component('Idiomas', require('./components/Idiomas.vue').default);

const app = new Vue({
    el: '#app',
});
