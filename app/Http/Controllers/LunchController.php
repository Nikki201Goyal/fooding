<?php

namespace App\Http\Controllers;
use App\models\lunch;
use Illuminate\Http\Request;

class LunchController extends Controller
{
    public function viewlunch(){
        $lunch= lunch::all();
        $i=1;
        return view('dashboard.Lunch.viewlunch',compact('lunch','i'));
    }
    public function addlunch(){
        return view('dashboard.Lunch.addlunch');
    }

    
    public function storelunch(Request $request){
        $request->validate([
            'title'=>'required',
            'price'=>'required' , 
            'status'=>'required'  
        ]); 
   

        $image= $request->file('image');
        $imageName=time().$image->getClientOriginalName();
        $image->move('upload/food/images/', $imageName);
       
        lunch::create([
            'image'=> 'upload/food/images/'.$imageName,
            'title'=>$request->get('title'),
            'price'=>$request->get('price'),
            'status'=>$request->get('status')
           
        ]);
            return redirect()->route('viewlunch');
    }

    public function editlunch($id){
        $lunchs=lunch::findOrfail($id);
        $i=1;
        return view('dashboard.Lunch.editlunch',compact('lunchs','i'));
    }

    
    public function updatelunch(Request $request, $id){
        $request->validate([
            'title'=>'required',
            'price'=>'required' , 
            'status'=>'required',
            'image'=>'required', 
        ]);
    
        $lunch = lunch::find($id);
    
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/food/images/',$image_new_name);
            $lunch ->image='uploads/food/images/'.$image_new_name;
        }
        
     
        $lunch->title=$request->title;
        $lunch->price=$request->price;
        $lunch->status=$request->status;
        $lunch->save();
    
        return redirect()->route('viewlunch');
       
}

public function deletelunch($id){
    lunch::find($id)->delete();
    return redirect()->route('viewlunch');
}
}
