<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\User;
use App\Models\Category;
class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(3)->create();

        Post::factory(20)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'name' => 'ibnu',
            'username' => 'ibnu173',
            'email' => 'ibnu@gmail.com',
            'password' => bcrypt('12345')
        ]);

        // User::create([
        //     'name' => 'hakim',
        //     'email' => 'hakim@gmail.com',
        //     'password' => bcrypt('12345')
        // ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'Web Design',
            'slug' => 'web-design'
        ]);

        Category::create([
            'name' => 'Personal',
            'slug' => 'personal'
        ]);

        // Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum placeat facere
        //     asperiores aliquid dolorem eaque sed consequuntur rem exercitationem animi,
        //     accusantium nemo in iusto reiciendis velit',
        //     'body' => '<p>
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum placeat facere
        //     asperiores aliquid dolorem eaque sed consequuntur rem exercitationem animi,
        //     accusantium nemo in iusto reiciendis velit, numquam quod! Tenetur sit
        //     perspiciatis quia illum maiores delectus, deserunt provident dicta alias
        //     recusandae exercitationem amet molestiae a nihil, ex ab, nemo dolorum illo
        //     modi expedita.
        // </p>
        // <p>
        //     Quia iure, at adipisci sunt fugit ab quos possimus dolor nisi, pariatur
        //     accusantium tempore fuga perferendis a. Sed veniam error, voluptates maiores
        //     aspernatur doloribus saepe libero corrupti dolorum, excepturi animi
        //     laudantium cumque facilis labore ullam ea assumenda adipisci iure nulla
        //     neque quod dicta, eveniet voluptatem veritatis? Tempore, sunt?
        // </p>',
        // 'category_id' => 1,
        // 'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul Kedua',
        //     'slug' => 'judul-kedua',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum placeat facere
        //     asperiores aliquid dolorem eaque sed consequuntur rem exercitationem animi,
        //     accusantium nemo in iusto reiciendis velit',
        //     'body' => '<p>
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum placeat facere
        //     asperiores aliquid dolorem eaque sed consequuntur rem exercitationem animi,
        //     accusantium nemo in iusto reiciendis velit, numquam quod! Tenetur sit
        //     perspiciatis quia illum maiores delectus, deserunt provident dicta alias
        //     recusandae exercitationem amet molestiae a nihil, ex ab, nemo dolorum illo
        //     modi expedita.
        // </p>
        // <p>
        //     Quia iure, at adipisci sunt fugit ab quos possimus dolor nisi, pariatur
        //     accusantium tempore fuga perferendis a. Sed veniam error, voluptates maiores
        //     aspernatur doloribus saepe libero corrupti dolorum, excepturi animi
        //     laudantium cumque facilis labore ullam ea assumenda adipisci iure nulla
        //     neque quod dicta, eveniet voluptatem veritatis? Tempore, sunt?
        // </p>',
        // 'category_id' => 1,
        // 'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul ketiga',
        //     'slug' => 'judul-ketiga',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum placeat facere
        //     asperiores aliquid dolorem eaque sed consequuntur rem exercitationem animi,
        //     accusantium nemo in iusto reiciendis velit',
        //     'body' => '<p>
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum placeat facere
        //     asperiores aliquid dolorem eaque sed consequuntur rem exercitationem animi,
        //     accusantium nemo in iusto reiciendis velit, numquam quod! Tenetur sit
        //     perspiciatis quia illum maiores delectus, deserunt provident dicta alias
        //     recusandae exercitationem amet molestiae a nihil, ex ab, nemo dolorum illo
        //     modi expedita.
        // </p>
        // <p>
        //     Quia iure, at adipisci sunt fugit ab quos possimus dolor nisi, pariatur
        //     accusantium tempore fuga perferendis a. Sed veniam error, voluptates maiores
        //     aspernatur doloribus saepe libero corrupti dolorum, excepturi animi
        //     laudantium cumque facilis labore ullam ea assumenda adipisci iure nulla
        //     neque quod dicta, eveniet voluptatem veritatis? Tempore, sunt?
        // </p>',
        // 'category_id' => 2,
        // 'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Judul keempat',
        //     'slug' => 'judul-keempat',
        //     'excerpt' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum placeat facere
        //     asperiores aliquid dolorem eaque sed consequuntur rem exercitationem animi,
        //     accusantium nemo in iusto reiciendis velit',
        //     'body' => '<p>
        //     Lorem ipsum dolor sit amet consectetur adipisicing elit. Cum placeat facere
        //     asperiores aliquid dolorem eaque sed consequuntur rem exercitationem animi,
        //     accusantium nemo in iusto reiciendis velit, numquam quod! Tenetur sit
        //     perspiciatis quia illum maiores delectus, deserunt provident dicta alias
        //     recusandae exercitationem amet molestiae a nihil, ex ab, nemo dolorum illo
        //     modi expedita.
        // </p>
        // <p>
        //     Quia iure, at adipisci sunt fugit ab quos possimus dolor nisi, pariatur
        //     accusantium tempore fuga perferendis a. Sed veniam error, voluptates maiores
        //     aspernatur doloribus saepe libero corrupti dolorum, excepturi animi
        //     laudantium cumque facilis labore ullam ea assumenda adipisci iure nulla
        //     neque quod dicta, eveniet voluptatem veritatis? Tempore, sunt?
        // </p>',
        // 'category_id' => 2,
        // 'user_id' => 2
        // ]);

    }
}
