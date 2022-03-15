<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
  //
  public function home(){
    $tasks = [
      'Aller faire les courses',
      'Aller à la gym',
      'Dormir'
    ];
    
    return view('home',[
      'maVar' => request('name'),
      'tasks' => $tasks
    ]);
  }

  public function contact(){
    return view('contact');
  }
  public function about(){
    return view('about');
  }

  
}
