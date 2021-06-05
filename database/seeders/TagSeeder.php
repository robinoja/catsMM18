<?php

namespace Database\Seeders;

use App\Models\Cat;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        Cat::all()->each(function ($cat) {
//            $tags = Tag::factory(rand(1, 2))->create();
//
//            foreach($tags as $tag) {
//                $cat->tags()->attach($tag->id);
//            }
//        });

        $tags = ['hairless', 'hypoallergenic', 'white', 'fluffy', 'black'];

        foreach ($tags as $tag) {
            Tag::factory()->create(['tag' => $tag]);
        }
    }
}