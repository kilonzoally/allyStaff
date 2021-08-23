<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class PagesControllers extends Controller
{
    public function index(){

        $titlee = "Welcome To Laravel Tutorial for Beginners!!";
        return view('pages.index',compact('titlee'));
    }
    public function news(){
        $habari = "Habari Mpya YA Moto";
        return view('pages.news')->with('habari', $habari);
        
    }
  

    public function service(){
        $data = array(
            'title' => 'Services',
        
           'services'=>['php','db','mysql']
            
        );
      //  return view('pages.services')->with('title', $title);
      return view('pages.services')->with('data',$data);
    }
}
