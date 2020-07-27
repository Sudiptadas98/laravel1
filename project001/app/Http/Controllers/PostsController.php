<?php

namespace App\Http\Controllers;

class PostsController
{
    public function show($slug)
    {
        $post = \DB::table('posts')->where('slug', $slug)->first();

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

            return view('post', [
                'post' => $post
            ]);
    
    }
}
