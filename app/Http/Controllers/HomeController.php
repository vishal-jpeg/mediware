<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use App\Models\User;

use App\Models\Camp;

use App\Models\Category;

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
                return view('admin.home',compact('camp'));
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
}
