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
use App\Cart_Item;
use App\Cart_Info;
use App\Order_History;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', function () {
  $books = books::orderBy('id','desc')->get();
  $categories = category::orderBy('category')->get();
  $author = author::orderBy('author_name')->get();
  return view('welcome')->with('books',$books)
                        ->with('author',$author)
                        ->with('category',$categories);
})->name('front_page');

Route::get('/book/{id}', function ($id) {
  $books = books::where('book_type','=',$id)->get();
  $categories = category::orderBy('category')->get();
  $author = author::orderBy('author_name')->get();
  return view('books')->with('books',$books)
                        ->with('author',$author)
                        ->with('category',$categories);
})->name('show_book');


Route::get('/book_description/{id}', function ($id) {
  $books = books::where('id','=',$id)->first();
  $categories = category::orderBy('category')->get();
  $author = author::orderBy('author_name')->get();
  return view('book_description')->with('books',$books)
                        ->with('author',$author)
                        ->with('category',$categories);
})->name('book_description');

Route::get('/books/{id}', function ($id) {
  $books = books::where('book_author','=',$id)->get();
  $categories = category::orderBy('category')->get();
  $author = author::orderBy('author_name')->get();
  return view('books')->with('books',$books)
                        ->with('author',$author)
                        ->with('category',$categories);
})->name('show_books');


Route::post('/searched_books', function (Request $request) {
  $temp = $request->search;
  $books_1 = books::where('book_author','=',$request->search)->get();
  $books_2 = books::where('book_title','=',$request->search)->get();
  $books_3 = books::where('year','=',$request->search)->get();
  $books_4 = books::where('book_type','=',$request->search)->get();
  $categories = category::orderBy('category')->get();
  $author = author::orderBy('author_name')->get();
  if($books_1){
    $book = books::where('book_author','=',$request->search)->get();
  }
  elseif($books_2){
    $book = books::where('book_title','=',$request->search)->get();
  }
  elseif($books_3){
    $book = books::where('year','=',$request->search)->get();
  }
  else{
    $book = books::where('book_type','=',$request->search)->get();
  }
  //echo $request->search;

  return view('books')->with('books',$book)
                        ->with('author',$author)
                        ->with('category',$categories);

})->name('search_result');


Route::get('/register_user', function () {
  $books = books::orderBy('id','desc')->get();
  $categories = category::orderBy('category')->get();
  $author = author::orderBy('author_name')->get();
  return view('auth.register')->with('books',$books)
                        ->with('author',$author)
                        ->with('category',$categories);
})->name('register_user');
//Route::get('/','HomeController@front_page')->name('front_page');

Route::get('/page','HomeController@index_h')->name('index_h');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user_edit','HomeController@user_edit')->name('user_edit');

Route::get('/home/{id}','HomeController@delete_from_user')->name('delete_from_user');
Route::get('/home/edit_user/{id}','HomeController@edit_user')->name('edit_user');
Route::get('/delete_user/{id}','HomeController@delete_from_user')->name('delete_user');
Route::post('/home/user_edit_done','HomeController@user_edit_done')->name('user_edit_done');
Route::get('/profile','HomeController@profile_show')->name('profile_show');
Route::post('/profile_pic','HomeController@upload_profile_pic')->name('upload_profile_pic');


Route::get('/book_info','BooksController@book_info')->name('book_info');
Route::get('/add_books','BooksController@add_books')->name('add_books');
Route::post('/add_books','BooksController@add_books_done')->name('add_books_done');
Route::get('/edit_books/{id}','BooksController@edit_books')->name('edit_books');
Route::get('/delete_books/{id}','BooksController@delete_books')->name('delete_books');
Route::post('/edit_books/{id}','BooksController@edit_books_done')->name('edit_books_done');

Route::get('/view_category','CategoryController@view_category')->name('view_category');
Route::post('/add_category','CategoryController@add_category')->name('add_category');
Route::get('/delete_category/{id}','CategoryController@delete_category')->name('delete_category');
Route::get('/edit_category/{id}','CategoryController@edit_category')->name('edit_category');
Route::post('/edit_category/{id}','CategoryController@edit_category_done')->name('edit_category_done');


Route::get('/view_author','AuthorController@view_author')->name('view_author');
Route::post('/add_author','AuthorController@add_author')->name('add_author');
Route::get('/delete_author/{id}','AuthorController@delete_author')->name('delete_author');
Route::get('/edit_author/{id}','AuthorController@edit_author')->name('edit_author');
Route::post('/edit_author/{id}','AuthorController@edit_author_done')->name('edit_author_done');


Route::get('/view_publisher','PublisherController@view_publisher')->name('view_publisher');
Route::post('/add_publisher','PublisherController@add_publisher')->name('add_publisher');
Route::get('/delete_publisher/{id}','PublisherController@delete_publisher')->name('delete_publisher');
Route::get('/edit_publisher/{id}','PublisherController@edit_publisher')->name('edit_publisher');
Route::post('/edit_publisher/{id}','PublisherController@edit_publisher_done')->name('edit_publisher_done');


Route::get('/view_country','BookCountryController@view_country')->name('view_country');
Route::post('/add_country','BookCountryController@add_country')->name('add_country');
Route::get('/delete_country/{id}','BookCountryController@delete_country')->name('delete_country');
Route::get('/edit_country/{id}','BookCountryController@edit_country')->name('edit_country');
Route::post('/edit_country/{id}','BookCountryController@edit_country_done')->name('edit_country_done');


Route::get('/view_feature','FeatureController@view_feature')->name('view_feature');
Route::post('/add_feature','FeatureController@add_feature')->name('add_feature');
Route::get('/delete_feature/{id}','FeatureController@delete_feature')->name('delete_feature');
Route::get('/edit_feature/{id}','FeatureController@edit_feature')->name('edit_feature');
Route::post('/edit_feature/{id}','FeatureController@edit_feature_done')->name('edit_feature_done');


Route::get('/cart','CartItemsController@cart_show')->name('cart_show');
Route::get('/add_to_cart/{id}','CartItemsController@add_to_cart')->name('add_to_cart');
Route::get('/delete_book/{cart_id}/{book_id}','CartItemsController@del_from_cart')->name('delete_book');
Route::post('/change_item_amount/{cart_id}/{book_id}','CartItemsController@change_item_amount')->name('change_item_amount');
Route::get('/confirm_order/{cart_id}','CartItemsController@confirm_order')->name('confirm_order');
Route::get('/confirm_preorder','CartItemsController@confirm_preorder')->name('confirm_preorder');
Route::get('/confirm_order_done','CartItemsController@confirm_order_done')->name('confirm_order_done');
Route::get('/stuff_panel','CartItemsController@show_stuff')->name('show_stuff');
Route::post('/stuff_book_check','CartItemsController@stuff_book_check')->name('stuff_book_check');
Route::get('/issue_books/{id}','CartItemsController@issue_books')->name('issue_books');
