<?php

namespace App\Http\Controllers;

use App\Http\Requests\ArticleRequest;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create_page');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ArticleRequest $request)
    {
        $article = Article::create([
            'name' => $request->input('name'),
            'price' => $request->price,
            'category' => $request->category,
            'description' => $request->description,
            'user_id' => Auth::user()->id,
        ]);
        if($request->img != null){
            $article->img = $request->file('img')->store('/public/articles/img');
            $article->save();
        }

        return redirect(route('welcome_page'))->with('status', 'Articolo creato con successo!');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::all()->sortByDesc('price');
        return view('articles.index_page', compact('articles'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show_page', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit_page', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ArticleRequest $request, Article $article)
    {
        $article->update([
            $article->name = $request->name,
            $article->price = $request->price,
            $article->category = $request->category,
            $article->description = $request->description,
        ]);
        if($request->img){
            $article->img = $request->file('img')->store('public/articles/img');
            $article->save();
        };
        
        return redirect(route('index_page'))->with('status', 'Articolo modificato con successo!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();

        return redirect(route('index_page'))->with('status', 'Articolo eliminato con successo!');

    }
}
