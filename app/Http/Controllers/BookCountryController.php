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

class BookCountryController extends Controller
{
  public function view_country(){
    $data = book_country::orderBy('id')->get();
    return view('view_country')->with('info',$data);
  }

  public function add_country(Request $request){
    $cat = new book_country;
    $cat->country = $request->country;
    $cat->save();
    return redirect()->route('view_country');
  }

  public function delete_country($id){
    $cat = book_country::where('id','=',$id)->first();
    $cat->delete();
    return redirect()->route('view_country');
  }

  public function edit_country($id){
    $cat = book_country::where('id','=',$id)->first();
    return view('edit_country')->with('data',$cat);
  }

  public function edit_author_done(Request $request,$id){
    $cat = author::where('id','=',$id)->first();
    $cat->country  = $request->country;
    $cat->save();

    return redirect()->route('view_author');
  }

  public function delete_books($id){
    $book = books::where('id','=',$id)->first();
    $book->delete();
  }
}
