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
                <th>email</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="usuario in model">
                <td>
                  {{ user.id}}</td>
                <td>
                  <router-link :to="{ path: '/usuario/'+user.id }">{{ user.name}}</router-link>
                </td>
                <td> {{role.user.{id}}}
                </td>
              </tr>
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
