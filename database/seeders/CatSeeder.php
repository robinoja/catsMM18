<?php

namespace Database\Seeders;

use App\Models\Cat;
use Illuminate\Database\Seeder;

class CatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cat::factory(50)->create();
    
        $tags = Tag::inRandomOrder()->limit(rand(0, 2))->get();

        foreach ($cats as $cat) {
            foreach ($tags as $tag) {
                $cat->tags()->attach($tag->id);
            }
        }
    }
}
