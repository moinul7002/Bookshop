@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3" style="padding-top:20px">
          <a href="{{ route('view_category') }}" class="btn btn-success" style="margin:5px">Add Category</a><br>
          <a href="{{ route('view_author') }}" class="btn btn-success" style="margin:5px">Add Author</a><br>
          <a href="{{ route('view_publisher') }}" class="btn btn-success" style="margin:5px">Add Publication</a><br>
          <a href="{{ route('view_country') }}" class="btn btn-success" style="margin:5px">Add Country</a><br>
          <a href="{{ route('view_feature') }}" class="btn btn-success" style="margin:5px">View Feature</a><br>
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  Add Books
                </div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('add_books_done') }}" aria-label="{{ __('user_edit_done') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="isbn" class="col-md-4 col-form-label text-md-right">{{ __('ISBN No') }}</label>

                            <div class="col-md-6">
                                <input id="isbn" type="text" class="form-control{{ $errors->has('isbn') ? ' is-invalid' : '' }}" name="isbn" >

                                @if ($errors->has('isbn'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('isbn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="book_type" class="col-md-4 col-form-label text-md-right">{{ __('Book Type') }}</label>

                            <div class="col-md-6">
                              <select id="book_type" type="text" class="form-control{{ $errors->has('book_type') ? ' is-invalid' : '' }}" name="book_type" required autofocus>
                                      @foreach($category as $cat)
                                      <option value="{{ $cat->category }}" >{{ $cat->category }}</option>
                                      @endforeach
                              </select>

                                @if ($errors->has('book_type'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('book_type') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="country" class="col-md-4 col-form-label text-md-right">{{ __('Country') }}</label>

                            <div class="col-md-6">
                              <select id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" required autofocus>
                                      @foreach($country as $cat)
                                      <option value="{{ $cat->country }}" >{{ $cat->country }}</option>
                                      @endforeach
                              </select>

                                @if ($errors->has('country'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('country') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="book_name" class="col-md-4 col-form-label text-md-right">{{ __('Book Name') }}</label>

                            <div class="col-md-6">
                                <input id="book_name" type="text" class="form-control{{ $errors->has('book_name') ? ' is-invalid' : '' }}" name="book_name"  >

                                @if ($errors->has('book_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('book_name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="book_author" class="col-md-4 col-form-label text-md-right">{{ __('Author') }}</label>

                            <div class="col-md-6">
                              <select id="author_name" type="text" class="form-control{{ $errors->has('author_name') ? ' is-invalid' : '' }}" name="author_name" required autofocus>
                                      @foreach($author as $aa)
                                      <option value="{{ $aa->author_name }}" >{{ $aa->author_name }}</option>
                                      @endforeach
                              </select>

                                @if ($errors->has('book_author'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('book_author') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Publish Year') }}</label>

                            <div class="col-md-6">
                                <input id="year" type="text" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" name="year" >

                                @if ($errors->has('year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="image" class="col-md-4 col-form-label text-md-right">{{ __('Image') }}</label>

                            <div class="col-md-6">
                              <input type="file" name="image">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">

                                @if ($errors->has('image'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('image') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-md-4 col-form-label text-md-right">{{ __('Description') }}</label>

                            <div class="col-md-6">
                                <input id="description" type="text" class="form-control{{ $errors->has('description') ? ' is-invalid' : '' }}" name="description"  >

                                @if ($errors->has('description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="publication" class="col-md-4 col-form-label text-md-right">{{ __('Publication') }}</label>

                            <div class="col-md-6">
                              <select id="publication" type="text" class="form-control{{ $errors->has('publication') ? ' is-invalid' : '' }}" name="publication" required autofocus>
                                      @foreach($publisher as $aa)
                                      <option value="{{ $aa->publisher_name }}" >{{ $aa->publisher_name }}</option>
                                      @endforeach
                              </select>

                                @if ($errors->has('publication'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('publication') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="text" class="form-control{{ $errors->has('price') ? ' is-invalid' : '' }}" name="price"  >

                                @if ($errors->has('price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="book_number" class="col-md-4 col-form-label text-md-right">{{ __('Book_number') }}</label>

                            <div class="col-md-6">
                                <input id="book_number" type="text" class="form-control{{ $errors->has('book_number') ? ' is-invalid' : '' }}" name="book_number"  >

                                @if ($errors->has('book_number'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('book_number') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Add') }}
                                </button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
