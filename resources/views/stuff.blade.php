@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-3" style="padding-top:20px">
        </div>
        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                  Stuff Panel
                </div>

                <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('stuff_book_check') }}" aria-label="{{ __('user_edit_done') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="verification_no" class="col-md-4 col-form-label text-md-right">{{ __('Verification No') }}</label>

                            <div class="col-md-6">
                                <input id="verification_no" type="text" class="form-control{{ $errors->has('verification_no') ? ' is-invalid' : '' }}" name="verification_no" >

                                @if ($errors->has('verification_no'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('verification_no') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Check') }}
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
