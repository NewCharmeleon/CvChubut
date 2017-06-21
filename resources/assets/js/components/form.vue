<template >
<div>
  <h2>{{titulo}}</h2>
  <form  @submit.prevent="save">
    <div class="form-group">
      <label for="add-nombre">Nombre</label>
      <input class="form-control" id="add-nombre" v-model="form.nombre" />
      <small class="text-danger" v-if="errors.nombre"  v-for="error in errors.nombre" >{{ error }}</small>
    </div>
    <div class="form-group">
      <label for="add-categoria">Categoria</label>
     //select()
    </div>
    <button class="btn btn-success">Guardar</button>
     <router-link :to="{ path: '/actividades' }" class="btn btn-danger">Cancelar</router-link>
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
                url: 'api/actividades',
                method: 'post',
                initialize:'api/actividades'
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
                                
                                vm.$router.push('/actividades')

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
