<?php

namespace App\Http\Controllers;
use App\Models\steak;
use Illuminate\Http\Request;

class SteakController extends Controller
{
    public function viewsteak(){
        $steak= steak::all();
        $i=1;
        return view('dashboard.steak.viewsteak',compact('steak','i'));
    }
    public function addsteak(){
        return view('dashboard.steak.addsteak');
    }

    
    public function storesteak(Request $request){
        $request->validate([
            'title'=>'required',
            'price'=>'required' , 
            'status'=>'required'  
        ]); 
   

        $image= $request->file('image');
        $imageName=time().$image->getClientOriginalName();
        $image->move('upload/food/images/', $imageName);
       
        steak::create([
            'image'=> 'upload/food/images/'.$imageName,
            'title'=>$request->get('title'),
            'price'=>$request->get('price'),
            'status'=>$request->get('status')
           
        ]);
            return redirect()->route('viewsteak');
    }

    public function editsteak($id){
        $steaks=steak::findOrfail($id);
        $i=1;
        return view('dashboard.steak.editsteak',compact('steaks','i'));
    }

    
    public function updatesteak(Request $request, $id){
        $request->validate([
            'price'=>'required',
            'image'=>'required',
            'title'=>'required',
            'status'=>'required'  




            
        ]);
    
        $steak = steak::find($id);
    
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/food/images/',$image_new_name);
            $steak ->image='uploads/food/images/'.$image_new_name;
        }
        
     
        $steak->title=$request->title;
        $steak->price=$request->price;
        $steak->status=$request->status;
        $steak->save();
    
        return redirect()->route('viewsteak');
       
}

public function deletesteak($id){
    steak::find($id)->delete();
    return redirect()->route('viewsteak');
}


}
