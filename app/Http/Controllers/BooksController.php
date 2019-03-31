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
use App\book_country;
use App\feature;

class BooksController extends Controller
{
     public function book_info(){
       $info = books::orderBy('id')->get();
       return view('book_info')->with('info',$info);
     }

     public function add_books(){
       $auth = author::orderBy('author_name')->get();
       $type = category::orderBy('category')->get();
       $pubs = publisher::orderBy('publisher_name')->get();
       $country = book_country::orderBy('country')->get();
       $feature = feature::orderBy('feature')->get();
       return view('add_books')->with('author',$auth)
                               ->with('category',$type)
                               ->with('country',$country)
                               ->with('feature',$feature)
                               ->with('publisher',$pubs);
     }

     public function add_books_done(Request $request){
       $data = new books; //add new column on books table
       $data->book_isbn = $request->isbn;
       $data->book_type = $request->book_type;
       $data->country = $request->country;
       $data->feature = 'Normal';
       $data->book_of_the_month = 'NO' ;
       $data->book_title = $request->book_name;
       $data->book_author = $request->author_name;
       $data->book_description = $request->description;
       $data->book_number = $request->book_number;
       $data->year = $request->year;

       if($request->hasFile('image')){
         $avatar = $request->file('image');
         $filename = time().".".$avatar->getClientOriginalExtension();
         Image::make($avatar)
               ->resize(353,416)
               ->save( public_path('/uploads/avatars/' .$filename) );
        $data->book_image = $filename;
       }
       else{
         $data->book_image = 'book.png';
       }

       //$data->book_image = $request->image;
       $data->publication = $request->publication;
       $data->book_price = $request->price;
       $data->save();

       return redirect()->route('add_books');
     }

     public function edit_books($id){
       $data = books::where('id','=',$id)->first();
       $auth = author::orderBy('author_name')->get();
       $type = category::orderBy('category')->get();
       $pubs = publisher::orderBy('publisher_name')->get();
       $country = book_country::orderBy('country')->get();
        $feature = feature::orderBy('feature')->get();
       return view('edit_books')->with('data',$data)
                                ->with('author',$auth)
                                ->with('country',$country)
                                ->with('category',$type)
                                ->with('feature',$feature)
                                ->with('publisher',$pubs);
     }

     public function edit_books_done(Request $request,$id){
       $data = books::where('id','=',$id)->first();
       $data->book_isbn = $request->book_isbn;
       $data->book_type = $request->book_type;
       $data->country = $request->country;
       $data->book_title = $request->book_title;
       $data->book_author = $request->book_author;
       $data->feature = $request->feature;
       $data->book_of_the_month = $request->book_of_the_month;
       $data->book_description = $request->book_description;
       $data->year = $request->year;

       if($request->hasFile('book_image')){
         $avatar = $request->file('book_image');
         $filename = time().".".$avatar->getClientOriginalExtension();
         Image::make($avatar)
               ->resize(353,416)
               ->save( public_path('/uploads/avatars/' .$filename) );
        $data->book_image = $filename;
       }
       //$data->book_image = $request->book_image;
       $data->publication = $request->publication;
       $data->book_price = $request->book_price;
       $data->book_number = $request->book_number;
       $data->save();


       return redirect()->route('book_info');
     }

     public function delete_books($id){
       $book = books::where('id','=',$id)->first();
       $book->delete();
       return redirect()->route('book_info');
     }


}
