<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   public function index(){
       return view("home0158");
   }
   public function page2()
   
    {
        return view("artikel0158");
    }

    public function page3()

    {
        return view("contacus0158");
    }

}
