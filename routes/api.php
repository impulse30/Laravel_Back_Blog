<?php

use App\Models\User;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use Illuminate\Support\Facades\Hash;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/pays', function () {
    $pays = [
        ["nom" => "RDC", "Capital" => "Kinshasa"],
        ["nom" => "France", "Capital" => "Paris"],
        ["nom" => "Gabon", "Capital" => "Libreville"],
        ["nom" => "Belgique", "Capital" => "Bruxelle"],
    ];
    return $pays;
});



Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',

    ]);

    $user = User::where('email', $request->email)->first();

    if (! $user || ! Hash::check($request->password, $user->password)) {
        return response()->json(['message' => 'Email ou mot de passe incorrect']);
    }

    $token = $user->createToken($request->email)->plainTextToken;
    $user['token'] = $token;
    return $user;
});

Route::middleware('auth:sanctum')->group(function () {});
Route::apiResource('articles', ArticleController::class);
