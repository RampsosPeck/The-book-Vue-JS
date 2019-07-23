<?php

use Illuminate\Database\Seeder;
use Vuebook\Pelicula;
class PeliculaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Pelicula::class, 30)->create();
    }
}
