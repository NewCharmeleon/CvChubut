<template>
    <div>
        <h2>Actividades</h2>
            <div class="actions">

                <router-link :to="{ path: '/actividades/create' } "
                 class="btn btn-info">Nueva actividad</router-link>
            </div>
            <table class="table">
              <thead>
              <tr>
                <th>Nombre</th>
                <th>Categoria</th>
              </tr>
            </thead>
            <tbody>
              <tr> v-for="actividad in model">
                <td>
                  <router-link :to="{ path: '/actividades/'+actividad.id }">{{ actividad.nombre}}</router-link>
                </td>
                <td> {{actividad.codigo}}
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
    mounted() {
      console.log('Component mounted.')
      this.fetchData()
    },
    methods:(){
      fetchData(){
        var vm = this
          vm.$http.get('api/actividades') .then(function(response)){
            Vue.set(vm.$data, 'model', response.data)
          })
          .catch(function(error)) {
            console.log(error)
          })
      },
    }
</script>
