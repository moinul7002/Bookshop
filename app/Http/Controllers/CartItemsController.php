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
use App\common_func;

class CartItemsController extends Controller
{
    public function cart_show(){
      if(Auth::user()){
        cart_info_check();
        $numb = Cart_Info::where('user_id','=',Auth::user()->id)->where('order_info','=',NULL)->first();
        //delete_book_from_cart($numb->id);
        $cart_book = Cart_Items::where('card_id','=',$numb->id)->get();
        $book = books::orderBy('id');
        return view('cart')->with('cart_info',$numb)
                           ->with('cart_items',$cart_book);
      }
      else{
        return redirect()->route('login');
      }

    }


      public function add_to_cart($book_id){
          if(Auth::user()){
            cart_info_check();
            $cart_2 = Cart_Info::where('user_id','=',Auth::user()->id)->where('order_info','=',NULL)->first();
            $cart_2->order_amount = $cart_2->order_amount + 1;
            $cart_2->total_price = total_price($cart_2->id,$book_id);
            $cart_2->save();
            $book = books::where('id','=',$book_id)->first();
            $cc = new Cart_Items;
            $cc->card_id = $cart_2->id;
            $cc->user_id = Auth::user()->id;
            $cc->book_id = $book_id;
            $cc->item_amount = 1;
            $cc->price = $book->book_price;
            $cc->save();
            return redirect()->route('home');
          }
          else{
            return redirect()->route('login');
          }

    }

    public function del_from_cart($cart_id,$book_id){
      delete_book_from_cart($cart_id,$book_id);
      return redirect()->route('cart_show');
    }

    public function change_item_amount(Request $request,$cart_id,$book_id){
      $temp = $request->amount;
      //echo $temp;
      change_order_amount_in_cart($cart_id,$book_id,$temp);
      return redirect()->route('cart_show');
    }

    public function confirm_preorder(){
      $numb = Cart_Info::where('user_id','=',Auth::user()->id)->where('order_info','=',NULL)->first();
      //delete_book_from_cart($numb->id);
      $cart_book = Cart_Items::where('card_id','=',$numb->id)->get();
      $book = books::orderBy('id');
      return view('cart_confirm')->with('cart_info',$numb)
                         ->with('cart_items',$cart_book);
    }


    public function confirm_order($id){
      //$book = books::orderBy('id')->get();
      $cart = Cart_Info::where('id','=',$id)->first();
      $cart_item = Cart_Items::where('card_id','=',$id)->get();
      $temp = 0;

      foreach($cart_item as $ca){
        $b = books::where('id','=',$ca->book_id)->first();
        if($b->book_number < $ca->item_amount){
          $temp = $temp + 1;
          return view('cart_not_confirm')->with('book',$b);
        }
      }

      if($temp == 0){
        confirm_book_order_from_cart($id);
        $cart_1 = Cart_Info::where('id','=',$id)->first();
        send_message(Auth::user()->mobile_no,$cart_1->verification_no);
        return view('cart_confirm_done');
      }
    }

    public function confirm_order_done(){
      return view('cart_confirm_done');
    }

    public function show_stuff(){
      return view('stuff');
    }

    public function stuff_book_check(Request $request){
      $info = Cart_Info::where('verification_no','=',$request->verification_no)->first();
      $items = Cart_Items::where('card_id','=',$info->id)->get();
      return view('stuff_check')->with('info',$info)
                                            ->with('items',$items);
    }

    public function issue_books($cart_id){
      $info = Cart_Info::where('id','=',$cart_id)->first();
      $info->received_info = 'received';
      $info->save();
      $items = Cart_Items::where('card_id','=',$info->id)->get();
      return view('stuff_check')->with('info',$info)
                                            ->with('items',$items);
    }

}
