<template>
    <div>
        <h2>Estudiantes</h2>
            <div class="actions">

                <router-link :to="{ path: '/estudiantes/create' } "
                 class="btn btn-info">Nuevo Estudiante</router-link>
            </div>
            <table class="table">
              <thead>
              <tr>
                <th>Id</th>
                <th>Persona</th>
                <th>Rol</th>
                <th>Carrera</th>
              </tr>
            </thead>
            <tbody v-if="estudiantes">
                <tr v-for="estudiantes in model">
                <td>
                  {{estudiante.id}}</td>
                <td>
                  <router-link :to="{ path: '/estudiantes/'+estudiante.id }">{{ estudiante.persona}}</router-link>
                </td>
                <td> {{estudiante.rol}}
                </td>
                <td> {{estudiante.carrera}}
                </td>
              </tr>
            </tbody>
            <tbody v-else>
              <h2>No existen datos de Estudiantes</h2>
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
    methods:{
      fetchData(){
        var vm = this
          vm.$http.get('api/estudiantes') .then(function(response){
            Vue.set(vm.$data, 'model', response.data)
          })
          .catch(function(error) {
            console.log(error)
          })
      },
    }
}
</script>
