<?php

namespace App\Models;

class Post
{
   private static $blog_posts = [
    [
        "title" => "Judul Tulisan Pertama",
        "slug" => "judul-tulisan-pertama",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci doloribus, est nesciunt eum amet voluptas quasi alias provident neque cupiditate unde, dolore ullam fugiat animi facere fugit, consequatur veritatis quas eius praesentium itaque quis culpa perspiciatis asperiores. Harum odio eius doloribus porro dolor aperiam tempora. Cumque doloremque commodi amet aliquid sunt quae facilis neque? Nostrum repellat beatae quos consequatur quisquam vitae aut, delectus aperiam sint quia doloribus temporibus, praesentium rerum ipsum at sunt ratione sequi iure nemo aliquid incidunt eius?"
    ],
    [
        "title" => "Judul Tulisan Kedua",
        "slug" => "judul-tulisan-kedua",
        "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci doloribus, est nesciunt eum amet voluptas quasi alias provident neque cupiditate unde, dolore ullam fugiat animi facere fugit, consequatur veritatis quas eius praesentium itaque quis culpa perspiciatis asperiores. Harum odio eius doloribus porro dolor aperiam tempora. Cumque doloremque commodi amet aliquid sunt quae facilis neque? Nostrum repellat beatae quos consequatur quisquam vitae aut, delectus aperiam sint quia doloribus temporibus, praesentium rerum ipsum at sunt ratione sequi iure nemo aliquid incidunt eius?"
    ]
   ];

   public static function all()
   {
    return collect(self::$blog_posts);
   }

   public static function find($slug)
   {
    $posts = static::all(); // ambil dulu semua post
    // kemudian looping satu2
    // $post = [];
    // foreach($posts as $p){
    //     if($p["slug"] === $slug){
    //         $post = $p;
    //     }
    // }
    return $posts->firstWhere('slug', $slug);
   }
}
