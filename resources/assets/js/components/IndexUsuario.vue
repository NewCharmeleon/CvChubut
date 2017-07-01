<template>
    <div>
        <h2>Usuarios</h2>
            <div class="actions">

                <router-link :to="{ path: '/usuarios/create' } "
                 class="btn btn-info">Nuevo Usuario</router-link>
            </div>
            <table class="table">
              <thead>
              <tr>
                <th>Id</th>
                <th>Nombre</th>
                <th>Email</th>
                <th>Rol</th>

              </tr>
            </thead>
            <tbody v-if="!users">
              <tr v-for="user in model">
                <td>
                  {{user.id}}</td>
                <td>
                  <router-link :to="{ path: '/usuarios/'+user.id }">{{ user.name}}</router-link>
                </td>
                <td> {{user.email}}{{user.role}}
                </td>
              </tr>
            </tbody>
            <tbody v-else>
              <h2>No existen datos de Usuario</h2>
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
          vm.$http.get('api/usuarios') .then(function(response){
            Vue.set(vm.$data, 'model', response.data)
          })
          .catch(function(error) {
            console.log(error)
          })
      },
    }
}
</script>
