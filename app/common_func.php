<?php
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
//use Image;
use App\Cart_Items;
use App\Cart_Info;
use App\Order_History;
use App\common_func;


   function cart_info_check(){
     if(Auth::user()){
       $cart = Cart_Info::where('user_id','=',Auth::user()->id)
                          ->where('order_info','=',NULL)
                          ->first();
       if(!$cart){
         $data = new Cart_Info;
         $data->user_id = Auth::user()->id;
         $data->order_amount = 0;
         $data->total_price = 0;
         $data->save();
       }
     }

    }

    function item_amount_in_cart(){
      $numb = Cart_Info::where('user_id','=',Auth::user()->id)->where('order_info','=',NULL)->first();
      if($numb){
          return $numb->order_amount;
      }
    }

    function total_price_in_cart(){
      $numb = Cart_Info::where('user_id','=',Auth::user()->id)->where('order_info','=',NULL)->first();
      return $numb->total_price;
    }

    function books_in_cart(){
      $numb = Cart_Info::where('user_id','=',Auth::user()->id)->where('order_info','=',NULL)->first();
      $cart_book = Cart_Items::where('cart_id','=',$numb->id)->orderBy('id','desc')->get();
      $book = books::orderBy('id')->get();
    }

    function book_number($id){
      $book = books::where('id','=',$id)->first();
      return $book->book_number;
    }


    function show_books_name($id){
      $book = books::where('id','=',$id)->first();
      return $book->book_title;
    }

    function show_books_author($id){
      $book = books::where('id','=',$id)->first();
      return $book->book_author;
    }

    function total_price($cart_id,$book_id){
      $cart = Cart_Info::where('id','=',$cart_id)->first();
      $book = books::where('id','=',$book_id)->first();
      $temp = $cart->total_price + $book->book_price ;
      $cart->total_price = $temp;
      $cart->save();
      return $temp;
    }

    function generate_ver_no(){
      $cart = Cart_Info::orderBy('id')->get();
      $temp = mt_rand(100000,999999);
      while(true){
        $flag = 0;
        foreach($cart as $cc){
          if($temp == $cc->verification_no){
            $flag++;
          }
        }
        if($flag == 0){
          break;
        }
        else{
          $temp = mt_rand(100000,999999);
        }
      }
      return $temp;
    }


    function confirm_book_order_from_cart($cart_id){
      $cart = Cart_Info::where('id','=',$cart_id)->first();
      $cart_item = Cart_Items::where('card_id','=',$cart->id)->orderBy('id')->get();
      foreach($cart_item as $ca){
        $b = books::where('id','=',$ca->book_id)->first();
        $b->book_number = $b->book_number - $ca->item_amount;
        $b->save();
      }
      $cart->order_info = "ordered";
      $cart->verification_no = generate_ver_no();
      $cart->save();
    }

    function delete_book_from_cart($cart_id,$book_id){
      $cart = Cart_Info::where('id','=',$cart_id)->first();
      $cart->order_amount = $cart->order_amount - 1;
      $book = Cart_Items::where('book_id','=',$book_id)->first();
      $cart->total_price = $cart->total_price - $book->price;
      $cart->save();
      $book->delete();
    }

    function change_order_amount_in_cart($cart_id,$book_id,$new_amount){
        $cart = Cart_Info::where('id','=',$cart_id)->first();
        $book = Cart_Items::where('book_id','=',$book_id)->where('card_id','=',$cart->id)->first();
        $book_data = books::where('id','=',$book_id)->first();
        $cart->total_price = $cart->total_price - $book->price;
        $book->price = $book_data->book_price * $new_amount;
        $cart->total_price = $cart->total_price + $book->price;
        $book->item_amount =  $new_amount;
        $book->save();
        $cart->save();
    }

    function send_message($number,$code){
      try{
        $soapClient =  new SoapClient("https://api2.onnorokomSMS.com/sendSMS.asmx?wsdl");
        $paramArray = array(
                           'apiKey' => 31903,
                           'messageText' => "Your Order Has been Confirmed. Your Order Code is ".$code." Please confirm this number For receiving books!" ,
                           'numberList' => $number,
                           'smsType' => "TEXT",
                           'maskName' => '',
                           'campaignName' => '',
                           );
                           $value = $soapClient->__call("NumberSms", array($paramArray));
                           //echo $value->numberSmsResult;
        }   catch (Exception $e) {
              echo $e->getMessage();
            }
    }

    function book_count($category){
      $book = books::where('book_type','=',$category)->get();
      $temp = 0;
      foreach($book as $b){
        if($b){
          $temp++;
        }
      }
      return $temp;
    }

    function book_count_author($author){
      $book = books::where('book_author','=',$author)->get();
      $temp = 0;
      foreach($book as $b){
        if($b){
          $temp++;
        }
      }
      return $temp;
    }
