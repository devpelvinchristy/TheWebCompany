<?php

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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



Route::get('/posts', function() {

    return Post::all();
});

Route::post('/posts', function(){

    request()->validate([

        'product_name'=> 'required',
        'product_details'=> 'required',
        'product_category'=> 'required',
        'product_image'=> 'required',
    ]);

    return Post::create([

        'product_name' => request('product_name'),
        'product_details' => request('product_details'),
        'product_category' => request('product_category'),
        'product_image' => request('product_image'),

    ]);
});


Route::put('/posts/{post}', function(Post $post){
    request()->validate([

        'product_name'=> 'required',
        'product_details'=> 'required',
        'product_category'=> 'required',
        'product_image'=> 'required',
    ]);

   $success = $post->update([

        'product_name' => request('product_name'),
        'product_details' => request('product_details'),
        'product_category' => request('product_category'),
        'product_image' => request('product_image'),

    ]);

    return[
        'success' => $success
    ];
});



Route::delete('/posts/{post}', function(Post $post){
   
   $success = $post->delete();

    return[
        'success' => $success
    ];
}); 