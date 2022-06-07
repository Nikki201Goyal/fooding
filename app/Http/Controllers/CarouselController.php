<?php

namespace App\Http\Controllers;
use App\Models\carousel;
use Illuminate\Http\Request;

class CarouselController extends Controller
{
    public function viewcarousel(){
        $carousel= carousel::all();
        $i=1;
        return view('dashboard.carousel.viewcarousel',compact('carousel','i'));
    }

    public function addcarousel(){
        return view('dashboard.carousel.addcarousel');
    }

    public function storecarousel(Request $request){
        $request->validate([
            'title'=>'required',
            
        ]); 
        $image= $request->file('image');
        $imageName=time().$image->getClientOriginalName();
        $image->move('upload/food/images/', $imageName);
       
        carousel::create([
            'image'=> 'upload/food/images/'.$imageName,
            'title'=>$request->get('title'),
      
           
        ]);
            return redirect()->route('viewcarousel');
    }

    public function editcarousel($id){
        $carousels=carousel::findOrfail($id);
        $i=1;
        return view('dashboard.carousel.editcarousel',compact('carousels','i'));
    }

    
    public function updatecarousel(Request $request, $id){
        $request->validate([
        
            'image'=>'required',
            'title'=>'required',
    
        ]);
    
        $carousel = carousel::find($id);
    
        if($request->hasFile('image')){
            $image = $request->file('image');
            $image_new_name = time().$image->getClientOriginalName();
            $image->move('uploads/food/images/',$image_new_name);
            $carousel ->image='uploads/food/images/'.$image_new_name;
        }
      
        $carousel->title=$request->title;
        $carousel->save();
    
        return redirect()->route('viewcarousel');
       
}

public function deletecarousel($id){
    carousel::find($id)->delete();
    return redirect()->route('viewcarousel');
}


}
