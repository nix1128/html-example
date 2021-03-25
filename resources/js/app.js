import Vue from 'vue';


require('./bootstrap');


window.Vue = require('vue').default;

Vue.component('test', require('./components/Test.vue').default);
Vue.component('slider', require('./components/Slider.vue').default);

 new Vue({
    el: '#app',

    

      
});






