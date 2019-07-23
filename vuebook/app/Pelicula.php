<?php

namespace Vuebook;

use Illuminate\Database\Eloquent\Model;

class Pelicula extends Model
{
    protected $table = 'peliculas';
    protected $fillable = ['director', 'titulo'];
}
