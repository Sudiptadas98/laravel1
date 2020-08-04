<?php

namespace App\Http\Controllers;


// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\View;
// use Illuminate\Support\Facades\File;
// use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Facades\Cache;

class PagesController extends Controller
{
    public function home()
    {
        // ddd(resolve('App\Example'), resolve('App\Example'));
        // return request('name');
        // return View::make('welcome');
        // return $file->get(public_path('index.php'));
        // Cache::remember('foo', 60, fn() => 'foobar');
        // return Cache::get('foo');
        return view('welcome');
    }
    
}
