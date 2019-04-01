@include('layouts.elements')
<!-- Start Header -->
@include('layouts.header')
<!-- End Header -->
<div id="main" class="shell">
<div class="container">
    <div class="row">
        <div class="col-md-10 call-md-offset-1">
            <img src="/uploads/avatars/{{ Auth::user()->avatar }}" style="width:100px;height:100px;float:left;border-radius:50%; margin-right:50px" >
            <h4>{{ Auth::user()->name }}'s profile </h2>
            <form enctype="multipart/form-data" action="{{ route('upload_profile_pic') }}" method="POST" >
              <label> Upload Profile Image</label></p>
              <input type="file" name="avatar">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
              <input type="submit" class="pull-right btn btn-sm btn-primary">
            </form>
        </div>


      </p></p></p>
      <div class="row" style="padding-top:20px">
        @foreach($cart_info as $cc)
          @if($cc->order_info == 'ordered')
           <br><br><br>
           <div style="width:600px;border:1px solid #000;">
            <p style="background:#003399;color:white;padding-top:6px">On {{ $cc->updated_at }} --------- Received: @if($cc->received_info != 'received') NO @else YES @endif </p>
            @foreach($cart_item as $ca)
            <p style="background:#ccffcc;">
              @if($cc->id == $ca->card_id)
                * Book: {{ show_books_name($ca->book_id) }}  Amount: {{ $ca->item_amount }}  Price: {{ $ca->price }}<br>
              @endif
            @endforeach
            <p style="background:#ff6666;color:white;padding-top:6px">Total Price: {{ $cc->total_price }}</p>
          @endif
        </div>
        @endforeach
      </div>
      </div>
    </div>
  </div>
  <!-- End Main -->
  <!-- Footer -->
  @include('layouts.footer')
  <!-- End Footer -->
  </body>
  </html>
