import Vue from 'vue';
import Buefy from 'buefy';

require('./bootstrap');

window.Vue = require('vue').default;
Vue.use(Buefy);



Vue.component('example-component', require('./components/ExampleComponent.vue').default);



const app = new Vue({
    el: '#app',
});
