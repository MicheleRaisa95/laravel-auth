<?php

namespace Database\Seeders;

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
        $post = new Post();

        $post->title = 'Titolo di prova';
        $post->content = 'Contenuto di prova';
        $post->slug = 'Slug di prova';

        $post->save();
    }
}
