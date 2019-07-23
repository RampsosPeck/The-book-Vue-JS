<?php

namespace Vuebook\Http\Controllers\Api;

use Vuebook\Pelicula;
use Illuminate\Http\Request;
use Vuebook\Http\Controllers\Controller;

class PeliculasController extends Controller
{
    /**
     * Display a listing of stories
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $peliculas= Pelicula::orderBy('id','ASC')->get();
        return $peliculas;
	}
    /**
     * Display the specified Story.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Story::findOrAbort($id);
    }
    /**
     * Store a newly created Story in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pelicula = new Pelicula($request->all());
        $pelicula->save();
        return $pelicula;
    }
    /**
     * Update the specified Story in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {

        $pelicula = Pelicula::findOrFail($id);
		$pelicula->fill($request->only(['director', 'titulo'])); 
        $pelicula->save();
        return $pelicula;
	}
    /**
     * Remove the specified Story from storage.
     *
     * @param int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
    	//dd($id);
        $pelicula =  Pelicula::findOrFail($id);
        $pelicula->delete();
        return \Response::json(['success' => true]);
    }
}
