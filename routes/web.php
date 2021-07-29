<?php

use Illuminate\Support\Facades\Route;

 // Route::get('/', '\Corals\Foundation\Http\Controllers\PublicBaseController@welcome');



// Route::get('watchstreaming', function(){
// 	return view('livestreaming');
// });

Route::resource('topup','TopupController', ['name'=>'Topup']);

Route::get('live', function(){
	return view('test');
});
Route::get('index', function(){
    return view('test');
});
//Watch live stream and comment page
Route::resource('watchstreams', 'CommentController' , ['name' => 'watchstreams']);