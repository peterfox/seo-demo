<?php

use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<100; $i++) {
            /** @var \App\Post $post */
            $post = factory(\App\Post::class)->create();

            $post->page()->create([
               'slug' => str_slug($post->title),
            ]);
        }
    }
}
