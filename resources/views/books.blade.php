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
					@foreach($books as $book)
					<li>
						<div class="product">
							<a href="{{ route('add_to_cart',$book->id) }}" class="info">
								<span class="holder">
									<img class="card-img-top feature-img" src="{{ asset('uploads/avatars/'.$book->book_image) }}" alt="">
									<span class="book-name">{{ $book->book_title }}</span>
									<span class="author">{{ $book->book_author }}</span>
									<span class="description">Publish Year:{{ $book->year }}</span></br>
									<span class="description">Type:{{ $book->book_type }}</span>
								</span>
							</a>
							<a href="	{{ route('add_to_cart',$book->id) }} " class="buy-btn">Order <span class="price"><span class="low">tk</span>{{ $book->book_price }}<span class="high"></span></span></a>
						</div>
					</li>
					@endforeach
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
