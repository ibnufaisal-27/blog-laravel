<?php

namespace App\Models;

class Post
{
    private static $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Ibnu Faisal",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Velit, dolorem mollitia. Eos libero inventore laboriosam repellat exercitationem facere nemo dolorem repellendus itaque repudiandae quam error iusto hic possimus, voluptatem consectetur velit in ipsum nesciunt sit earum? Nemo, velit autem? Praesentium laudantium impedit, voluptatum tenetur accusamus quam! Omnis minus eius alias odio. Vitae, vel ut tempore recusandae assumenda ad totam dolores deserunt velit rem harum voluptate doloribus impedit molestiae, suscipit asperiores voluptas adipisci porro iure accusamus? Minima qui quam aperiam assumenda."
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Salman Nur",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolores nesciunt consequatur, facere dignissimos voluptatum eveniet enim ducimus modi maxime! Tempore pariatur quos, placeat consequuntur suscipit a voluptatibus recusandae illo rem voluptate perferendis deleniti facere exercitationem omnis. Quos distinctio iste, dolor accusantium cumque suscipit impedit ipsam ullam odio numquam culpa minus reprehenderit fugit porro, excepturi explicabo similique debitis consequuntur libero rerum! Illo consectetur deleniti beatae dignissimos incidunt quia nisi eaque neque magnam unde reprehenderit laudantium velit corrupti autem adipisci fugit, blanditiis delectus nulla asperiores alias et quidem tenetur. Saepe est doloremque excepturi vero, aperiam voluptatibus amet illo, vel dolorum reiciendis corrupti?"
        ]
        ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach ($posts as $p) {
        if ($p["slug"] === $slug) {
            $post = $p;
        }
        }

        return $post;
    }
}
