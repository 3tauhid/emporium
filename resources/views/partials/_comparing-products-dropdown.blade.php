<ul class='nav nav-pills b54' style='margin-top: 100px; margin-left: 10px;'>
	<li class='dropdown'>
		<a id='i11' class='dropdown-toggle' data-toggle='dropdown' href='#'>Products
		<span class='caret'></span></a>
		<ul class='dropdown-menu' style='min-width: 65px;'>
			@php
				$stripe = 0;
			@endphp
			@foreach ($products as $product)
				@php
					if ($stripe == 0) {
						$background = '#dae4ea;';
						$stripe = 1;
					} else {
						$background = '#fff;';
						$stripe = 0;
					}
				@endphp

				@if ($page == 'edit')
					<div class='b118' style="background: {{ $background }}"><li style='width: 250px;padding: 10px;' onclick="updateComparingProduct('{{ route('compaing-products.update', $mainProduct->comparingProducts[0]->id) }}', {{ $product->id }}, '{{ route('main-products.comparing-slots.pages.products.show', ['main_product' => $mainProduct->id, 'comparing_slot' => $comparingSlot, 'page' => $page, 'product' => $product->id]) }}', {{ $comparingSlot }})">{{ $product->name }}</li></div>
				@else
					<div class='b118' style="background: {{ $background }}"><li style='width: 250px;padding: 10px;' onclick="showComparingProduct('{{ route('main-products.comparing-slots.pages.products.show', ['main_product' => $mainProduct->id, 'comparing_slot' => $comparingSlot, 'page' => $page, 'product' => $product->id]) }}', {{ $comparingSlot }})">{{ $product->name }}</li></div>
				@endif
			@endforeach
		</ul>
	</li>
</ul>