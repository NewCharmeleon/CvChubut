<template>
    <div>
        <router-link :to="model.id+'/edit'" class="btn btn-warning">Editar</router-link>
        <button class="btn btn-danger" @click="remove">Borrar</button>

    <h2>{{ model.nombre }}</h2>
    <b>Categoria: </b>
    <div>{{ model.categoria }}</div>
    </div>
    <br/>
          <router-link :to="{ path: '/actividades' }" class="btn btn-danger">Listadoz/router-link>
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
    methods:(){
      fetchData(){
        var vm = this
          vm.$http.get('api/actividades'+this.$route.params.id) .then(function(response)){
            Vue.set(vm.$data, 'model', response.data.model)
          })
          .catch(function(error)) {
            console.log(error)
          })
        },
        remove:(){
            var vm = this
            vm.$http.delete('api/actividades'+vm.model.id) .then(function(response)){
              if(response.data.deleted){
                  vm.$router.push('/actividades')
              }
            })
            .catch(function(error)) {
              console.log(error)
            })
        }
    }
</script>
