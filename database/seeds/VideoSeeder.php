<?php

use Illuminate\Database\Seeder;

class VideoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i=0; $i<100; $i++) {
            /** @var \App\Video $video */
            $video = factory(\App\Video::class)->create();

            $video->page()->create([
                'slug' => str_slug($video->title),
            ]);
        }
    }
}
