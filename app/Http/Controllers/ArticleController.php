<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all();
        return view ('article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        if($request->file('img')){
           
            
            Article::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'body' => $request->body,
                'img' =>  $request
                ->file('img')
                ->store('public/img')
            ]);
        }else{
            Article::create([
                'title' => $request->title,
                'subtitle' => $request->subtitle,
                'body' => $request->body,
                
            ]);
        }


        return redirect()->back()->with('message', 'Articolo inserito correttamente');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
