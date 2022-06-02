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


// public function saj($id , $name)
// {
//     return "id =" .$id."<br> Name =" .$name  ; 
// }


public function candyHome(){
    return view ('layouts.candi');
  }

  public function candyAbout(){
      return view ('layouts.about');
  }


  public function candyContact(){
      return view ('layouts.contact');
  }

  public function candyLogin(){
      return view ('layouts.login');
  }


//   public function Send()
//   {

//     $array=
//     [
//         'memberTeam1'=>'Sara',
//         'memberTeam2'=>'Saja',
//         'memberTeam3'=>'Aya',
//     ];

//     return view::make('about')-> with('array',$array);
//   }




}
