<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/pays',function(){
    $pays = [
        ["nom"=>"RDC","Capital"=>"Kinshasa"],
        ["nom"=>"France","Capital"=>"Paris"],
        ["nom"=>"Gabon","Capital"=>"Libreville"],
        ["nom"=>"Belgique","Capital"=>"Bruxelle"],
    ];
   return $pays;

});
Route::get('/article',[ArticleController::class, "showArticle"]);
