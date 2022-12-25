<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "About",
        "nama" => "tommy marcelino",
        "email" => "marceli@gmail.com",
        "image" => "tommy.png"
    ]);
});


Route::get('/blog', function () {
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "micode",
            "body" => "Lorem ipsum dolor sit amet consectetur, adipisicing elit. Adipisci doloribus, est nesciunt eum amet voluptas quasi alias provident neque cupiditate unde, dolore ullam fugiat animi facere fugit, consequatur veritatis quas eius praesentium itaque quis culpa perspiciatis asperiores. Harum odio eius doloribus porro dolor aperiam tempora. Cumque doloremque commodi amet aliquid sunt quae facilis neque? Nostrum repellat beatae quos consequatur quisquam vitae aut, delectus aperiam sint quia doloribus temporibus, praesentium rerum ipsum at sunt ratione sequi iure nemo aliquid incidunt eius?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "dodde",
            "body" => "Lorem ipsum dolor sit amet consectetur adipisicing elit. Distinctio laborum ipsam, asperiores aut, voluptas ratione itaque eligendi velit soluta accusantium voluptatum odit reprehenderit quaerat id quia tenetur ipsa consequuntur, tempore impedit. Ipsam dicta voluptatibus molestias eaque corrupti fuga fugit ullam tenetur iusto dolore eligendi natus, nemo saepe vitae ab iure nisi sit laborum optio amet reiciendis sint doloremque. Id velit iste temporibus labore, harum inventore laborum! Repellendus quam voluptatibus obcaecati quisquam ipsam odio aperiam animi beatae optio doloribus quo ullam unde, similique labore iure placeat dolor minus eaque? Error quia eveniet cupiditate ipsam inventore, dignissimos consequuntur. Necessitatibus eos inventore asperiores."
        ],
    ];
    return view('posts', [
        "title" => "Blog",
        "posts" => $blog_posts
    ]);
});

// halaman single posts
Route::get('posts/{slug}', function ($slug) {
    return view('post', ["title" => "Single Post"]);
});

Route::get('/micode', function () {
    return 'hello micode';
});
