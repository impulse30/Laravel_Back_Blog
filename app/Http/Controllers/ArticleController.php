<?php

namespace App\Http\Controllers;
use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    function showArticle(){

        $articles = Article::all();
        return view("article",["articles"=>$articles]);

    }
}
