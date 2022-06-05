<?php

namespace Database\Seeders;

use \App\Models\User;
use \App\Models\Category;
use \App\Models\Article;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(14)->create();
        
        User::factory()->create([
            'name' => 'coba',
            'email' => 'coba@example.com'
            ]);
            
        Category::factory(5)->create();
        Article::factory(25)->create();
    }
}
