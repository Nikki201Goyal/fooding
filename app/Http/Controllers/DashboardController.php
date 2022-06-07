<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class DashboardController extends Controller
{
    //
    public function admin(){
        {
            return view('dashboard.dashboard');
        }
    }
    public function user(){
        {
            $user = User::where('usertype','=','0')->get();
            $i=1;
            return view('dashboard.user',compact('user', 'i'));
        }
    }
   
    public function chef(){
        {
            return view('dashboard.chefs.chef');
        }
    }
}
