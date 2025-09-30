@php
	$seoKeywords = '';
	for ($i=0; $i<count($parentDepartmentNames) ; $i++) {
		$seoKeywords .= $parentDepartmentNames[$i];
		if ($i<count($parentDepartmentNames)-1) {
			$seoKeywords .= ", ";
		}
	}
@endphp

<x-app-layout seoTitle="{{ $product->name }}" seoDescription="{{ $product->description }}" seoImage="{{ $product->productImages->first()?->url ?? '/images/camera1.png' }}" seoKeywords="{{ $seoKeywords }}">
	<x-slot name='css'>
		<link href="{{ mix('/css/product-details.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

	<div class="container area3">
		<p class='b39'>
			@php
				for ($i=0; $i<count($parentDepartmentNames) ; $i++) {
					echo "<a class='b40'>".$parentDepartmentNames[$i]."</a>";
					if ($i<count($parentDepartmentNames)-1) {
						echo " > ";
					}
				}
			@endphp
		</p>
		
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b41">
			<div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 b45">
				@foreach ($product->productImages as $element1)
					<div id='i3_{{ $element1->id }}' class='b42'>
						<img src ="{{ $element1?->url ?? '/images/camera1.png' }}" onmouseover="showProductImage('{{ route('show_product_image', $element1->id) }}')">
					</div>
				@endforeach
			</div>
			<div class="col-lg-11 col-md-11 col-sm-11 col-xs-11">
				<div id='i4' class='col-lg-4 col-md-12 col-sm-12 col-xs-12'>
					@if ($product->productImages->first()?->isWideImage())
						<center><img style='width: 100%;' src="{{ $product->productImages->first()?->url ?? '/images/camera1.png' }}"></center>
					@else
						<center><img style='height: 300px; margin: 50px;' src="{{ $product->productImages->first()?->url ?? '/images/camera1.png' }}"></center>
					@endif
				</div>
				<div class='col-lg-4 col-md-9 col-sm-8 col-xs-12'>
					<p style='font-size: 20px;'>{{ $product->name }}</p>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b52'>
						<p>by <a>{{ $product->brand->name ?? null }}</a></p>
					</div>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b51'>
						<p>
							@include('partials._rating-stars')
							<a>{{ $product->total_reviews }} ratings</a> <b style='color: #777'>|</b> <a>{{ $product->total_faqs }} answered questions</a>
						</p>
					</div>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
						<p style='color: green; margin-top: 10px; font-size: 16px;'>Available from <a href="{{ route('products.sellers.index', $product->id) }}">these sellers.</a></p>
					</div>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b53'>
						<p style='color: #777; margin-top: 2px; margin-right: 5px;'>Price: </p>
						<P style='color: #B12704;font-size: 17px;'>${{ $product->price }}</p>
					</div>
					
					
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
						<ul style="margin-left: -25px;">
							@foreach ($product->productSummaries as $productSummary)
								<li>{{ $productSummary->description }}</li>
							@endforeach
						</ul>
					</div>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b52'>
						<p><a href='#i6'>See more product details</a></p>
						<p><a href='#i7'>Compare with similar items</a></p>
					</div>
				</div>
				<div class="col-lg-1 col-md-0 col-sm-0 col-xs-0">
				</div>
				<div class="col-lg-2 col-md-3 col-sm-4 col-xs-12">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<div class="b47">
							<p style='color: Green; font-size: 18px;'>In Stock</p>
							<ul class='nav nav-pills b54'>
								<li class='dropdown'>
									<a id='i11' class='dropdown-toggle' data-toggle='dropdown' href='#'>Qty: 1
										<span class='caret'></span></a>
										<ul class='dropdown-menu' style='min-width: 65px;'>
											@if ($product->stock > 5)
												@for ($i=1; $i<6; $i++)
													<li><button type='button' class='btn btn-primary btn-lg btn-block a4' onclick="updateArgumentForStoringCartItemInProductPage({{ $product->mainSellerInventory->id }}, {{ $i }}, '{{ route('cart-items.store') }}', '{{ route('orders.store') }}')">{{ $i }}</button></li>
												@endfor
											@else
												@for ($i=1; $i<$product->stock+1; $i++)
													<li><button type='button' class='btn btn-primary btn-lg btn-block a4' onclick="updateArgumentForStoringCartItemInProductPage({{ $product->mainSellerInventory->id }}, {{ $i }}, '{{ route('cart-items.store') }}', '{{ route('orders.store') }}')">{{ $i }}</button></li>
												@endfor
											@endif
										</ul>
								</li>
							</ul>
							
							<div id='i10'>
								<button type='button' class='btn btn-primary b55' onclick="storeCartItem({{ $product->mainSellerInventory->id }}, 1, '{{ route('cart-items.store') }}')">Add to Cart</button>
							</div>
							<div id='i12'>
								<button type='button' class='btn btn-primary b56' onclick="storeOrder({{ $product->id }}, 1, '{{ route('orders.store') }}')">Buy Now</button>
							</div>
							<div>
								<button type='button' class='btn btn-primary b57' onclick="createProductSeller('{{ route('products.sellers.create', $product->id) }}')">Sell on Emporium</button>
							</div>
						</div>
					</div>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b58'>
						<p><a>Share</a></p>
						<img src ="/images/p50.png" style="margin-left: 10px; margin-right: 7px;">
						<img src ="/images/p51.png" style="margin-top: 14px;">
						<img src ="/images/p52.png">
						<img src ="/images/p53.png">
					</div>
				</div>
			</div>
		</div>
		@if (isset($product->productManufacturerImages[0]->id))
			<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
				<div class='b59'>
					<p style="font-size: 20px;color: #C60; margin-top: 15px;">From the manufacturer</p>
					@foreach ($product->productManufacturerImages as $image)
						<div class='b62'>
							<img src ='{{ $image?->url ?? '/images/camera1.png' }} '>
						</div>
					@endforeach
				</div>
			</div>
		@endif
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
			<div id='i6' class='b59'>
				<p style="font-size: 20px;color: #C60; margin-top: 15px;">Product description</p>
				<p style='margin-left: 30px;margin-right: 30px;text-align: justify; font-size: 13px;'>{{ $product->description }}</p>
				<p style="margin-left: 30px;margin-right: 30px;text-align: justify; font-size: 13px;"></p>
			</div>
		</div>
		<div class='col-lg-12 col-md-12 hidden-sm hidden-xs'>
			<div id='i7' class='b59'>
				<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
					<p style="font-size: 20px;color: #C60; margin-top: 15px;">Compare with similar items</p>
				</div>
				<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b69'>
					<div class='b63'>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b73'>
							<p>Customer Rating</p>
						</div>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72'>
							<P style="font-size: 17px;">Price</p>
						</div>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72'>
							<P>Seller</p>
						</div>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72'>
							<P>Brand Name</p>
						</div>
						@isset($product->department->comparingFeatures)
							@foreach ($product->department->comparingFeatures as $element)
								<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72'>
									<P>{{ $element->name }}</p>
								</div>
							@endforeach
						@endisset
					</div>
					<div class='b64'>
						<div class='b68'>
							<img src ="{{ $product->productImages->first()?->url ?? '/images/camera1.png' }}">
						</div>
						<div class='b70'>
							<p><b>This Item </b>{{ $product->name }}</p>
						</div>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b71 b74'>
							<div class='b50'>
								<p>
									@include('partials._rating-stars')
									<a>({{ $product->total_reviews }})</a>
								</p>
							</div>
						</div>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72 b74'>
							<P style='color: #B12704;font-size: 17px;'>${{ $product->price }}</p>
						</div>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72 b74'>
							<P>{{ $product->user->name }}</p>
						</div>
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72 b74'>
							<P>{{ $product->brand->name ?? null }}</p>
						</div>
						@foreach ($product->comparingValues as $element)
							<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72 b74'>
								<P>{{ $element->value }}</p>
							</div>
						@endforeach
					</div>
					<div id='i19' class='b65'>
						{{-- compare compare 1 --}}
						<x-comparing-product :product-id="$product->comparingProducts[0]->product_id" :main-product-id="$product->id" :comparing-slot="1" page="details" />
					</div>
					<div id='i20' class='b66'>
						{{-- compare compare 2 --}}
						<x-comparing-product :product-id="$product->comparingProducts[1]->product_id" :main-product-id="$product->id" :comparing-slot="2" page="details" />
					</div>
					<div id='i21' class='b67'>
						{{-- compare compare 3 --}}
						<center><button type='button' class='btn btn-primary b78' onclick="getComparingProducts('{{ route('main-products.comparing-slots.pages.products.index', ['main_product' => $product->id, 'comparing_slot' => 3, 'page' => 'details']) }}', 3)"><span class='glyphicon glyphicon-plus-sign'></span> Add Item</button></center>
					</div>
					
				</div>
			</div>
		</div>
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
			<div class='b59'>
				<p style="font-size: 20px; margin-top: 15px;">Customer FAQ & answers</p>
				<input id='i22' type='text' class='form-control b79' placeholder='Have a question? Search for answers' aria-describedby='basic-addon1' onkeyup="searchProductFaq('{{ route('products.faqs.index', $product->id) }}')">

				<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
					<div id='i23' class='b80'>
						@include('partials._product-faq-items', ['productFaqs' => $product->productFaqs])
					</div>
				</div>
			</div>
		</div>
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
			<div class='b59'>
				<p style="font-size: 20px; margin-top: 15px;">Customer reviews</p>
				<div class='col-lg-4 col-md-4 col-sm-4 col-xs-12'>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b84'>
						<div class='b50'>
							<p>
								@include('partials._rating-stars')
								<b style='color: black;'>{{ $product->average_rating }} out of 5</b>
							</p>
						</div>
					</div>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
						<p style='color: #777;'>{{ $product->total_reviews }} customer ratings</p>
					</div>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
						<x-product-rating-percentage :product-id="$product->id" :total-rating="$product->total_reviews" :star="5" />
						<x-product-rating-percentage :product-id="$product->id" :total-rating="$product->total_reviews" :star="4" />
						<x-product-rating-percentage :product-id="$product->id" :total-rating="$product->total_reviews" :star="3" />
						<x-product-rating-percentage :product-id="$product->id" :total-rating="$product->total_reviews" :star="2" />
						<x-product-rating-percentage :product-id="$product->id" :total-rating="$product->total_reviews" :star="1" />
					</div>
				</div>
				<div class='col-lg-8 col-md-8 col-sm-8 col-xs-12 b85'>
					<p style="font-size: 20px;">Review this product</p>
					<p>Share your thoughts with other customers</p>
					<form action="{{ route('products.reviews.store', $product->id) }}" method='post'>
						@csrf

						<div id='i24' class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b84'>
							<p>
								<span class='review-input-star glyphicon glyphicon-star-empty' onclick='setRating(1)'></span>
								<span class='review-input-star glyphicon glyphicon-star-empty' onclick='setRating(2)'></span>
								<span class='review-input-star glyphicon glyphicon-star-empty' onclick='setRating(3)'></span>
								<span class='review-input-star glyphicon glyphicon-star-empty' onclick='setRating(4)'></span>
								<span class='review-input-star glyphicon glyphicon-star-empty' onclick='setRating(5)'></span>
								<input type='hidden' name='rating' value='0'>
							</p>
						</div>
						<textarea name='description' class="form-control" placeholder="Write Review*" aria-label="" style="height: 100px;width: 100%;"></textarea>
						<center><button type="submit" class="btn btn-primary b57" onclick="">Post</button></center>
					</form>
				</div>
				<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b86'>
					<p><b>{{ $product->total_reviews }} customer reviews</b></p>
					<ul class='nav nav-pills b54'>
						<li class='dropdown'>
							<a id='i33' class='dropdown-toggle' data-toggle='dropdown' href='#'>Best Reviews
							<span class='caret'></span></a>
							<ul class='dropdown-menu' style='min-width: 65px;'>
								<li><button type='button' class='btn btn-primary btn-lg btn-block a4' onclick="getSortedProductReviews('Best', '{{ route('products.reviews.index', $product->id) }}')">Best Reviews</button></li>
								<li><button type='button' class='btn btn-primary btn-lg btn-block a4' onclick="getSortedProductReviews('Worst', '{{ route('products.reviews.index', $product->id) }}')">Worst Reviews</button></li>
							</ul>
						</li>
					</ul>
				</div>
				<div id='i32'>
					@include('partials._product-reviews', ['productReviews' => $product->productReviews])
				</div>
			</div>
		</div>
	</div>

	<x-slot name='scripts'>
		<script type="text/javascript" src="{{ mix('/js/cart.js')}}"></script>
		<script type="text/javascript" src="{{ mix('/js/product-details.js')}}"></script>
		<script type="text/javascript" src="{{ mix('/js/product-comparing.js')}}"></script>
    </x-slot>
</x-app-layout>