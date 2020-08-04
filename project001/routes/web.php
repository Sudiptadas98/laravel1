<?php

use Illuminate\Support\Facades\Route;
// app()->bind('example', function() {
//     return new \App\Example();
// });

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
Route::get('/', 'PagesController@home');
// Route::get('/', function () {
    // return view('welcome');

    // $example = resolve(App\Example::class);

    // ddd($example);

    // $container = new \App\Container();

    // $container->bind('example', function() {
    //     return new \App\Example();
    // });

    // $example = $container->resolve('example');

    // $example->go();
// });


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
// Route::view('/contact', 'contact');
Route::view('/template', 'template');
// Route::view('/about', 'about');
Route::get('/about', function () {
  
    return view('about', [
        'articles' => App\Article::take(3)->latest()->get()
    ]);
});

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::post('/articles', 'ArticlesController@store');
Route::get('/articles/create', 'ArticlesController@create');
Route::get('/articles/{article}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/{article}/edit', 'ArticlesController@edit');
Route::put('/articles/{article}', 'ArticlesController@update');


// GET, POST, PUT, DELETE

// GET /articles = get me a list of articles
// GET /articles/:id = get me that(:id) article
// GET /articles/create = will show a form to create a new article
// Get /articles/:id/edit = will show a foem to edit that(:id) article

// POST /articles = to create/store after creating a new article
// POST /articles/:id = to store that(:id) artile after editing

// PUT /articles/:id = update that(:id) article

// DELETE /articles/:id = delete that(:id) article

Route::get('/contact', 'ContactController@show');
Route::post('/contact', 'ContactController@store');


