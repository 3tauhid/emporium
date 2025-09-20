@isset($product->id)
	<div class='b68'>
		<img src ="{{ $product->product_images->first()?->url() ?? '/images/camera1.png' }}">
	</div>
	<div class='b70'>
		<p><a href="{{ route('products.show', $product->id) }}">{{ $product->name }}</a></p>
	</div>
	<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b71'>
		<div class='b50'>
			<p>
				@include('partials._rating-stars')
				<a>({{ $product->total_reviews }})</a>
			</p>
		</div>
	</div>
	<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72'>
		<P style='color: #B12704;font-size: 17px;'>${{ $product->price }}</p>
	</div>
	<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72'>
		<P>{{ $product->user->name }}</p>
	</div>
	<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72'>
		<P>{{ $product->brand->name }}</p>
	</div>
	@foreach ($product->comparing_values as $element)
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72'>
			<P>{{ $element->value }}</p>
		</div>
	@endforeach
	
	@if ($comparingSlot == 3)
		<center><button type='button' class='btn btn-danger' onclick="insertAddItemButton('i21', {{ $comparingSlot }}, '{{ route('main-products.comparing-slots.pages.products.index', ['main_product' => $mainProduct->id, 'comparing_slot' => $comparingSlot, 'page' => $page]) }}')">Delete</button></center>
	@else
		<center><button type='button' class='btn btn-danger' onclick="destroyComparingProduct({{ $comparingSlot }}, '{{ $page }}', '{{ route('compaing-products.destroy', $mainProduct->comparing_products[0]->id) }}', '{{ route('main-products.comparing-slots.pages.products.index', ['main_product' => $mainProduct->id, 'comparing_slot' => $comparingSlot, 'page' => $page]) }}')">Delete</button></center>
	@endif
@endisset
@empty($product->id)
	<center><button type='button' class='btn btn-primary b78' onclick="getComparingProducts('{{ route('main-products.comparing-slots.pages.products.index', ['main_product' => $mainProduct->id, 'comparing_slot' => $comparingSlot, 'page' => $page]) }}', {{ $comparingSlot }})"><span class='glyphicon glyphicon-plus-sign'></span> Add Item</button></center>
@endempty