<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Camp;

use App\Models\Category;

use App\Models\Scheme;

use Illuminate\Support\Facades\DB;

use App\Models\Feedback;

class HomeController extends Controller
{
    public function index(){
        if(auth::id()){
            return redirect()->back();
        }
        else{
            $camp = camp::all();
            return view('user.home',compact('camp'));
        }
    }
    public function redirect(){
        if(auth::id()){
            if(Auth::user()->userType=='0'){
                $camp = camp::all();
                return view('user.home',compact('camp'));
            }
            else{
                $camp = camp::all();
                $scheme = Scheme::all();
                $category = Category::all();
                $feedback=Feedback::all();
                return view('admin.home',compact('camp','scheme','category','feedback'));
            }
        }
        else{
            return redirect()->back();
        }
    }
    public function camp(){
        $camp= camp::all();
        return view('camp.camp_home',compact('camp'));
    }
    public function schemes(){
        $category= category::all();
        return view('schemes.schemes_home',compact('category'));
    }
    public function show_scheme($id){
        $schemes=DB::select('select * from schemes where category_id=?',[$id] );
        return view('schemes.show_scheme',compact('schemes'));
    }
    public function upload_feedback(Request $request){
           $request->validate([
                'name'=>'required|max:20',
                'email'=>'required',
                'feedback'=>'max:150',
                'message'=>'max:300',
                'reference'=>'max:150',
            ]);
            $feedback =new Feedback;    
             $feedback->name=$request->name;
             $feedback->email=$request->email;
             $feedback->feedback=$request->feedback;
             $feedback->message=$request->message;
             $feedback->reference=$request->reference;
    
             $feedback->save();
             
            
            return redirect()->back()->with('success','your feedback is been added successfully and we look on to it and take necessary actions');
       }
}
