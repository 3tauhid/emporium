<x-app-layout seoTitle="Cart">
	<x-slot name='css'>
		<link href="{{ mix('/css/cart.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

    <div class="container area3">
		<div class='col-lg-9 col-md-9 col-sm-9 col-xs-9'>
			<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b91'>
				<div class='col-lg-9 col-md-9 col-sm-9 col-xs-9'>
					<p style='font-size: 20px;margin-bottom: 10px;'><b>Shopping Cart</b></p>
				</div>
				<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
					<P style='color: #777;float: right;margin-top: 10px;margin-right: 15px;'>Price</p>
				</div>
			</div>
			@php
				$total_price=0;
				$total_items=0;
			@endphp
			@foreach ($cartItems as $cartItem)
				<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b98'>
					<div class='col-lg-9 col-md-9 col-sm-9 col-xs-9'>
						<div class='col-lg-2 col-md-2 col-sm-2 col-xs-2 b92'>
							<img src ="{{ $cartItem->productSeller->product->productImages->first()?->url ?? '/images/camera1.png' }}">
						</div>
						<div class='col-lg-10 col-md-10 col-sm-10 col-xs-10'>
							<div class='b93'>
								<p style='font-size: 20px;'>{{ $cartItem->productSeller->product->name }}</p>
								<p><b>Seller: </b><a>{{ $cartItem->productSeller->user->name }}</a></p>
								<p><b>Shipped from: </b>{{ $cartItem->productSeller->shipping_location }}</p>
								<p><b>Qty: </b>{{ $cartItem->quantity }}</p>
								<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
									<p style='float: left; font-size: 12px;margin-right: 10px;margin-top: 5px;border-left: 1px solid #ccc;border-right: 1px solid #ccc;padding-left: 10px;padding-right: 10px;'><a href='#' onclick="destroyFromCart('{{ route('cart-items.destroy', $cartItem->id) }}')">Delete</a></p>
								</div>
							</div>
						</div>
					</div>
					<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
						<P style='color: #B12704;font-size: 17px;float: right;'><b>${{ $cartItem->productSeller->price * $cartItem->quantity }}</b></p>
					</div>
				</div>
				@php
					$total_price = $total_price + $cartItem->productSeller->price * $cartItem->quantity;
					$total_items = $total_items + 1;
				@endphp		
			@endforeach
			<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b98'>
				<P style='font-size: 17px;float: right;'>Subtotal ({{ $total_items }} items): <b style='color: #B12704;'>${{ $total_price }}</b></p>
			</div>
		</div>
		<div class='col-lg-3 col-md-3 col-sm-3 col-xs-3'>
			<div class='b47'>
				<P style='font-size: 17px;'>Subtotal ({{ $total_items }} items): <b style='color: #B12704;'>${{ $total_price }}</b></p>
				<button type='button' class='btn btn-primary b56' onclick="storeFromCart('{{ route('store_from_cart') }}')">Confirm Purchase</button>
			</div>
		</div>
	</div>

	<x-slot name='scripts'>
		<script type="text/javascript" src="{{ mix('/js/cart.js')}}"></script>
    </x-slot>
</x-app-layout>