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
    return view('welcome');
});
// Route::get('/posts/{post}', function ($post) {
//     $posts = [
//         'my1stpost' => 'Hello, this is my first blog!',
//         'my2ndpost' => 'And this is the second one'
//     ];

//     if (! array_key_exists($post, $posts)) {
//         abort(404, 'Sorry, that post was not found.');
//     }

//     return view('post',[
//         'post' => $posts[$post]
//     ]);
// });

Route::get('/posts/{post}', 'PostsController@show');

// Route::get('/contact', function() {
//     return view('contact');
// });
Route::view('/contact', 'contact');
Route::view('/template', 'template');
Route::view('/about', 'about');