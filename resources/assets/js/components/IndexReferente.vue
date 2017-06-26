<template>
    <div>
        <h2>Referentes</h2>
            <div class="actions">

                <router-link :to="{ path: '/referentes/create' } "
                 class="btn btn-info">Nuevo Referente</router-link>
            </div>
            <table class="table">
              <thead>
              <tr>
                <th>Id</th>
                <th>Persona</th>
                <th>Rol</th>
              </tr>
            </thead>
            <tbody v-if="!referente">
              <tr v-for="referente in model">
                <td>
                  {{referente.id}}</td>
                <td>
                  <router-link :to="{ path: '/referentes/'+referente.id }">{{ referente.name}}</router-link>
                </td>
                <td> {{referente.rol}}
                </td>
              </tr>
            </tbody>
            <tbody v-else>
              <h2>No existen datos de Referentes</h2>
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
          vm.$http.get('api/referentes') .then(function(response){
            Vue.set(vm.$data, 'model', response.data)
          })
          .catch(function(error) {
            console.log(error)
          })
      },
    }
}
</script>
