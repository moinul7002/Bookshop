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
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @if(Auth::user()->status=='admin')
                        <table style="border-collapse: collapse;width: 100%;">
                        <tr style="border: 1px solid #dddddd;text-align: left;padding: 8px;font-size:20px;color: gray">
                            <th>ISBN</th>
                            <th>Book Name</th>
                            <th>Author</th>
                            <th>Publication</th>
                            <th>Price</th>
                            <th>Book Number</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        @foreach($info as $data)
                        <tr>
                            <th>{{ $data->book_isbn }}</th>
                            <th>{{ $data->book_title  }}</th>
                            <th>{{ $data->book_author }}</th>
                            <th>{{ $data->publication }}</th>
                            <th>{{ $data->book_price }}</th>
                            <th>{{ $data->book_number }}</th>
                            <th><a class="btn btn-success" href="{{ route('edit_books',$data->id) }}">Edit</a></th>
                            <th><a class="btn btn-success" href="{{ route('delete_books',$data->id) }}">Delete</a></th>

                                @endforeach
                                </table>

                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
