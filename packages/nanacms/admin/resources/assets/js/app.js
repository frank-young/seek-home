
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

import VueResource from 'vue-resource'
Vue.use(VueResource)

Vue.component('article-index', require('./components/article/Index.vue'));
Vue.component('carousel-index', require('./components/carousel/Index.vue'));
Vue.component('customer-index', require('./components/customer/Index.vue'));
Vue.component('upload', require('./components/upload/Upload.vue'));
Vue.component('upload-batch', require('./components/upload/UploadBatch.vue'));

const app = new Vue({
    el: '#app',
    data () {
      return {
        imagePath: ''
      }
    }
});
