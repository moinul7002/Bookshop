@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
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
                            <th>Name</th>
                            <th>Email</th>
                            <th>Mobile No</th>
                            <th>Location</th>
                            <th>Status</th>
                            <th>Action</th>
                            <th>Action</th>
                        </tr>
                        @foreach($info as $data)
                        <tr>
                            <th>{{ $data->name }}</th>
                            <th>{{ $data->email  }}</th>
                            <th>{{ $data->mobile_no }}</th>
                            <th>{{ $data->location }}</th>
                            <th>{{ $data->status }}</th>
                            <th><a class="btn btn-success" href="{{ route('edit_user',$data->id) }}">Edit</a></th>
                            <th><a class="btn btn-success" href="{{ route('delete_user',$data->id) }}">Delete</a></th>
                                @endforeach
                                </table>
                                @elseif(Auth::user()->status=='stuff')
                                   <  Checkout Stuff Here ! >
                                @else
                                     <  users info here !S >
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
