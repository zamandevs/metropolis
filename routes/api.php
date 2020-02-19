<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('checktoken')->post('create-todo', function (Request $request) {
    $todo = DB::table('todos')->insert([
        'title' => $request->title,
        'user_id' => $request->user_id
    ]);
    if ($todo)
        return response()->json(['message'=>'successfully inserted']);
});
