<?php

use Illuminate\Database\Seeder;
use Vuebook\Story;
class StorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Story::class, 30)->create();
    }
}
