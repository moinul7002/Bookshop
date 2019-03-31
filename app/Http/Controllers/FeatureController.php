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
use Image;
use App\Cart_Item;
use App\Cart_Info;
use App\Order_History;
use App\book_country;
use App\feature;

class FeatureController extends Controller
{
  public function view_feature(){
    $data = feature::orderBy('id')->get();
    return view('view_feature')->with('info',$data);
  }

  public function add_feature(Request $request){
    $cat = new feature;
    $cat->feature = $request->feature;
    $cat->save();
    return redirect()->route('view_feature');
  }

  public function delete_feature($id){
    $cat = feature::where('id','=',$id)->first();
    $cat->delete();
    return redirect()->route('view_feature');
  }

  public function edit_feature($id){
    $cat = feature::where('id','=',$id)->first();
    return view('edit_feature')->with('data',$cat);
  }

  public function edit_feature_done(Request $request,$id){
    $cat = feature::where('id','=',$id)->first();
    $cat->feature  = $request->feature;
    $cat->save();

    return redirect()->route('view_feature');
  }
}
