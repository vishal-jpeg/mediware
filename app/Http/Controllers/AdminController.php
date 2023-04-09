<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Camp;

use App\Models\Category;

class AdminController extends Controller
{
    public function add_camp(){
        return view('admin.add_camp');
    }

    public function upload_camp(Request $request){
        $request->validate([
            'name'=>'required|max:20',
            'location'=>'required',
            'starttime'=>'required',
            'endtime'=>'required',
            'date'=>'required',
            'image' => 'required|mimes:png,jpg,jpeg|max:10240'
        ]);
        $camp=new camp;
        //camp image
         $image=$request->image;
         $imageName=time().'.'.$image->getClientOriginalExtension();
         $request->image->move('camp_image',$imageName);
         $camp->image=$imageName;

         $camp->name=$request->name;
         $camp->location=$request->location;
         $camp->starttime=$request->starttime;
         $camp->endtime=$request->endtime;
         $camp->date=$request->date;

         $camp->save();
         
        
        return redirect()->back()->with('success','your camp is been added successfully');
    }

    public function delete_camp(){
        $camp= camp::all();
        return view('admin.delete_camp',compact('camp'));
    }

    public function deleting($id){
        $camp= camp::find($id);
        $camp->delete();
        return redirect()->back();
    }

    public function add_category(){
        return view('admin.add_category');
    }

    public function upload_category(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        $category=new Category;
        $category->name=$request->name;
        $category->save();
        return redirect()->back()->with('success','your category is successfully added');
    }

    public function delete_category(){
        $category=category::all();
        return view('admin.delete_category',compact('category'));
    }

    public function add_scheme(){
        return view('admin.add_scheme');
    }
   
}
