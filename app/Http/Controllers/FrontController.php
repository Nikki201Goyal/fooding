<?php

namespace App\Http\Controllers;
use App\Models\menu;
use App\Models\lunch;
use App\Models\juice;
use App\Models\steak;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class FrontController extends Controller
{
    //
    public function home(){
        $menu= menu::all();
        $lunch= lunch::all();
        $juice = juice::all();
        $steak = steak::all();
        return view('frontend.main',compact('menu','lunch','juice','steak'));
    }

    public function cardlist(){
        return view('frontend.include.cardlist');
    }


  

}
