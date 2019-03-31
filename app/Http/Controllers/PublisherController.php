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
use App\publisher;

class PublisherController extends Controller
{
  public function view_publisher(){
    $data = publisher::orderBy('id')->get();
    return view('view_publisher')->with('info',$data);
  }

  public function add_publisher(Request $request){
    $cat = new publisher;
    $cat->publisher_name = $request->publisher_name;
    $cat->save();
    return redirect()->route('view_publisher');
  }

  public function delete_publisher($id){
    $cat = publisher::where('id','=',$id)->first();
    $cat->delete();
    return redirect()->route('view_publisher');
  }

  public function edit_publisher($id){
    $cat = publisher::where('id','=',$id)->first();
    return view('edit_publisher')->with('data',$cat);
  }

  public function edit_publisher_done(Request $request,$id){
    $cat = publisher::where('id','=',$id)->first();
    $cat->publisher_name  = $request->publisher_name;
    $cat->save();

    return redirect()->route('view_publisher');
  }
}
