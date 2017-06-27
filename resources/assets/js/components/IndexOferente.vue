<template>
    <div>
        <h2>Oferentes</h2>
            <div class="actions">

                <router-link :to="{ path: '/oferentes/create' } "
                 class="btn btn-info">Nuevo Oferente</router-link>
            </div>
            <table class="table">
              <thead>
              <tr>
                <th>Id</th>
                <th>Persona</th>
                <th>Rol</th>
              </tr>
            </thead>
            <tbody v-if="oferentes">
                <tr v-for="oferentes in model">
                <td>
                  {{oferente.id}}</td>
                <td>
                  <router-link :to="{ path: '/oferentes/'+oferente.id }">{{ oferente.persona}}</router-link>
                </td>
                <td> {{oferente.rol}}
                </td>
              </tr>
            </tbody>
            <tbody v-else>
              <h2>No existen datos de Oferentes</h2>
            </tbody>
          </table>

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
      console.log('Component mounted.')
      this.fetchData()
    },
    methods:{
      fetchData(){
        var vm = this
          vm.$http.get('api/oferentes') .then(function(response){
            Vue.set(vm.$data, 'model', response.data)
          })
          .catch(function(error) {
            console.log(error)
          })
      },
    }
}
</script>
