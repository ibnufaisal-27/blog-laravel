<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Post;
use App\Models\Category;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // User::create([
        //     'name' => 'Ibnu Faisal',
        //     'email' => 'mibnufaisal@gmail.com',
        //     'password' => bcrypt('akuntest123')
        // ]);

        \App\Models\User::factory(5)->create();

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming'
        ]);

        Category::create([
            'name' => 'personal',
            'slug' => 'personal'
        ]);

        \App\Models\Post::factory(20)->create();

        // Post::create([
        //     'title' => 'Ini Judul Pertama',
        //     'slug' => 'ini-judul-pertama',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate repellat, ipsum impedit necessitatibus soluta unde sequi magni aliquid delectus iure, quo fugit ad dignissimos tenetur! A, rerum quas similique ipsum quos optio',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate repellat, ipsum impedit necessitatibus soluta unde sequi magni aliquid delectus iure, quo fugit ad dignissimos tenetur! A, rerum quas similique ipsum quos optio itaque animi reiciendis officiis labore reprehenderit et esse ducimus ea, numquam quae maxime ratione, alias vitae! Cupiditate nisi, cum minus iusto, unde inventore nulla corrupti perferendis sed id officia corporis repudiandae repellendus odit magnam illo maxime suscipit cumque culpa nam doloremque? Iste at saepe labore voluptatum molestias ad eveniet aperiam, temporibus nobis eum deleniti distinctio, voluptas possimus praesentium cum nam ab velit dolorum blanditiis eius maxime laudantium voluptatem. Doloremque illo expedita minima, sunt eius dolore, dolorum amet minus laudantium doloribus, sit repudiandae. Quisquam placeat odio ea veniam. Odit necessitatibus ad asperiores sunt voluptatibus pariatur, nam corporis sed animi excepturi, eum eveniet cumque culpa debitis magni, atque facere enim obcaecati fuga aliquam maiores! Nemo beatae facilis error maxime eaque at dignissimos sapiente, eos vel nulla? Illum quam pariatur, consequuntur repellat nemo cupiditate sequi aperiam laborum perferendis maxime, saepe, dolor repudiandae assumenda. Unde laudantium rerum porro corporis voluptatum quis ea veritatis enim expedita numquam deleniti aliquid voluptas repellendus consequatur ad eveniet exercitationem accusamus atque amet obcaecati mollitia, repellat nostrum? Earum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);

        // Post::create([
        //     'title' => 'Ini Judul Kedua',
        //     'slug' => 'ini-judul-kedua',
        //     'excerpt' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate repellat, ipsum impedit necessitatibus soluta unde sequi magni aliquid delectus iure, quo fugit ad dignissimos tenetur! A, rerum quas similique ipsum quos optio',
        //     'body' => 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptate repellat, ipsum impedit necessitatibus soluta unde sequi magni aliquid delectus iure, quo fugit ad dignissimos tenetur! A, rerum quas similique ipsum quos optio itaque animi reiciendis officiis labore reprehenderit et esse ducimus ea, numquam quae maxime ratione, alias vitae! Cupiditate nisi, cum minus iusto, unde inventore nulla corrupti perferendis sed id officia corporis repudiandae repellendus odit magnam illo maxime suscipit cumque culpa nam doloremque? Iste at saepe labore voluptatum molestias ad eveniet aperiam, temporibus nobis eum deleniti distinctio, voluptas possimus praesentium cum nam ab velit dolorum blanditiis eius maxime laudantium voluptatem. Doloremque illo expedita minima, sunt eius dolore, dolorum amet minus laudantium doloribus, sit repudiandae. Quisquam placeat odio ea veniam. Odit necessitatibus ad asperiores sunt voluptatibus pariatur, nam corporis sed animi excepturi, eum eveniet cumque culpa debitis magni, atque facere enim obcaecati fuga aliquam maiores! Nemo beatae facilis error maxime eaque at dignissimos sapiente, eos vel nulla? Illum quam pariatur, consequuntur repellat nemo cupiditate sequi aperiam laborum perferendis maxime, saepe, dolor repudiandae assumenda. Unde laudantium rerum porro corporis voluptatum quis ea veritatis enim expedita numquam deleniti aliquid voluptas repellendus consequatur ad eveniet exercitationem accusamus atque amet obcaecati mollitia, repellat nostrum? Earum.',
        //     'category_id' => 1,
        //     'user_id' => 1
        // ]);
    }
}
