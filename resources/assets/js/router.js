
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
import Home from './components/Home.vue'
/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

//Vue.component('index', require('./components/Index.vue'));

export default new VueRouter({
	mode: 'hash',
	base: __dirname,
	routes: [
	{
		path: '/usuarios',
		components: {
			default: IndexUsuario,
			//template: '<div><index></index></div>'

					}
		},

		{path: '/usuarios/create', component: FormUsuario},
		{path: '/usuarios/:id/edit', component: FormUsuario, meta: {mode: 'edit'}},
		{path: '/usuarios/:id', component: ShowUsuario},

		{path: '/referentes',
		components: {
			default: Index,
			//template: '<div><index></index></div>'

					}
		},

		{path: '/referentes/create', component: Form},
		{path: '/referentes/:id/edit', component: Form, meta: {mode: 'edit'}},
		{path: '/referentes/:id', component: Show},

		{path: '/oferentes',
		components: {
			default: Index,
			//template: '<div><index></index></div>'

					}
		},

		{path: '/oferentes/create', component: Form},
		{path: '/oferentes/:id/edit', component: Form, meta: {mode: 'edit'}},
		{path: '/oferentes/:id', component: Show},

		{path: '/estudiantes',
		components: {
			default: Index,
			//template: '<div><index></index></div>'

					}
		},

		{path: '/estudiantes/create', component: Form},
		{path: '/estudiantes/:id/edit', component: Form, meta: {mode: 'edit'}},
		{path: '/estudiantes/:id', component: Show},

		{path: '/actividades',components: {
			default: Index,
			//template: '<div><index></index></div>'

					}
		},
		{path: '/actividades/create', component: Form},
		{path: '/actividades/:id/edit', component: Form, meta: {mode: 'edit'}},
		{path: '/actividades/:id', component: Show},

	]
});
