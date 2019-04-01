@include('layouts.elements')
<!-- Start Header -->
@include('layouts.header')
<!-- End Header -->
<div id="main" class="shell">
<div class="container">
  <h1>Congratzz!!</h4>
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
              <h3>Your Order can't be confirmed. Your order of " {{ $book->book_title }} " of author {{ $book->book_author }} cant be accepted right now. You can order maximum {{ $book->book_number }} copy of thid book. Sorry for the Problem!<h3>
            </div>
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
