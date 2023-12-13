<?php

use Illuminate\Support\Facades\Route;
use App\Models\Post ;
use App\Models\Category ;
use App\Models\User ;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
 
     $posts = Post::latest('published_at')->with("category" ,"auther" )->get() ;
   
    return view('posts' ,[

      'posts' => $posts ,
      'categories' => Category::all()
    ]
   
  );
});

Route::get('posts/{post:slug}' , function(Post $post){

   
       return view("post" ,[

         'post' => $post

       ]) ;
} ) ;

// Route the Category one 

Route::get('categories/{category:slug}' , function(Category $category){

   $posts = $category->posts  ;
 
   return view('posts' ,[

    'posts' => $posts 
    
  ]
 
);
} ) ;

Route::get('authers/{user}' , function(User $user){

  $posts = $user->post  ;

  return view('posts' ,[

   'posts' => $posts 
 ]

);
} ) ;

