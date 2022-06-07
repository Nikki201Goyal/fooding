<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CarouselController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\LunchController;
use App\Http\Controllers\JuiceController;
use App\Http\Controllers\SteakController;
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
// Frontend
Route::get('/',[FrontController::class,'home'])->name('fronthome');
Route::get('/cardlist',[FrontController::class,'cardlist'])->name('cardlist');
// Auth

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    $usertype= Auth::user()->usertype;
       
    if($usertype=='1')
    {
        return redirect('/admin');
    }    
     else
     {
         return redirect('/');
     }
})->name('dashboard');


//Dashboard
Route::get('/admin',[DashboardController::class,'admin'])->name('admin');
Route::get('/adminuser',[DashboardController::class,'user'])->name('adminuser');
Route::get('/adminchef',[DashboardController::class,'chef'])->name('adminchef');

//menu
Route::get('/viewmenu',[MenuController::class,'viewmenu'])->name('viewmenu'); 
Route::get('/addmenu',[MenuController::class,'addmenu'])->name('addmenu'); 
Route::post('/storemenu',[MenuController::class,'storemenu'])->name('admin_storemenu');
Route::get('/editmenu{id}',[MenuController::class,'editmenu'])->name('editmenu');
Route::post('/updatemenu{id}',[MenuController::class,'updatemenu'])->name('updatemenu');
Route::get('/deletemenu{id}',[MenuController::class,'deletemenu'])->name('deletemenu');
Route::get('/addtocart/{id}',[MenuController::class,'addtocart'])->name('addtocart'); 
Route::POST('/cartItem',[MenuController::class,'cartItem'])->name('cartItem'); 


//lunch
Route::get('/viewlunch',[lunchController::class,'viewlunch'])->name('viewlunch'); 
Route::get('/addlunch',[lunchController::class,'addlunch'])->name('addlunch'); 
Route::post('/storelunch',[lunchController::class,'storelunch'])->name('admin_storelunch');
Route::get('/editlunch{id}',[lunchController::class,'editlunch'])->name('editlunch');
Route::post('/updatelunch{id}',[lunchController::class,'updatelunch'])->name('updatelunch');
Route::get('/deletelunch{id}',[lunchController::class,'deletelunch'])->name('deletelunch');


//carousel
Route::get('/viewcarousel',[CarouselController::class,'viewcarousel'])->name('viewcarousel'); 
Route::get('/addcarousel',[CarouselController::class,'addcarousel'])->name('addcarousel'); 
Route::post('/storecarousel',[CarouselController::class,'storecarousel'])->name('storecarousel');
Route::get('/editcarousel{id}',[carouselController::class,'editcarousel'])->name('editcarousel');
Route::post('/updatecarousel{id}',[carouselController::class,'updatecarousel'])->name('updatecarousel');
Route::get('/deletecarousel{id}',[carouselController::class,'deletecarousel'])->name('deletecarousel');


//lunch
Route::get('/viewjuice',[JuiceController::class,'viewjuice'])->name('viewjuice'); 
Route::get('/addjuice',[JuiceController::class,'addjuice'])->name('addjuice'); 
Route::post('/storejuice',[JuiceController::class,'storejuice'])->name('admin_storejuice');
Route::get('/editjuice{id}',[JuiceController::class,'editjuice'])->name('editjuice');
Route::post('/updatejuice{id}',[JuiceController::class,'updatejuice'])->name('updatejuice');
Route::get('/deletejuice{id}',[JuiceController::class,'deletejuice'])->name('deletejuice');

//steak
Route::get('/viewsteak',[steakController::class,'viewsteak'])->name('viewsteak'); 
Route::get('/addsteak',[steakController::class,'addsteak'])->name('addsteak'); 
Route::post('/storesteak',[steakController::class,'storesteak'])->name('admin_storesteak');
Route::get('/editsteak{id}',[steakController::class,'editsteak'])->name('editsteak');
Route::post('/updatesteak{id}',[steakController::class,'updatesteak'])->name('updatesteak');
Route::get('/deletesteak{id}',[steakController::class,'deletesteak'])->name('deletesteak');