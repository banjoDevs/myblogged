<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;



class BlogPostsTable extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        
        DB::table('posts')->insert([
            [
            'title' => 'My First Blog Post',
            'content' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vel arcu vel arcu tempor finibus ut eget elit. Nam non suscipit mi. Sed ac elit vel elit faucibus faucibus.',
            'featured_image' => 'https://example.com/images/first-post.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'My Second Blog Post',
            'content' => 'Pellentesque auctor tortor leo, vel rhoncus mi convallis eu. Nulla at tincidunt ipsum, eu cursus eros. Suspendisse tincidunt eros justo, a luctus sapien varius nec.',
            'featured_image' => 'https://example.com/images/second-post.jpg',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        ]);
    }
}