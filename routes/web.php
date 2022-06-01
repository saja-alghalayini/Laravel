<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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


Route::get('/candi', function () 
{  
    return view('candi');  
});  


Route::get('/contact', function () 
{  
    return view('contact');  
});  


Route::get('/about', function () 
{  
    return view('about');  
});  


Route::get('/login', function () 
{  
    return view('login');  
});


    // Only called if {id} is numeric.
    // $id->pattern('id', '[0-9]+');

Route::get('candi/id/{id}/name/{name}', [PagesController::class, 'saj'] )->where(['id' => '[0-9]+', 'name' => '[a-z]+']);



// Route::get('/user/{id}/{name}', function ($id, $name) {
//     //
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']);




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




// Route::get('/candy/{type1}', function ($type1) 
// {
//     return view('testpage');
// });




// Route::get('/candy', function()
// {
//     $tasks = [
//         'Flack',
//         'Kinder bueno',
//         'sneakers'  
//     ];
//     return view('tasks',compact('tasks')); 
// });



// Route::get('/candy', function()
// {
//     $candi = [
//         'Flack',
//         'Kinder bueno',
//         'sneakers',
//         'Me' 
//     ];
//     return view('test',compact('candi')); 
// });




// Route::get('/', 'App\Http\Controllers\PagesController@index'); 


// Route::get('/info/id{id}/name/{name}', [PagesController::class,'index']);




