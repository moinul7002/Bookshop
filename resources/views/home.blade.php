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
				<h3>BOOKS OF THE MONTH</h3>
				<ul>
					@foreach($books as $book)
					@if($book->book_of_the_month == 'YES')

					<li>
						<div class="product">
							<a href="{{ route('book_description',$book->id) }}" class="info">
								<span class="holder">
									<img class="card-img-top feature-img" src="{{ asset('uploads/avatars/'.$book->book_image) }}" alt="">
									<span class="book-name">{{ $book->book_title }}</span>
									<span class="author">{{ $book->book_author }}</span>
									<span class="description">Publish Year:{{ $book->year }}</span></br>
									<span class="description">Type:{{ $book->book_type }}</span><br>
									@if( book_number($book->id) == 0 ) 	<span class="description" style="color:red">Not Available</span> @endif
								</span>
							</a>
							@if( book_number($book->id) != 0 )
							<a href="	{{ route('add_to_cart',$book->id) }} " class="buy-btn" >Order <span class="price"><span class="low">tk</span>{{ $book->book_price }}<span class="high"></span></span></a>
							@else
							<a href="#" class="buy-btn" style="opacity:0.5">Order <span class="price"><span class="low">tk</span>{{ $book->book_price }}<span class="high"></span></span></a>
							@endif
						</div>
					</li>
					@endif
					@endforeach
				</ul>
			<!-- End Products -->
			</div>
			<div class="cl">&nbsp;</div>
			<!-- Best-sellers -->
			<div id="best-sellers">
				<h3>PEOPLES CHOICE</h3>
				<ul>
					@foreach($books as $book)
						@if($book->feature == 'Peoples Choice')
						<li>
						<div class="product">
						@if( book_number($book->id) != 0 )
							<a href="{{ route('add_to_cart',$book->id) }}">
						@else
							<a href="#"style="opacity:0.5">
						@endif
								<img class="card-img-top feature-img" src="{{ asset('uploads/avatars/'.$book->book_image) }}" alt="">
								<span class="book-name">{{ $book->book_title }}</span>
								<span class="author">{{ $book->book_author }}</span>
								<span class="price"><span class="low">
								@if( book_number($book->id) != 0 )
								tk</span>  {{  $book->book_price }}</span>
								@else
								Not Available</span></span>
								@endif
							</a>
						</div>
					</li>
					@endif
					@endforeach
				</ul>
			</div>

			<div id="best-sellers">
				<h3>FAVOURITE AUTHOR</h3>
				<ul>
					@foreach($books as $book)
					@if($book->feature == 'Most Searched Author')
					<li>
						<div class="product">
						@if( book_number($book->id) != 0 )
							<a href="{{ route('add_to_cart',$book->id) }}">
						@else
							<a href="#"style="opacity:0.5">
						@endif
								<img class="card-img-top feature-img" src="{{ asset('uploads/avatars/'.$book->book_image) }}" alt="">
								<span class="book-name">{{ $book->book_title }}</span>
								<span class="author">{{ $book->book_author }}</span>
								<span class="price"><span class="low">
								@if( book_number($book->id) != 0 )
								tk</span>  {{  $book->book_price }}</span>
								@else
								Not Available</span></span>
								@endif
							</a>
						</div>
					</li>
					@endif
					@endforeach
				</ul>
			</div>

			<div id="best-sellers">
				<h3>FOREIGN BOOKS</h3>
				<ul>
					@foreach($books as $book)
					@if($book->country != 'Bengali')
					<li>
						<div class="product">
						@if( book_number($book->id) != 0 )
							<a href="{{ route('add_to_cart',$book->id) }}">
						@else
							<a href="#"style="opacity:0.5">
						@endif
								<img class="card-img-top feature-img" src="{{ asset('uploads/avatars/'.$book->book_image) }}" alt="">
								<span class="book-name">{{ $book->book_title }}</span>
								<span class="author">{{ $book->book_author }}</span>
								<span class="price"><span class="low">
								@if( book_number($book->id) != 0 )
								tk</span>  {{  $book->book_price }}</span>
								@else
								Not Available</span></span>
								@endif
							</a>
						</div>
					</li>
					@endif
					@endforeach
				</ul>
			</div>


			<div id="best-sellers">
				<h3>Engineering Books</h3>
				<ul>
					@foreach($books as $book)
					@if($book->feature == 'Engineering Books')
					<li>
						<div class="product">
						@if( book_number($book->id) != 0 )
							<a href="{{ route('add_to_cart',$book->id) }}">
						@else
							<a href="#"style="opacity:0.5">
						@endif
								<img class="card-img-top feature-img" src="{{ asset('uploads/avatars/'.$book->book_image) }}" alt="">
								<span class="book-name">{{ $book->book_title }}</span>
								<span class="author">{{ $book->book_author }}</span>
								<span class="price"><span class="low">
								@if( book_number($book->id) != 0 )
								tk</span>  {{  $book->book_price }}</span>
								@else
								Not Available</span></span>
								@endif
							</a>
						</div>
					</li>
					@endif
					@endforeach
				</ul>
			</div>
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
