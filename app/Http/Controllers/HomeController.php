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
use App\Cart_Items;
use App\Cart_Info;
use App\Order_History;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $books = books::orderBy('id','desc')->get();
      $categories = category::orderBy('category')->get();
      $author = author::orderBy('author_name')->get();
      return view('home')->with('books',$books)
                            ->with('author',$author)
                            ->with('category',$categories);

    }

    public function index_h()
    {
        $books = books::orderBy('id','desc')->get();
        return view('page')->with('books',$books);

    }

    public function user_edit()
    {
        $info = User::orderBy('id')->get();
        return view('user_info')->with('info',$info);
    }

    public function delete_from_user($id){
        $data = User::where('id','=',$id);
        $data->delete();
        $info = User::orderBy('id')->get();
        return view('user_info')->with('info',$info);
    }

    public function edit_user($id){
        $user_edit = User::where('id','=',$id)->first();
        return view('edit_user')->with('data',$user_edit);

    }

    public function user_edit_done(Request $request){
        $user = User::where('id','=',$request->id_no)->first();
        $user->status = $request->status;
        $user->save();

        $info = User::orderBy('id')->get();
        return redirect()->route('user_edit')->with('info',$info);
    }

    public function profile_show(){
      if(Auth::user()){
        $cart_info = Cart_Info::where('user_id','=',Auth::user()->id)->orderBy('id')->get();
        $cart_items = Cart_Items::where('user_id','=',Auth::user()->id)->orderBy('id')->get();
        return view('profile')->with('cart_info',$cart_info)
                              ->with('cart_item',$cart_items);
      }
      else{
        return view('welcome');
      }
    }

    public function upload_profile_pic(Request $request){
      if($request->hasFile('avatar')){
        $avatar = $request->file('avatar');
        $filename = time().".".$avatar->getClientOriginalExtension();
        Image::make($avatar)
               ->resize(300,300)
               ->save( public_path('/uploads/avatars/' .$filename) );

        $user = Auth::user();
        $user->avatar = $filename;
        $user->save();
      }
      return redirect()->route('profile_show');
    }

}
