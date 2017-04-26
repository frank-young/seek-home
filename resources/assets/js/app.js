
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

Vue.component('example-list', require('./components/example/List.vue'));
Vue.component('carousel', require('./components/carousel/Carousel.vue'));
Vue.component('sub-title', require('./components/subtitle/SubTitle.vue'));
Vue.component('image-grid-one', require('./components/image/ImageGridOne.vue'));
Vue.component('image-grid-two', require('./components/image/ImageGridTwo.vue'));
Vue.component('icon-card', require('./components/iconcard/IconCard.vue'));
Vue.component('icon-card-flip', require('./components/iconcard/IconCardFlip.vue'));
Vue.component('step-tab', require('./components/steptab/StepTab.vue'));
Vue.component('split-box', require('./components/splitbox/SplitBox.vue'));
Vue.component('image-grid', require('./components/image/ImageGrid.vue'));

const app = new Vue({
    el: '#app'
});
