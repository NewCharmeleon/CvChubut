<template>
    <div>
        <router-link :to="model.id+'/edit'" class="btn btn-warning">Editar</router-link>
        <button class="btn btn-danger" @click="remove">Borrar</button>
        <td> <h2>Nuevo Estudiante</h2>
        </td>
        <br><br>
        <b>Id: </b>{{ model.id }}
        <br><br>
        <b>Persona: </b>{{ model.persona }}
        <br><br>
        <b>Rol: </b> {{ model.rol }}
        <br><br>
        <b>Carrera: </b> {{ model.carrera }}
        <br><br>

    <br/>
          <router-link :to="{ path: '/estudiantes' }" class="btn btn-danger">Listado</router-link>
  </div>

</template>

<script>
    export default {
        data() {
            return {
              model : {}
        }
    },
    beforeMount() {
      this.fetchData()
    },
    methods:{
      fetchData(){
        var vm = this
          vm.$http.get('api/estudiantes/'+this.$route.params.id) .then(function(response){
            Vue.set(vm.$data, 'model', response.data)
          })
          .catch(function(error) {
            console.log(error)
          })
        },
        remove(){
            var vm = this
            vm.$http.delete('api/estudiantes'+vm.model.id) .then(function(response){
              if(response.data.deleted){
                  vm.$router.push('/estudiantes')
              }
            })
            .catch(function(error) {
              console.log(error)
            })
        }
    }}
</script>
