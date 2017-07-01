<template >
<div>
  <h2>{{titulo}}</h2>
  <p>Edicion de Usuarios</p>
    <form  @submit.prevent="save">
    <div class="form-group">
      <label for="add-nombre">Nombre</label>
      <input class="form-control" id="add-nombre" v-model="form.name" />
      <small class="text-danger" v-if="errors.name"  v-for="error in errors.name" >{{ error }}</small>
    </div>
    <div class="form-group">
      <label for="add-email">Email</label>
      <input class="form-control" id="add-email" v-model="form.email" />
      <small class="text-danger" v-if="errors.email"  v-for="error in errors.email" >{{ error }}</small>
    </div>
    <div class="form-group">
      <label for="add-role">Rol</label>
      <input class="form-control" id="add-role" v-model="form.role" />
      <small class="text-danger" v-if="errors.role"  v-for="error in errors.role" >{{ error }}</small>
    </div>
    <button class="btn btn-success">Guardar</button>
     <router-link :to="{ path: '/usuarios' }" class="btn btn-danger">Cancelar</router-link>
  </form>
</div>
</template>

<script>
    export default {
        data(){

          return {
                form: {},
                errors: {},
                option: {},
                url: 'api/usuarios',
                method: 'post',
                initialize:'api/usuarios'
            }
      },
      beforeMount() {

            if( this.$route.meta.mode === 'edit') {

                this.initialize = this.initialize +'/'+this.$route.params.id + '/edit'
                this.url        = this.url +'/'+this.$route.params.id
                this.method     = 'put'

            }else{
                this.initialize= this.initialize+'/create'
            }

            this.fetchData()
        },

      methods:{
          fetchData() {

                var vm = this
                vm.$http.get(this.initialize)
                    .then(function(response) {
                        Vue.set(vm.$data, 'form', response.data.form)
                        Vue.set(vm.$data, 'option', response.data.option)
                    })
                    .catch(function(error) {
                        console.log(error)
                    })
            },
            save() {
                var vm = this

                         vm.$http[vm.method](vm.url, vm.form).then(function(response) {

                            if(response.data.saved) {

                                vm.$router.push('/usuarios')

                            }else{

                                Vue.set(vm.$data, 'errors', response.data)
                            }
                        })
                        .catch(function(error) {

                            Vue.set(vm.$data, 'errors', error.response.data)
                        })

            },

      }
    }
</script>
