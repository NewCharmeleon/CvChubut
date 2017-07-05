<template>
    <div>
      3444234233423434234234
        <h2>Usuarios</h2>
            <div class="actions">
                <router-link :to="'/usuarios/create'" class="btn btn-info">Nuevo Usuario</router-link>
            </div>

            <table>
              <thead>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>

              </tr>
            </thead>
            <tbody>

              <template v-if="model.length != 0">
                <tr v-for="user in model">
                  <td>
                    {{user.id}}
                  </td>
                  <td>
                    <router-link :to="'/usuarios/'+user.id">{{ user.name}}</router-link>
                  </td>
                  <td>

                  </td>
                  <td>
                    {{user.name}}
                  </td>
                </tr>

              </template>
              <template v-else>
                <tr> <td>  <h2>No existen datos de Usuario</h2> </td></tr>
              </template>


            </tbody>
          </table>

    </div>
</template>

<script>

import Vue from 'vue'

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
          vm.$http.get('api/usuarios') .then(function(response){
            Vue.set(vm.$data, 'model', response.data)
          })
          .catch(function(error) {
            console.log(error)
          })
      }
    }
}
</script>
