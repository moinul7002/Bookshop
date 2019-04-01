@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2" style="padding-top:20px">
          <a href="{{ route('view_category') }}" class="btn btn-success" style="margin:5px">Add Category</a><br>
          <a href="{{ route('view_author') }}" class="btn btn-success" style="margin:5px">Add Author</a><br>
          <a href="{{ route('view_publisher') }}" class="btn btn-success" style="margin:5px">Add Publication</a><br>
          <a href="{{ route('view_country') }}" class="btn btn-success" style="margin:5px">Add Country</a><br>
          <a href="{{ route('view_feature') }}" class="btn btn-success" style="margin:5px">View Feature</a><br>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  Edit Books
                </div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('edit_books_done',$data->id) }}" aria-label="{{ __('add_category') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="book_isbn" class="col-md-4 col-form-label text-md-right">{{ __('ISBN') }}</label>

                            <div class="col-md-6">
                                <input id="book_isbn" type="text" class="form-control{{ $errors->has('book_isbn') ? ' is-invalid' : '' }}" name="book_isbn" value="{{ $data->book_isbn }}" >

                                @if ($errors->has('book_isbn'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('book_isbn') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="feature" class="col-md-4 col-form-label text-md-right">Category</label>

                            <div class="col-md-6">
                              <select id="book_type" type="text" class="form-control{{ $errors->has('book_type') ? ' is-invalid' : '' }}" name="book_type" value="{{ old('book_type') }}" required autofocus>
                                    @foreach($category as $cc)
                                    <option value="{{ $cc->category }}" @if($data->book_type == $cc->category) selected @endif >{{ $cc->category }}</option>
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
                            <label for="country" class="col-md-4 col-form-label text-md-right">Country</label>

                            <div class="col-md-6">
                              <select id="country" type="text" class="form-control{{ $errors->has('country') ? ' is-invalid' : '' }}" name="country" value="{{ old('country') }}" required autofocus>
                                    @foreach($country as $cc)
                                    <option value="{{ $cc->country }}" @if($data->country == $cc->country) selected @endif >{{ $cc->country }}</option>
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
                            <label for="book_of_the_month" class="col-md-4 col-form-label text-md-right">Book Of The Month</label>

                            <div class="col-md-6">
                              <input id="book_of_the_month" type="text" class="form-control{{ $errors->has('book_of_the_month') ? ' is-invalid' : '' }}" name="book_of_the_month" value="{{ $data->book_of_the_month }}" >

                                @if ($errors->has('book_of_the_month'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('book_of_the_month') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="feature" class="col-md-4 col-form-label text-md-right">Feature</label>

                            <div class="col-md-6">
                              <select id="feature" type="text" class="form-control{{ $errors->has('feature') ? ' is-invalid' : '' }}" name="feature" value="{{ old('feature') }}" required autofocus>
                                    @foreach($feature as $cc)
                                    <option value="{{ $cc->feature }}" @if($data->feature == $cc->feature) selected @endif >{{ $cc->feature }}</option>
                                    @endforeach
                              </select>

                                @if ($errors->has('feature'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('feature') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="book_title" class="col-md-4 col-form-label text-md-right">Book Title</label>

                            <div class="col-md-6">
                                <input id="book_title" type="text" class="form-control{{ $errors->has('book_title') ? ' is-invalid' : '' }}" name="book_title" value="{{ $data->book_title }}" >

                                @if ($errors->has('book_title'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('book_title') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="book_author" class="col-md-4 col-form-label text-md-right">Author</label>

                            <div class="col-md-6">
                              <select id="book_author" type="text" class="form-control{{ $errors->has('book_author') ? ' is-invalid' : '' }}" name="book_author" required autofocus>
                                    @foreach($author as $aa)
                                    <option value="{{ $aa->author_name }}" @if($aa->author_name == $data->book_author) selected @endif >{{ $aa->author_name }}</option>
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
                            <label for="book_description" class="col-md-4 col-form-label text-md-right">Book Description</label>

                            <div class="col-md-6">
                                <input id="book_description" type="text" class="form-control{{ $errors->has('book_description') ? ' is-invalid' : '' }}" name="book_description" value="{{ $data->book_description }}" >

                                @if ($errors->has('book_description'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('book_description') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">Year</label>

                            <div class="col-md-6">
                                <input id="year" type="text" class="form-control{{ $errors->has('year') ? ' is-invalid' : '' }}" name="year" value="{{ $data->year }}" >

                                @if ($errors->has('year'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('year') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="book_image" class="col-md-4 col-form-label text-md-right">Image</label>

                            <div class="col-md-6">
                              <input type="file" name="book_image" value="$data->book_image">
                              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="publication" class="col-md-4 col-form-label text-md-right">Publication</label>

                            <div class="col-md-6">
                              <select id="publication" type="text" class="form-control{{ $errors->has('publication') ? ' is-invalid' : '' }}" name="publication" required autofocus>
                                    @foreach($publisher as $pp)
                                    <option value="{{ $pp->publisher_name }}" @if($pp->publisher_name == $data->publication) selected @endif >{{ $pp->publisher_name }}</option>
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
                            <label for="book_price" class="col-md-4 col-form-label text-md-right">Price</label>

                            <div class="col-md-6">
                                <input id="book_price" type="text" class="form-control{{ $errors->has('book_price') ? ' is-invalid' : '' }}" name="book_price" value="{{ $data->book_price }}" >

                                @if ($errors->has('book_price'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('book_price') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="book_number" class="col-md-4 col-form-label text-md-right">Book Number</label>

                            <div class="col-md-6">
                                <input id="book_number" type="text" class="form-control{{ $errors->has('book_number') ? ' is-invalid' : '' }}" name="book_number" value="{{ $data->book_number }}" >

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
                                    {{ __('Update') }}
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
