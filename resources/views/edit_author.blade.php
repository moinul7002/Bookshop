@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-2" style="padding-top:20px">
          <a href="{{ route('view_category') }}" class="btn btn-success" style="margin:5px">Add Category</a><br>
          <a href="{{ route('view_author') }}" class="btn btn-success" style="margin:5px">Add Author</a><br>
          <a href="{{ route('view_publisher') }}" class="btn btn-success" style="margin:5px">Add Publication</a><br>
        </div>
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                  Add Category
                </div>

                <div class="card-body">
                    <form method="POST" action="{{ route('edit_author_done',$data->id) }}" aria-label="{{ __('add_category') }}">
                        @csrf


                        <div class="form-group row">
                            <label for="author_name" class="col-md-4 col-form-label text-md-right">{{ __('Author Name') }}</label>

                            <div class="col-md-6">
                                <input id="author_name" type="text" class="form-control{{ $errors->has('author_name') ? ' is-invalid' : '' }}" name="author_name" value="{{ $data->author_name }}" >

                                @if ($errors->has('author_name'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('author_name') }}</strong>
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
