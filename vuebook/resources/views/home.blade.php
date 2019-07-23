@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    	<div class="card ">
    		
	        <div class="card-header">
	            <ul class="nav nav-pills ">
	                <li class="nav-item"><a class="nav-link " href="#historias" data-toggle="tab"> Ejercicio de Historias </a></li> |
	                <li class="nav-item"><a class="nav-link" href="#peliculas" data-toggle="tab"> Ejercicio de Peliculas </a></li> 
	            </ul>
	        </div> 
	    	 <div class="card-body  ">
	            <div class="tab-content">
	                <div class="tab-pane" id="historias">
	                      <historia></historia>  
	                </div>

	                <div class="tab-pane" id="peliculas">
	                      <pelicula></pelicula>
	                </div> 
	            </div>  
	    	</div>

    	</div>  
    </div>
</div>
@endsection
 