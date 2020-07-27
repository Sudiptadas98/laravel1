<?php

namespace App\Http\Controllers;

use DB;
use App\Post;
class PostsController
{
    public function show($slug)
    {
        // $post = DB::table('posts')->where('slug', $slug)->first();

        $post = Post::where('slug', $slug)->firstorfail();
        // dd($post); 
            // $posts = [
            //     'my1stpost' => 'hello its my 1st post',
            //     'my2ndpost' => 'and its 2ndone'
            // ];

            // if (!array_key_exists($post,$posts)) {
            //     abort(404, 'sorry,not found');
            // }

        
            // return view('post', [
            //     'post' => $posts[$post]
            // ]);
            // if (! $post) {
            //     abort(404);
            // }

            return view('post', [
                'post' => $post
            ]);
    
    }
}
