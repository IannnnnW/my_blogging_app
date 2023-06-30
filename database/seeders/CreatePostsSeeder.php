<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;

class CreatePostsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        //
        $posts =[
            [
                'title'=>'My Programming Journey',
                'body'=>'It started way back in 2017 when I read a book that introduced me to C'
            ],
            [
                'title'=>'Getting started',
                'body'=>'It wasn\'t easy starting out as I had no laptop to get started. So, I used to use my phone'
            ]
            ];
        foreach($posts as $post){
            Post::create($post);
        }
    }
}
