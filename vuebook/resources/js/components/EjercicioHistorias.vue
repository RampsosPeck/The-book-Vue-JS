<template>
    <div class="container">
        <div class="row justify-content-center">
             
                    
                <table class="table table-hover table-striped">
                    <tbody>
                        <tr >
                            <th>#</th>
                            <th>Sinopsis</th>
                            <th>Escritor</th>
                            <th>Votos a favor</th>
                            <th>Acciones</th>
                        </tr>  
                        <tr v-for="story in stories"   :story="story">
                            <td>
                                {{story.id}}
                            </td>
                            <td>
                                <!--Si estás editando la historia, muestra el campo de texto para plot-->
                                <input v-if="story.editing" v-model="story.plot" class="form-control"> </input>
                                <!--en otras ocasiones, muestra plot-->
                                <span>
                                    {{story.plot}}
                                </span>
                            </td>
                            <td>
                                <input v-if="story.editing" v-model="story.writer" class="form-control"> </input>
                                <span>
                                    {{story.writer}}
                                </span>
                            </td>
                            <td>
                                {{story.upvotes}}
                            </td>
                            <td>
                                <div v-if="!story.editing"  >
                                    
                                <button @click="upvoteStory(story)" class="btn btn-primary btn-block">
                                    Votar!
                                </button>
                                <button @click="editStory(story)" class="btn btn-info btn-block">
                                    Editar
                                </button>
                                <button @click="deleteStory(story)" class="btn btn-danger btn-block">
                                    Eliminar
                                </button>

                                </div>
                                <div v-else>
                                    <!-- Si la historia es antigua entonces queremos actualizarla TIP: si la historia es tomada de la base de datos entonces tendrá un id -->
                                    <button v-if="story.id" @click="updateStory(story)" class="btn btn-success btn-block">
                                    Actualizar Historia
                                    </button>
                                    <!-- Si la historia es nueva queremos guardarla -->
                                    <button v-else @click="storeStory(story)" class="btn btn-info btn-block">
                                    Guardar nueva Historia
                                    </button>
                                    <button @click="story.editing=false" class="btn btn-warning btn-block">
                                    Cancelar
                                    </button>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            
                <p class="lead">Aquí está una lista de todas sus historias.
                    <button class="btn btn-success" @click="createStory()">
                        ¿Añadir una nueva?
                    </button>
                </p>
                <pre>{{ $data }}</pre>  
            </div> 
        </div>
    </div>
</template>

<script>
 

    export default {
        data(){
            return { 
                stories:{}, 
            }

        }, 
        methods: { 
            createStory: function(){
                var newStory = {
                    "plot": "",
                    "upvotes": 0,
                    "editing": true 
                };
                this.stories.push(newStory);
            },
            upvoteStory: function(story){ 
                story.upvotes++;
                axios.put("/api/stories/"+story.id).then(res => console.log(res.data)); 
            },
            deleteStory: function(story){ 
                axios.delete("/api/stories/"+story.id).then(res => console.log(res.data));
            },
            editStory: function(story){
                story.editing=true;
            },
            updateStory: function(story){
                axios.put("/api/stories/"+story.id, story).then(res => story.editing = false);
            },
            storeStory: function(story){
                axios.post('/api/stories/',story).then(res => 
                    //Yo uso Vue.set(story, 'id', response.data.id) en lugar de story.id = response.data.id * porque dentro de nuestra tabla mostramos el id de cada historia.
                    Vue.set(story, 'id',res.data.id),  
                    story.editing = false);
            }
        },
        created(){
            axios.get("/api/stories").then(({ data }) => (
              
                this.stories =  data.map(function(story){
                    story.editing = false;
                    return story
                    })

            ));
 
        }
    }
   
</script>
