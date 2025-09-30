<x-app-layout seoTitle="Products">
	<x-slot name='css'>
		<link href="{{ mix('/css/products.css')}}" type="text/css" rel="stylesheet">
		<link href="{{ mix('/css/pagination.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

    <div class="container area3">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class='b15'>

				@if (isset($search_name))
					<p style='font-size: 13px;'>results for <span class='b14'><b>{{ $search_name }}</b></span></p>
				@else
					<p style='font-size: 13px;'>results for <span class='b14'><b>All Products</b></span></p>
				@endif
			</div>
			<div class='b16'>
				<ul class='nav nav-pills b17'>
					@php
						$activeOrderBy = 'Sort by: None';

						(request('order-by') == 'price-asc') ? $activeOrderBy = 'Sort by Price: Low to High' : null;
						(request('order-by') == 'price-desc') ? $activeOrderBy = 'Sort by Price: High to Low' : null;

						// prints '&' only when there is query string except order-by
						$ampersand = '';
						if (http_build_query(request()->except('order-by'))) {
							$ampersand = '&';
						}
					@endphp
					<li class='dropdown'>
						<a class='dropdown-toggle' data-toggle='dropdown' href='#'>{{ $activeOrderBy }}
						<span class='caret'></span></a>
						<ul class='dropdown-menu' style="left: -60px;">
							<li><a class="btn btn-primary btn-lg btn-block a18" href="?order-by=price-asc{{ $ampersand.http_build_query(request()->except('order-by')) }}">Price: Low to High</a></li>
							<li><a class="btn btn-primary btn-lg btn-block a18" href="?order-by=price-desc{{ $ampersand.http_build_query(request()->except('order-by')) }}">Price: High to Low</a></li>
						</ul>
					</li>
				</ul>	
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b19">
			<div class="col-lg-2 col-md-2 col-sm-2 hidden-xs">
				<div class="b20">
					<p><b>Department</b></p>
					@php
						// prints '&' only when there is query string except department
						$ampersand = '';
						if (http_build_query(request()->except('department'))) {
							$ampersand = '&';
						}

						if (http_build_query(request()->except('department')) == null) {
							$topDeptUrl = route('products.index');
						} else {
							$topDeptUrl = '?'.http_build_query(request()->except('department'));
						}
					@endphp
					@foreach ($rootDepartments as $department)
						<p><b>< </b><a class='b21' href="?department={{ $department->id }}{{ $ampersand.http_build_query(request()->except('department')) }}">{{ $department->name }}</a></p>
					@endforeach
					<div id='i27'>
						@foreach ($selfAndChildDepartments as $department)
							@if ($department->id == request('department'))
								@if ($department->parent_department_id == 0)
									<p style='margin-left: 15px; cursor: pointer;'><b><a class='b21' href="{{ $topDeptUrl }}">{{ $department->name }}<a></b></p>
								@else
									<p style='margin-left: 15px; cursor: pointer;'><b><a class='b21' href="?department={{ $department->parent_department_id }}{{ $ampersand.http_build_query(request()->except('department')) }}">{{ $department->name }}<a></b></p>
								@endif
							@endif
						@endforeach
						@foreach ($selfAndChildDepartments as $department)
							@if ($department->id != request('department'))
								<p style='margin-left: 25px;'><a class='b21' href="?department={{ $department->id }}{{ $ampersand.http_build_query(request()->except('department')) }}">{{ $department->name }}</a></p>
							@endif
						@endforeach
					</div>
				</div>
				<div class="b20">
					@php
						// prints '&' only when there is query string except department
						$ampersand = '';
						if (http_build_query(request()->except('rating'))) {
							$ampersand = '&';
						}
					@endphp
					<p><b>Avg. Customer Review</b></p>
					<a class='b49' href="?rating=4{{ $ampersand.http_build_query(request()->except('rating')) }}">
						<p>
							<span class='glyphicon glyphicon-star'></span>
							<span class='glyphicon glyphicon-star'></span>
							<span class='glyphicon glyphicon-star'></span>
							<span class='glyphicon glyphicon-star'></span>
							<span class='glyphicon glyphicon-star-empty'></span>
							<span class='rating-side-text'>& Up</span>
						</p>
					</a>
					<a class='b49' href="?rating=3{{ $ampersand.http_build_query(request()->except('rating')) }}">
						<p>
							<span class='glyphicon glyphicon-star'></span>
							<span class='glyphicon glyphicon-star'></span>
							<span class='glyphicon glyphicon-star'></span>
							<span class='glyphicon glyphicon-star-empty'></span>
							<span class='glyphicon glyphicon-star-empty'></span>
							<span class='rating-side-text'>& Up</span>
						</p>
					</a>
					<a class='b49' href="?rating=2{{ $ampersand.http_build_query(request()->except('rating')) }}">
						<p>
							<span class='glyphicon glyphicon-star'></span>
							<span class='glyphicon glyphicon-star'></span>
							<span class='glyphicon glyphicon-star-empty'></span>
							<span class='glyphicon glyphicon-star-empty'></span>
							<span class='glyphicon glyphicon-star-empty'></span>
							<span class='rating-side-text'>& Up</span>
						</p>
					</a>
					<a class='b49' href="?rating=1{{ $ampersand.http_build_query(request()->except('rating')) }}">
						<p>
							<span class='glyphicon glyphicon-star'></span>
							<span class='glyphicon glyphicon-star-empty'></span>
							<span class='glyphicon glyphicon-star-empty'></span>
							<span class='glyphicon glyphicon-star-empty'></span>
							<span class='glyphicon glyphicon-star-empty'></span>
							<span class='rating-side-text'>& Up</span>
						</p>
					</a>
				</div>
				<div class="b20">
					@php
						// prints '&' only when there is query string except department
						$ampersand = '';
						if (http_build_query(request()->except('minimum-price', 'maximum-price'))) {
							$ampersand = '&';
						}
					@endphp
					<p><b>Price</b></p>
					<p><a class='b21' href="?minimum-price=0&maximum-price=25{{ $ampersand.http_build_query(request()->except('minimum-price', 'maximum-price')) }}">Under $25</a></p>
					<p><a class='b21' href="?minimum-price=25&maximum-price=50{{ $ampersand.http_build_query(request()->except('minimum-price', 'maximum-price')) }}">$25 to $50</a></p>
					<p><a class='b21' href="?minimum-price=50&maximum-price=100{{ $ampersand.http_build_query(request()->except('minimum-price', 'maximum-price')) }}">$50 to $100</a></p>
					<p><a class='b21' href="?minimum-price=100&maximum-price=200{{ $ampersand.http_build_query(request()->except('minimum-price', 'maximum-price')) }}">$100 to $200</a></p>
					<p><a class='b21' href="?minimum-price=200{{ $ampersand.http_build_query(request()->except('minimum-price', 'maximum-price')) }}">$200 & Above</a></p>
					<form action="{{ route('products.index') }}" method="GET">
						@if (request('order-by'))
							<input type="hidden" name="order-by" value="{{ request('order-by') }}">
						@endif
						<input name='minimum-price' type="text" class="form-control b22" placeholder="$ Min" value="{{ request('minimum-price') }}">
						<input name='maximum-price' type="text" class="form-control b23" placeholder="$ Max" value="{{ request('maximum-price') }}">
						<div id='i29'>
							<button type='submit' class='btn btn-primary b24'>Go</button>
						</div>
					</form>
				</div>
			</div>
			<div class="col-lg-10 col-md-10 col-sm-10 col-xs-12">
				<div class='b25'>
					<p>Price and other details may vary based on size and color</p>
					<div id='i1'>
						@foreach ($products as $product)	
							<div class='col-lg-3 col-md-3 col-sm-6 col-xs-12'>
								@if ($product->productImages->first()?->isWideImage())
									<a href="{{ route('products.show', $product->id) }}">
										<div class='b26'>
											<center><img src ='{{ $product->productImages->first()?->url ?? '/images/camera1.png' }}' style='width: 100%'></center>
										</div>
									</a>
								@else
									<a href="{{ route('products.show', $product->id) }}">
										<div class='b26'>
											<center><img src ='{{ $product->productImages->first()?->url ?? '/images/camera1.png' }}' style='height: 100%'></center>
										</div>
									</a>
								@endif
								<div class='b116'>
									<a href="{{ route('products.show', $product->id) }}"><p><b>{{ $product->name }}</b></p></a>
								</div>
								@if ($product->average_rating>=4)
									<div class='b50'>
										<p>
											<span class='glyphicon glyphicon-star'></span>
											<span class='glyphicon glyphicon-star'></span>
											<span class='glyphicon glyphicon-star'></span>
											<span class='glyphicon glyphicon-star'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<a>{{ $product->total_reviews }}</a>
										</p>
									</div>
								@endif
								@if ($product->average_rating>=3 && $product->average_rating<4)
									<div class='b50'>
										<p>
											<span class='glyphicon glyphicon-star'></span>
											<span class='glyphicon glyphicon-star'></span>
											<span class='glyphicon glyphicon-star'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<a>{{ $product->total_reviews }}</a>
										</p>
									</div>
								@endif
								@if ($product->average_rating>=2 && $product->average_rating<3)
									<div class='b50'>
										<p>
											<span class='glyphicon glyphicon-star'></span>
											<span class='glyphicon glyphicon-star'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<a>{{ $product->total_reviews }}</a>
										</p>
									</div>
								@endif
								@if ($product->average_rating>=1&& $product->average_rating<2)
									<div class='b50'>
										<p>
											<span class='glyphicon glyphicon-star'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<a>{{ $product->total_reviews }}</a>
										</p>
									</div>
								@endif
								@if ($product->average_rating>=0 && $product->average_rating<1)
									<div class='b50'>
										<p>
											<span class='glyphicon glyphicon-star-empty'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<span class='glyphicon glyphicon-star-empty'></span>
											<a>{{ $product->total_reviews }}</a>
										</p>
									</div>
								@endif
								<a style='font-size: 13px;color: #2e77b6;'><b>{{ $product->department->name ?? null }}</b></a>
								<p><span style='font-size: 12px;'>$</span><span style='font-size: 24px;'>{{ $product->price }}</span></p>
								<p style='color: #B12704;'>Only {{ $product->stock }} left in stock (more on the way).</p>
							</div>										
						@endforeach
					</div>
					<div id='i28' class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<center>{!! $pagination !!}</center>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>