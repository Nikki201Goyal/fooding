<?php

namespace App\Http\Controllers;
use App\models\juice;
use Illuminate\Http\Request;

class JuiceController extends Controller
{
    public function viewjuice(){
        $juice= juice::all();
        $i=1;
        return view('dashboard.juice.viewjuice',compact('juice','i'));
    }
    public function addjuice(){
        return view('dashboard.juice.addjuice');
    }

    
    public function storejuice(Request $request){
        $request->validate([
            'title'=>'required',
            'price'=>'required' , 
            'status'=>'required'  
        ]); 
   

        $image= $request->file('image');
        $imageName=time().$image->getClientOriginalName();
        $image->move('upload/food/images/', $imageName);
       
        juice::create([
            'image'=> 'upload/food/images/'.$imageName,
            'title'=>$request->get('title'),
            'price'=>$request->get('price'),
            'status'=>$request->get('status')
           
        ]);
            return redirect()->route('viewjuice');
    }

    public function editjuice($id){
        $juices=juice::findOrfail($id);
        $i=1;
        return view('dashboard.juice.editjuice',compact('juices','i'));
    }

    
    public function updatejuice(Request $request, $id){
        $request->validate([
            'price'=>'required',
            'image'=>'required',
            'title'=>'required',
            'status'=>'required'  

    
        ]);
    
        $juice = juice::find($id);
    
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/food/images/',$image_new_name);
            $juice ->image='uploads/food/images/'.$image_new_name;
        }
        
     
        $juice->title=$request->title;
        $juice->price=$request->price;
        $juice->status=$request->status;
        $juice->save();
    
        return redirect()->route('viewjuice');
       
}

public function deletejuice($id){
    juice::find($id)->delete();
    return redirect()->route('viewjuice');
}
}
