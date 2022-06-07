<?php

namespace App\Http\Controllers;
use App\Models\menu;
use App\Models\cart;
use GuzzleHttp\Middleware;
use Illuminate\Http\Request;


use Illuminate\Support\Facades\Auth;

class MenuController extends Controller
{


    public function viewmenu(){
        $menu= menu::all();
        $i=1;
        return view('dashboard.menu.viewmenu',compact('menu','i'));
    }
    public function addmenu(){
        return view('dashboard.menu.addmenu');
    }

    
    public function storemenu(Request $request){
        $request->validate([
            'title'=>'required',
            'price'=>'required' , 
            'status'=>'required'  
        ]); 
   

        $image= $request->file('image');
        $imageName=time().$image->getClientOriginalName();
        $image->move('upload/food/images/', $imageName);
       
        menu::create([
            'image'=> 'upload/food/images/'.$imageName,
            'title'=>$request->get('title'),
            'price'=>$request->get('price'),
            'status'=>$request->get('status')
           
        ]);
            return redirect()->route('viewmenu');
    }

    public function editmenu($id){
        $menus=menu::findOrfail($id);
        $i=1;
        return view('dashboard.menu.editmenu',compact('menus','i'));
    }

    
    public function updatemenu(Request $request, $id){
        $request->validate([
            'price'=>'required',
            'image'=>'required',
            'title'=>'required',
            'status'=>'required'  

    
        ]);
    
        $menu = menu::find($id);
    
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/food/images/',$image_new_name);
            $menu ->image='uploads/food/images/'.$image_new_name;
        }
        
     
        $menu->title=$request->title;
        $menu->price=$request->price;
        $menu->status=$request->status;
        $menu->save();
    
        return redirect()->route('viewmenu');
       
}

      public function deletemenu($id){
      menu::find($id)->delete();
       return redirect()->route('viewmenu');
    }

       public function addtocart($id)
       {
  
           if(Auth::user()){
            $menuId = $id;
           $uid = Auth::user()->id;
        
           cart::create([
               'menu_id' => $menuId,
               'user_id' => $uid
           ]);
        
 
           }
           else{
              return redirect('/login') ;
           }
       }

// static function cartItem(){
//   $UserId = Session::get('user')['id'];
//   return cart::where('user_id' ,$UserId)->count();

//  }
}
