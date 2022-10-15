<?php

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // User::factory(5)->create();

        // Post::factory(907)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        User::create([
            'name' => 'Aguto',
            'username' => 'aguto',
            'email' => 'aguto@fbox.my.id',
            'password' => bcrypt('12345')
        ]);

        User::create([
            'name' => 'Ayura',
            'username' => 'ayura',
            'email' => 'ayura@fbox.my.id',
            'password' => bcrypt('54321')
        ]);

        Category::create([
            'name' => 'Asupan',
            'slug' => 'asupan',
            'img' => 'asupan.jpg'
        ]);

        Category::create([
            'name' => 'Gore',
            'slug' => 'gore',
            'img' => 'gore.jpg'
        ]);

        Category::create([
            'name' => 'Creepy',
            'slug' => 'creepy',
            'img' => 'creepy.jpg'
        ]);

        Category::create([
            'name' => 'Other',
            'slug' => 'other',
            'img' => 'other.jpg'
        ]);


        Post::create([
            'title' => 'Judul Post Pertama',
            'category_id' => 1,
            'img' => 'a.jpg',
            'slug' => 'judul-post-pertama',
            'stream' => 'https://dood.wf/e/moof4s5pxgtddos3oxkbx3sw04o24mz5',
            'download' => 'https://dood.wf/d/gtvvejparwyf',
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Post Kedua',
            'category_id' => 2,
            'img' => 'b.jpg',
            'slug' => 'judul-post-kedua',
            'stream' => '',
            'download' => '',
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Post Ke Tiga',
            'category_id' => 3,
            'img' => 'c.jpg',
            'slug' => 'judul-post-Ke-tiga',
            'stream' => '',
            'download' => '',
            'user_id' => 1
        ]);
        Post::create([
            'title' => 'Judul Post Ke Empat',
            'category_id' => 4,
            'img' => 'd.jpg',
            'slug' => 'judul-post-Ke-empat',
            'stream' => '',
            'download' => '',
            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Judul Post Ke Lima',
            'category_id' => 1,
            'img' => 'e.jpg',
            'slug' => 'judul-post-Ke-lima',
            'stream' => '',
            'download' => '',
            'user_id' => 2
        ]);
        Post::create([
            'title' => 'Judul Post Ke Enam',
            'category_id' => 1,
            'img' => 'f.jpg',
            'slug' => 'judul-post-Ke-enam',
            'stream' => '',
            'download' => '',
            'user_id' => 2
        ]);
    }
}
