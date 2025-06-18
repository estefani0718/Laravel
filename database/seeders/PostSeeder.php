<?php

namespace Database\Seeders;

use App\Models\Images;
use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::factory(50)->create()->each(function(Post $post){
            Images::factory()->create([
                'imageable_id'=>$post->id,
                'imageable_type'=>Post::class
            ]);
        });
    }
}
