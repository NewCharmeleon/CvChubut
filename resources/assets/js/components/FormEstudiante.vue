<template >
<div>
  <h2>{{titulo}}</h2>

  <form  @submit.prevent="save">

    <div class="form-group">
      <p>Edicion de Estudiantes</p>
      <label for="add-persona">Persona</label>
      <input class="form-control" id="add-persona" v-model="form.persona" />
      <small class="text-danger" v-if="errors.persona"  v-for="error in errors.persona" >{{ error }}</small>
    </div>
    <div class="form-group">
      <label for="add-rol">Rol</label>
      <input class="form-control" id="add-rol" v-model="form.rol" />
      <small class="text-danger" v-if="errors.rol"  v-for="error in errors.rol" >{{ error }}</small>
    </div>
    <div class="form-group">
      <label for="add-carrera">Carrera</label>
      <input class="form-control" id="add-carrera" v-model="form.carrera" />
      <small class="text-danger" v-if="errors.carrera"  v-for="error in errors.carrera" >{{ error }}</small>
    </div>
    <button class="btn btn-success">Guardar</button>
     <router-link :to="{ path: '/estudiantes' }" class="btn btn-danger">Cancelar</router-link>
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
                url: 'api/estudiantes',
                method: 'post',
                initialize:'api/estudiantes'
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

                                vm.$router.push('/estudiantes')

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
