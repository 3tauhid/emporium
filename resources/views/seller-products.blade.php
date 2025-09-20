<x-app-layout seoTitle="Seller Products">
	<x-slot name='css'>
		<link href="{{ mix('/css/payment.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

    <div class="container area3">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b99">
			</br>
			@include('partials._profile-menu')
			
			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 b102">
				<h1>Products</h1>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b103">
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
						<button type='button' class='btn btn-primary b55' onclick="storeProduct('{{ route('products.store') }}')">Add Product</button>
					</div>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b116'>
						<p style='color: #B12704;font-size: 18px;'>Your Products</p>
					</div>
					@foreach ($products as $product)
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b116' style='border-top: 1px solid #aaa;'>
								<p><a href="{{ route('products.edit', $product->id) }}">{{ $product->name }}</a></p>
						</div>
					@endforeach
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b116'>
						@if (isset($otherProductSellers[0]->id))
							<p style='color: #B12704;font-size: 18px;'>Other's Products</p>
						@endif
					</div>
					@foreach ($otherProductSellers as $seller)
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b116' style='border-top: 1px solid #aaa;'>
								<p><a href='#' onclick="editProductSeller('{{ route('sellers.edit', $seller->id) }}')">{{ $seller->product->name }}</a></p>
						</div>
					@endforeach
				</div>
			</div>
		</div>
	</div>

	<x-slot name='scripts'>
        <script type="text/javascript" src="{{ mix('/js/product-edit.js')}}"></script>
    </x-slot>
</x-app-layout>