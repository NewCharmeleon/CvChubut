
/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter)

import Form from './components/Form.vue'
import Show from './components/Show.vue'
import Index from './components/Index.vue'
import home from './components/home.vue'
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('index', require('./components/Index.vue'));

export default new VueRouter({
	mode: 'hash',
	base: __dirname,
	routes:[{
		path: '/actividades',
		components: {
			default: Index
			//template: '<div><index></index></div>'

					}
		},
		{path: '/', component: home},
		{path: '/actividades/create', component: Form},
		{path: '/actividades/:id/edit', component: Form, meta: {mode: 'edit'}},
		{path: '/actividades/:id', component: Show},

	]
});
