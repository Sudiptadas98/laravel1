<?php

namespace App\Http\Controllers;

use App\Tag;
use App\Article;
use Illuminate\Http\Request;

class ArticlesController extends Controller
{

    public function index()
    {
        // render a list of resource
        if (request('tag')) {
            $articles = Tag::where('name', request('tag'))->firstOrFail()->articles;
        } else {
            $articles = Article::latest()->get();
        }
        

        return view('articles.index', ['articles' => $articles]);
    }

    public function show(Article $article)
    {
        // show a single resource
       
        // $article = Article::findorfail($id);

        return view('articles.show', ['article' => $article]);
    }

    

    public function create()
    {
        // shows a view to create a new resource
        return view('articles.create', [
            'tags' => Tag::all()
        ]);
    }

    public function store()
    {
        // persist the new resource
        $this->validateArticle();

        $article = new Article(request(['title', 'excerpt', 'body']));
        $article->user_id =1;
        $article->save();

        $article->tags()->attach(request('tags'));



        // $article = new Article();

        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');

        // $article->save();
            //OR>>
        // Article::create([
        //     'title' => request('title'),
        //     'excerpt' => request('excerpt'),
        //     'body' => request('body')
        // ]);
            //OR>>
        // Article::create($validatedAttributes);

        return redirect(route('articles.index'));
    }

    public function edit(Article $article)
    {
        // show a view to edit an existing resource

        // find the article associated with the id
        // $article = Article::find($id);
        return view('articles.edit', ['article' => $article]);
    }

    public function update(Article $article)
    {
        $article->update($this->validateArticle());
        // persist the edited resource

        // $article = Article::find($id);

        // $article->title = request('title');
        // $article->excerpt = request('excerpt');
        // $article->body = request('body');

        // $article->save();
        
        return redirect($article->path());
    }

    protected function validateArticle()
    {
        return request()->validate([
            'title' => 'required',
            'excerpt' => 'required',
            'body' => 'required',
            'tags' => 'exists:tags,id'  
        ]);
    }

    public function destroy()
    {
        // delete the resource
    }
}
