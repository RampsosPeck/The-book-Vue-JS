<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">¡Escuchemos algunas historias!</div>

                    <div class="card-body">
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
                                        <span>
                                            {{story.plot}}
                                        </span>
                                    </td>
                                    <td>
                                        <span>
                                            {{story.writer}}
                                        </span>
                                    </td>
                                    <td>
                                        {{story.upvotes}}
                                    </td>
                                    <td>
                                        <button @click="upvoteStore(story)" class="btn btn-info btn-block">
                                            Votar!
                                        </button>
                                        <button @click="deleteStore(story)" class="btn btn-danger btn-block">
                                            Eliminar
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                       
                        <p class="lead">Aquí está una lista de todas sus historias.
                        </p>
                        <pre>{{ $data }}</pre> 
                    </div>
                </div>
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
            upvoteStore: function(story){ 
                story.upvotes++;
                axios.put("/api/stories/"+story.id).then(res => console.log(res.data)); 
            },
            deleteStore: function(story){
                axios.delete("/api/stories/"+story.id).then(res => console.log(res.data));
            }
        },
        created(){
            axios.get("/api/stories").then(({ data }) => (this.stories = data));
 
        }
    }
   
</script>
