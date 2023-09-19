<?php

namespace App\Models;


class Post
{
    private  static $blog_post = [
        [
            "title" => "Tulisan Saya Kesatu",
            "slug" => "tulisan-saya-kesatu",
            "author" => "Rifal Prasetyo",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Repellendus perspiciatis vitae eos accusantium quidem deleniti totam animi consequuntur quaerat dolorem nulla fugiat atque ea iste ut quo cum placeat facere nesciunt, rerum aperiam! Explicabo error, deserunt repellendus neque aliquam dolorem provident alias incidunt corporis fugit odit asperiores? Magnam est ducimus molestias accusamus nulla neque ratione ab, eligendi vero, officia non."
        ],
        [
            "title" => "Tulisan Saya Kedua",
            "slug" => "tulisan-saya-kedua",
            "author" => "Muhammad Yuannendra",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Iure quam culpa sed facilis enim temporibus. Quo ullam quis quidem ea nulla dolorem, reprehenderit, necessitatibus magnam animi laudantium magni amet error aperiam recusandae voluptate, porro facere optio tempora? Assumenda cum quia ipsam inventore explicabo, iste exercitationem impedit unde veritatis ducimus esse quasi? Quos temporibus harum alias esse, distinctio, illum qui cumque, voluptatibus laboriosam libero omnis ipsum enim? Ducimus vel laudantium eos fugiat unde dolorum aliquid porro delectus tenetur quae fuga quos minus alias, cumque quod consectetur iusto obcaecati tempora ex reprehenderit totam ab. Aspernatur omnis pariatur iusto sapiente laboriosam quia dignissimos!"
        ],
        
    ];

    public static function all() {
        return collect(self::$blog_post);
    }

    public static function find($slug) {

        $posts = static::all();
        // $post = [];
        // foreach ($posts as $p) {
        // if($p['slug'] === $slug) {
        //    $post = $p;
        // }
        // };

        return $posts->firstWhere('slug', $slug);

    }
}
