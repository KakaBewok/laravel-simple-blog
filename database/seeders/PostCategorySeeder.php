<?php

namespace Database\Seeders;

use App\Models\PostCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //by factory
        // PostCategory::factory(5)->create()

        //create manual category
        PostCategory::create([
            'name' => 'Technology',
            'slug' => 'technology',
            'color' => 'green',
        ]);
        PostCategory::create([
            'name' => 'UI & UX',
            'slug' => 'ui-ux',
            'color' => 'blue',
        ]);
        PostCategory::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'yellow',
        ]);
    }
}
