<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

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
        return view('articles.index', ['articles' => $articles]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $path_image = "";
        if ($request->hasFile('image')) {
            $path_image = $request->file('image')->store('/images', 'public');
        }
        Article::create([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $path_image,
            'user_id' => auth()->user()->id,


        ]);
        return to_route('articles.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Article $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Article $article)
    {
        $path_image = $article->image;
        if ($request->hasFile('image')) {
            $path_image = $request->file('image')->store('/images', 'public');
        }
        $article->update([
            'title' => $request->title,
            'description' => $request->description,
            'image' => $path_image,
            'user_id' => auth()->user()->id,


        ]);
        return to_route('articles.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        $article->delete();
        return to_route('articles.index');
    }
}
