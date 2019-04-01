@include('layouts.elements')
<!-- Start Header -->
@include('layouts.header')
<!-- End Header -->

<!-- Main -->
	<div id="main" class="shell">
<!-- Sidebar -->
@include('layouts.sidebar')
<!-- End Sidebar -->
		<!-- Content -->
<div id="content">
			<!-- Products -->
			<div class="products">
				<h3>Books</h3>
				<ul>
					<li>

									<img class="card-img-top feature-img" src="{{ asset('uploads/avatars/'.$books->book_image) }}" alt="" style="width:160px;height:300px">
									<br><br>
									<p>Book Name: {{ $books->book_title }}</p>
									<p>Book Author: {{ $books->book_author }}</p>
									<p>Publish Year:{{ $books->year }}</p></br>
									<p>Type:{{ $books->book_type }}</p>
									<p>Price:{{ $books->book_price }}tk</p>

							<a href="	{{ route('add_to_cart',$books->id) }} " class="buy-btn" style="background-color:#ff1a1a;border: none; color: white;padding: 3px 17px;text-align: center;text-decoration: none;display: inline-block;font-size: 12px;">Order<span class="high"></span></span></a>

					</li>
				</ul>
			<!-- End Products -->
			</div>
			<div class="cl">&nbsp;</div>
			<!-- Best-sellers -->
			<!-- End Best-sellers -->
		</div>
		<!-- End Content -->
		<div class="cl">&nbsp;</div>
	</div>
<!-- End Main -->

<!-- Footer -->
@include('layouts.footer')
<!-- End Footer -->

</body>
</html>
