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
                  @foreach($items as $ii)
                    Book Name : {{ show_books_name($ii->book_id) }}  Number of Books : {{ $ii->item_amount }}  Price: {{ $ii->price }}<br>
                  @endforeach
                  Total Price: {{ $info->total_price }}<br>
                  Status: @if($info->received_info != 'received') Not Received @else Received @endif
                  <br>
                  <br><a class="btn btn-success" href="{{ route('issue_books',$info->id) }}">Confirm</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
