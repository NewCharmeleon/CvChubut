/**
 * First we will load all of this project's JavaScript dependencies which
 * include Vue and Vue Resource. This gives a great starting point for
 * building robust, powerful web applications using Vue and Laravel.
 */
import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);


//import HomeUsuario from './components/HomeUsuario.vue'
import Form from './components/Form.vue'
import Show from './components/Show.vue'
import Index from './components/Index.vue'
import Home from './components/Home.vue'

import FormUsuario from './components/FormUsuario.vue'
import ShowUsuario from './components/ShowUsuario.vue'
import IndexUsuario from './components/IndexUsuario.vue'

import FormReferente from './components/FormReferente.vue'
import ShowReferente from './components/ShowReferente.vue'
import IndexReferente from './components/IndexReferente.vue'

import FormOferente from './components/FormOferente.vue'
import ShowOferente from './components/ShowOferente.vue'
import IndexOferente from './components/IndexOferente.vue'

import FormEstudiante from './components/FormEstudiante.vue'
import ShowEstudiante from './components/ShowEstudiante.vue'
import IndexEstudiante from './components/IndexEstudiante.vue'

/*import FormReferente from './components/FormEstudiante.vue'
import ShowReferente from './components/ShowEstudiante.vue'
import IndexReferente from './components/IndexEstudiante.vue'
/*
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
		components:  IndexUsuario,
		},

		{path: '/usuarios/create', component: FormUsuario},
		{path: '/usuarios/:id/edit', component: FormUsuario, meta: {mode: 'edit'}},
		{path: '/usuarios/:id', component: ShowUsuario},

		{path: '/referentes',
		components: {
			default: IndexReferente,
			//template: '<div><index></index></div>'

					}
		},

		{path: '/referentes/create', component: FormReferente},
		{path: '/referentes/:id/edit', component: FormReferente, meta: {mode: 'edit'}},
		{path: '/referentes/:id', component: ShowReferente},

		{path: '/oferentes',
		components: {
			default: IndexOferente,
			//template: '<div><index></index></div>'

					}
		},

		{path: '/oferentes/create', component: FormOferente},
		{path: '/oferentes/:id/edit', component: FormOferente, meta: {mode: 'edit'}},
		{path: '/oferentes/:id', component: ShowOferente},

		{path: '/estudiantes',
		components: {
			default: IndexEstudiante,
			//template: '<div><index></index></div>'

					}
		},

		{path: '/estudiantes/create', component: FormEstudiante},
		{path: '/estudiantes/:id/edit', component: FormEstudiante, meta: {mode: 'edit'}},
		{path: '/estudiantes/:id', component: ShowEstudiante},

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
