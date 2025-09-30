<x-app-layout seoTitle="Product Sellers">
	<x-slot name='css'>
		<link href="{{ mix('/css/product-sellers.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

    <div class="container area3">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b91">
			<div class='col-lg-2 col-md-2 col-sm-2 col-xs-2 b92'>
				<img src ="{{ $product->productImages->first()?->url ?? '/images/camera1.png' }}">
			</div>
			<div class='col-lg-10 col-md-10 col-sm-10 col-xs-10'>
				<div class='b93'>
					<p style='font-size: 20px;'>{{ $product->name }}</p>
					<p>by <a>{{ $product->brand->name }}</a></p>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b94'>
						@include('partials._rating-stars')
						<a>{{ $product->total_reviews }} ratings</a> <b style='color: #777'>|</b> <a>{{ $product->total_faqs }} answered questions</a>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b98">
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<div class="b95">
					<p><b>Price + Shipping</b></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<div class="b95">
					<p><b>shipping_location</b></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<div class="b95">
					<p><b>Seller Information</b></p>
				</div>
			</div>
			<div class="col-lg-3 col-md-3 col-sm-3 col-xs-3">
				<div class="b95">
					<p><b>Buying Options</b></p>
				</div>
			</div>
		</div>
		@foreach ($product->productSellers as $seller)
			<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b98'>
				<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
					<div class='b95'>
						<P style='color: #B12704;font-size: 17px;'>${{ $seller->price }}</p>
					</div>
				</div>
				<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
					<div class='b95'>
						<p>{{ $seller->shipping_location }}</p>
					</div>
				</div>
				<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
					<div class='b95'>
						<p><a style='font-size: 18px;'>{{ $seller->user->name }}</a></p>
					</div>
				</div>
				<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
					<div class='b95'>
						<ul class='nav nav-pills b96'>
							<li class='dropdown'>
								<a id='i9_{{ $seller->id }}' class='dropdown-toggle' data-toggle='dropdown' href='#'>Qty: 1
								<span class='caret'></span></a>
								<ul class='dropdown-menu' style='min-width: 65px;'>
								@if ($seller->stock>5)
									@for ($i=1; $i<6; $i++)
										<li><button type='button' class='btn btn-primary btn-lg btn-block a4' onclick="updateArgumentForStoringCartItemInSellersPage({{ $seller->id }}, {{ $i }}, '{{ route('cart-items.store') }}')">{{ $i }}</button></li>
									@endfor
								@else
									@for ($i=1; $i < $seller->stock + 1; $i++)
										<li><button type='button' class='btn btn-primary btn-lg btn-block a4' onclick="updateArgumentForStoringCartItemInSellersPage({{ $seller->id }}, {{ $i }}, '{{ route('cart-items.store') }}')">{{ $i }}</button></li>
									@endfor
								@endif
								</ul>
							</li>
						</ul>
						<div id='i8_{{ $seller->id }}'>
							<button type='button' class='btn btn-primary b97' onclick="storeCartItem({{ $seller->id }}, 1, '{{ route('cart-items.store') }}')">Add to Cart</button>
						</div>
					</div>
				</div>
			</div>
		@endforeach
	</div>

	<x-slot name='scripts'>
		<script type="text/javascript" src="{{ mix('/js/cart.js')}}"></script>
    </x-slot>
</x-app-layout>