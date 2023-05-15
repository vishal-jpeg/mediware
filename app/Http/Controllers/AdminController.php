<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Camp;

use App\Models\Category;

use App\Models\Scheme;
use Illuminate\Support\Facades\DB;


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

    public function del_category($id){
        $category =category::find($id);
        $category->delete();
        return redirect()->back();
    }

    public function add_scheme(){
        $categories=category::all();
        return view('admin.add_scheme',compact('categories'));
    }

    public function upload_scheme(Request $request)
    {
        $request->validate([
            'scheme_name' => 'required',
            'small_description' => 'required',
            'detailed_description' => 'required',
            'eligibility' => 'required',
            'references' => 'required',
            'category_id' => 'required'
        ]);
        
        $scheme = new Scheme();
        $scheme->scheme_name = $request->scheme_name;
        $scheme->small_description = $request->small_description;
        $scheme->detailed_description = $request->detailed_description;
        $scheme->eligibility = $request->eligibility;
        $scheme->references = $request->references;
        $scheme->category_id = $request->category_id;
        $scheme->save();
        
        return redirect()->back()->with('success', 'Scheme created successfully!');
    }

    public function delete_scheme(){
        $scheme=scheme::all();
        return view('admin.delete_scheme',compact('scheme'));
    }

    public function del_scheme($id){
        $scheme =scheme::findOrFail($id);
       $scheme->delete();
       return redirect()->back();
    }

    public function edit_scheme(){
        $scheme=scheme::all();
        return view('admin.scheme_edit',compact('scheme'));
    }

    public function update_scheme($id)
    {
        $scheme = DB::select('select * from schemes where id=?',[$id] );
        $categories =category::all();
        return view('admin.update_scheme', compact('scheme', 'categories'));
    }

    public function save_scheme(Request $request, $id)
    {
        $scheme = Scheme::findOrFail($id);
        
        $request->validate([
            'scheme_name' => 'required',
            'small_description' => 'required',
            'detailed_description' => 'required',
            'eligibility' => 'required',
            'references' => 'required',
            'category_id' => 'required'
        ]);
        
       /* $scheme = new scheme();
        $scheme->scheme_name = $request->scheme_name;
        $scheme->small_description = $request->small_description;
        $scheme->detailed_description = $request->detailed_description;
        $scheme->eligibility = $request->eligibility;
        $scheme->references = $request->references;
        $scheme->category_id = $request->category_id;
        $scheme->save();*/
        dd($request->all());
        
        return redirect()->back();
        //->route('schemes.index')->with('success', 'Scheme updated successfully');
    }
}

