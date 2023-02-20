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
            'featured_image' => 'https://images.unsplash.com/photo-1481016570479-9eab6349fde7?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'My Second Blog Post',
            'content' => 'Pellentesque auctor tortor leo, vel rhoncus mi convallis eu. Nulla at tincidunt ipsum, eu cursus eros. Suspendisse tincidunt eros justo, a luctus sapien varius nec.',
            'featured_image' => 'https://images.unsplash.com/photo-1449600037516-9285f7e794f4?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'My Third Blog Post',
            'content' => 'Pellentesque auctor tortor leo, vel rhoncus mi convallis eu. Nulla at tincidunt ipsum, eu cursus eros. Suspendisse tincidunt eros justo, a luctus sapien varius nec.',
            'featured_image' => 'https://images.unsplash.com/photo-1529912626516-e58b23f44f1d?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=387&q=80',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        [
            'title' => 'My Third Blog Post',
            'content' => 'Pellentesque auctor tortor leo, vel rhoncus mi convallis eu. Nulla at tincidunt ipsum, eu cursus eros. Suspendisse tincidunt eros justo, a luctus sapien varius nec.',
            'featured_image' => 'https://images.unsplash.com/photo-1580824026089-8b429c3834f0?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=834&q=80',
            'created_at' => now(),
            'updated_at' => now(),
        ],
        ]);
    }
}