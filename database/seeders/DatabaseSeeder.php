<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\PostCategory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //create by factory
        // User::factory(10)->create();

        // replace the field 'name' and 'email' at factories
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //manual
        // User::create([
        //     'name' => "Noprizal",
        //     'username' => "noprizal",
        //     'email' => "noprizal@gmail.com",
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);
        // PostCategory::create([
        //     'name' => 'Technology',
        //     'slug' => 'tech',
        // ]);
        // Post::create([
        //     'title' => "Laravel 11",
        //     'author_id' => 1, 
        //     'post_category_id' => 1,
        //     'slug' => "laravel-11",
        //     'body' => 'hdjshd asdhasdahd jsdhsajdh sjdhasjdas jsdhasjd jsadhsad ajsdhsajd jashdsjad asjdsdasd asdasda dasdsdshc sdsh sd sdsdsd sdhsds dsdhsdsds shdsds sdhsdsds sdhsdsdsd shdsd '
        // ]);

        //advance by factory
        // Post::factory(10)->recycle([
        //     User::factory(2)->create(),
        //     PostCategory::factory(5)->create()
        // ])->create();

        //advance by factory and mix 1 user 
        // $noprizal = User::create([
        //     'name' => "Noprizal",
        //     'username' => "noprizal",
        //     'email' => "noprizal@gmail.com",
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('password'),
        //     'remember_token' => Str::random(10),
        // ]);
        // Post::factory(10)->recycle([
        //     User::factory(2)->create(),
        //     $noprizal,
        //     PostCategory::factory(5)->create()
        // ])->create();


        //calling others Seeder Object
        $this->call([
            UserSeeder::class,
            PostCategorySeeder::class,
        ]);
        Post::factory(10)->recycle([
            User::all(),
            PostCategory::all()
        ])->create();
    }
}
