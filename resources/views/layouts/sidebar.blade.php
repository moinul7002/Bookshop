<div id="sidebar">
	<ul class="categories">
		<li>
			<h4>Categories</h4>
			<ul>
				@foreach($category as $cc)
				<li><a href="{{ route('show_book',$cc->category) }}">{{ $cc->category }} ( {{ book_count($cc->category) }} )</a></li>
				@endforeach
			</ul>
		</li>
		<li>
			<h4>Authors</h4>
			<ul>
				@foreach($author as $aa)
				<li><a href="{{ route('show_books',$aa->author_name) }}">{{ $aa->author_name }} ( {{ book_count_author($aa->author_name) }} )</a></li>
				@endforeach
			</ul>
		</li>
	</ul>
</div>
