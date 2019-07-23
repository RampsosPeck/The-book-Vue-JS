<template>
    <div class="container">
        <div class="row justify-content-center">
            <table class="table table-hover table-striped">
                <tr>
                    <th>#</th>
                    <th>TITULO</th>
                    <th>DIRECTOR</th>
                    <th>ACCIONES</th>
                </tr>
                <tr v-for="pelicula in peliculas" :key="pelicula.id">
                    <td>
                        {{ pelicula.id }}
                    </td>
                    <td class="col-md-5">
                        <input v-if="pelicula.editando" v-model="pelicula.titulo" class="form-control">
                        <span v-else>
                            {{ pelicula.titulo }}
                        </span>
                    </td>
                    <td class="col-md-4">
                        <input v-if="pelicula.editando" v-model="pelicula.director" class="form-control">
                        <span v-else>
                            {{ pelicula.director }}
                        </span>
                    </td>
                    <td class="col-md-2">
                        <div v-if="!pelicula.editando">
                            <button @click="editarPelicula(pelicula)" class="btn btn-info btn-block">Editar</button>
                            <button @click="eliminarPelicula(pelicula)" class="btn btn-danger btn-block">Eliminar</button>
                        </div>
                        <div v-else>
                            <button v-if="pelicula.id" @click="actualizarPelicula(pelicula)" class="btn btn-primary btn-block">Actualizar Pelicula</button>
                            <button v-else @click="guardarPelicula(pelicula)" class="btn btn-info btn-block">Guardar nueva pelicula</button>
                            <button @click="pelicula.editando=false" class="btn btn-info btn-warning">Cancelar</button>
                        </div>
                    </td>
                </tr>
            </table>
            <p class="lead">
                Aquí hay una ista de todas tus películas
                <button @click="crearPelicula()" class="btn btn-info">¿Añadir una nueva?</button>
            </p>
        </div>             
    </div>
</template>

<script>
    export default {
        data(){
            return { 
                peliculas: {}
            }
        }, 
        mounted: function(){
            this.fetchDatas();
        },
        methods: { 
            crearPelicula: function () {
                var nuevaPelicula = {
                    titulo: '',
                    director: '',
                    editando:true
                };
                this.peliculas.push(nuevaPelicula);
            },
            editarPelicula: function(pelicula){
                pelicula.editando = true;
            },
            actualizarPelicula: function(pelicula){
                axios.put("/api/peliculas/"+pelicula.id, pelicula).then( res => pelicula.editando = false)
            },
            eliminarPelicula: function(pelicula){
                axios.delete("/api/peliculas/"+pelicula.id).then(res => this.fetchDatas());
            },
            guardarPelicula: function(pelicula){
                axios.post("/api/peliculas/", pelicula).then(res => 

                    Vue.set(pelicula, 'id',res.data.id), 

                    pelicula.editando = false)
            },
            fetchDatas: function(){
                axios.get("/api/peliculas").then(({ data }) => (
                    this.peliculas =  data.map(function(pelicula){
                        pelicula.editando = false;
                        return pelicula
                        })
                ));
            }
        }

    }
   
</script>
