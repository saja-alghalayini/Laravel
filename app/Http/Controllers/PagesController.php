<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    // public function index()
    // {
    //   return 'INDEX'  ;
    // }

// public function index($id, $name)
// {
//     return' name = ' .$name. '<br> id = '.$id  ;
// }



// public function index($id, $name)
// {
//     return' name = ' .$name. '<br> id = '.$id  ;
// }


public function saj($id , $name)
{
    return "id =" .$id."<br> Name =" .$name  ; 
}



}
