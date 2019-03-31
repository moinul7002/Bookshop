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
use App\author;

class AuthorController extends Controller
{
  public function view_author(){
    $data = author::orderBy('id')->get();
    return view('view_author')->with('info',$data);
  }

  public function add_author(Request $request){
    $cat = new author;
    $cat->author_name = $request->author_name;
    $cat->save();
    return redirect()->route('view_author');
  }

  public function delete_author($id){
    $cat = author::where('id','=',$id)->first();
    $cat->delete();
    return redirect()->route('view_author');
  }

  public function edit_author($id){
    $cat = author::where('id','=',$id)->first();
    return view('edit_author')->with('data',$cat);
  }

  public function edit_author_done(Request $request,$id){
    $cat = author::where('id','=',$id)->first();
    $cat->author_name  = $request->author_name;
    $cat->save();

    return redirect()->route('view_author');
  }
}
