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
    return  view('home', [
        "title" => "Home"
    ]);
});

Route::get('/about',function(){
    return  view('about', [
        "title" => "About",
        "name" => "Mustofa Firdaus",
        "email" => "mustofafirdaus01@gmail.com",
        "image" => "mustofa.jfif"
    ]);
});



Route::get('/blog',function(){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mustofa Firdaus",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum explicabo porro ad libero, 
            tenetur consequuntur inventore vel sapiente ullam iusto doloribus numquam nobis labore veritatis consectetur nihil. 
            Veniam laborum eius, facilis architecto explicabo expedita? Officia cumque qui non natus consequatur accusantium. Eum commodi nulla 
            rem earum, corporis esse minima expedita nostrum quod cupiditate eos itaque vero vel quidem odit similique pariatur 
            voluptatibus officiis aspernatur veritatis maiores ullam alias! Delectus, placeat consequatur sed earum quam minus maxime ex laboriosam 
            incidunt perferendis?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Firdaus",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nisi debitis laboriosam, porro eos inventore doloribus, et, ea id illo optio. 
            Sint minus aspernatur ullam possimus voluptate magnam mollitia quia, praesentium ad quos nisi voluptas atque, eius fugit. Amet sit fugiat quae totam 
            suscipit quia dolorem, quaerat nemo, itaque dolor excepturi rem delectus accusantium expedita architecto exercitationem minima laborum commodi sapiente 
            illum temporibus voluptatum? Placeat iste incidunt neque beatae ut enim perferendis est facere soluta, nam consectetur modi ratione perspiciatis recusandae necessitatibus 
            numquam, nulla molestiae illum assumenda officia? Debitis dolorem maxime exercitationem laboriosam aliquid dolore rem pariatur libero nostrum corporis."
        ],
    ];
    return  view('posts', [
        "title" => "Posts",
        "posts" => $blog_posts
    ]);
});

// Halaman Single Post
Route::get('posts/{slug}', function($slug){
    $blog_posts = [
        [
            "title" => "Judul Post Pertama",
            "slug" => "judul-post-pertama",
            "author" => "Mustofa Firdaus",
            "body" => "Lorem ipsum dolor, sit amet consectetur adipisicing elit. Harum explicabo porro ad libero, 
            tenetur consequuntur inventore vel sapiente ullam iusto doloribus numquam nobis labore veritatis consectetur nihil. 
            Veniam laborum eius, facilis architecto explicabo expedita? Officia cumque qui non natus consequatur accusantium. Eum commodi nulla 
            rem earum, corporis esse minima expedita nostrum quod cupiditate eos itaque vero vel quidem odit similique pariatur 
            voluptatibus officiis aspernatur veritatis maiores ullam alias! Delectus, placeat consequatur sed earum quam minus maxime ex laboriosam 
            incidunt perferendis?"
        ],
        [
            "title" => "Judul Post Kedua",
            "slug" => "judul-post-kedua",
            "author" => "Muhammad Firdaus",
            "body" => "
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Totam nisi debitis laboriosam, porro eos inventore doloribus, et, ea id illo optio. 
            Sint minus aspernatur ullam possimus voluptate magnam mollitia quia, praesentium ad quos nisi voluptas atque, eius fugit. Amet sit fugiat quae totam 
            suscipit quia dolorem, quaerat nemo, itaque dolor excepturi rem delectus accusantium expedita architecto exercitationem minima laborum commodi sapiente 
            illum temporibus voluptatum? Placeat iste incidunt neque beatae ut enim perferendis est facere soluta, nam consectetur modi ratione perspiciatis recusandae necessitatibus 
            numquam, nulla molestiae illum assumenda officia? Debitis dolorem maxime exercitationem laboriosam aliquid dolore rem pariatur libero nostrum corporis."
        ],
    ];

    $new_post = [];
    foreach($blog_posts as $post){
        if($post["slug"] === $slug){
            $new_post = $post;
        }
    }

    return view('post', [
        "title" => "Single Post",
        "post" => $new_post
    ]);
});
