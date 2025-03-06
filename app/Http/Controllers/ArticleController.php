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
        $articles=Article::all();
        return $articles;
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $article=new Article();
        $article->title=$request->title;
        $article->slug=$request->slug;
        $article->photo=$request->photo;
        $article->auteur=$request->auteur;
        $article->content=$request->content;

        $article->save();

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        
        return $article;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Article $article)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        
    }
}
