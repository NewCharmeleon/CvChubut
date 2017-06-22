<template>
    <div>
        <router-link :to="model.id+'/edit'" class="btn btn-warning">Editar</router-link>
        <button class="btn btn-danger" @click="remove">Borrar</button>

        <br><br>
        <b>Id: </b>{{ model.id }}
        <br><br>
        <b>Nombre: </b>{{ model.nombre }}
        <br><br>
        <b>Descripcion: </b> {{ model.descripcion }}
        <br><br>

    <br/>
          <router-link :to="{ path: '/actividades' }" class="btn btn-danger">Listado</router-link>
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
          vm.$http.get('api/actividades/'+this.$route.params.id) .then(function(response){
            Vue.set(vm.$data, 'model', response.data)
          })
          .catch(function(error) {
            console.log(error)
          })
        },
        remove(){
            var vm = this
            vm.$http.delete('api/actividades'+vm.model.id) .then(function(response){
              if(response.data.deleted){
                  vm.$router.push('/actividades')
              }
            })
            .catch(function(error) {
              console.log(error)
            })
        }
    }}
</script>
