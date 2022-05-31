<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () 
// {  
//     return view('candi');  
// });  



Route::get('/', function () 
{  
    return view('candi');  
});  

// Route::get('/saj', function () 
// {
//     return '<h1> Welcome Saj </h1>';
// });



// Route::get('/saj', function () 
// {
//     return '<h1> Welcome Saj </h1>';
// });


// Route::get('/saj', function ($myName='<h1> welcome back Saja </h1>') 
// {
//     return $myName;
// });




// Route::get('/{name}/{id}', function ($name,$id) 
// {
//     return "Helleoooo thereee".$name." your id is ".$id;
// });



// Route::get('/{name?}/{id?}', function ($name = 'dua',$id = null) 
// {
//     return "Hiiiiiiz ".$name." your id is ".$id;
// });