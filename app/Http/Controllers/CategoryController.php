<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\books;
use App\category;

class CategoryController extends Controller
{
    public function view_category(){
      $data = category::orderBy('id')->get();
      return view('view_category')->with('info',$data);
    }

    public function add_category(Request $request){
      $cat = new category;
      $cat->category = $request->book_type;
      $cat->save();
      return redirect()->route('view_category');
    }

    public function delete_category($id){
      $cat = category::where('id','=',$id)->first();
      $cat->delete();
      return redirect()->route('view_category');
    }

    public function edit_category($id){
      $cat = category::where('id','=',$id)->first();
      return view('edit_category')->with('data',$cat);
    }

    public function edit_category_done(Request $request,$id){
      $cat = category::where('id','=',$id)->first();
      $cat->category  = $request->book_type;
      $cat->save();

      return redirect()->route('view_category');
    }
}
