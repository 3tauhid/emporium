<x-app-layout seoTitle="{{ $product->name }}" seoDescription="{{ $product->description }}">
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
				@foreach ($product->productImages as $image)
					<div id='i3_{{ $image->id }}' class='b42'>
						<img src ="{{ $image?->url ?? '/images/camera1.png' }}" onclick="destroyProductImage('{{ route('product-images.destroy', $image->id) }}')" onmouseover="showProductImage('{{ route('show_product_image', $image->id) }}')">
					</div>
				@endforeach
				<center><button type='button' class='btn btn-info' onclick="createProductImage({{ $product->id }}, '{{ route('product-images.store') }}')">Add</button></center>
			</div>
			<div class="col-lg-11 col-md-11 col-sm-11 col-xs-11 b48">
				<div id='i4' class='col-lg-4 col-md-12 col-sm-12 col-xs-12'>
					@if ($product->productImages->first()?->isWideImage())
						<center><img style='width: 100%;' src="{{ $product->productImages->first()?->url ?? '/images/camera1.png' }}"></center>
					@else
						<center><img style='height: 300px; margin: 50px;' src="{{ $product->productImages->first()?->url ?? '/images/camera1.png' }}"></center>
					@endif
				</div>
				<div class='col-lg-4 col-md-9 col-sm-8 col-xs-12'>
					<form action="{{ route('update_product_name') }}" method='post'>
						@csrf
						@method('PUT')

						<input type="hidden" name="product_id" value="{{ $product->id }}">
						<textarea name='name' class='form-control' placeholder='Product Name' style='height: 100px;width: 100%;'>{{ $product->name }}</textarea>
						<center><button type='submit' class='btn btn-success' style='margin: 10px;'>Save Name</button></center>
					</form>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b52'>
						@if (isset($product->brand->name))
							<p>by <a>{{ $product->brand->name }}</a></p>
						@endif

						<div id='i18'>
							<p style='float: right;' onclick="updateProductWithNewBrand({{ $product->id }}, '{{ route('update_product_with_new_brand') }}')"><a href='#'>New Brand?</a></p>
							<ul class='nav nav-pills b54'>
								<li class='dropdown'>
									<a id='i11' class='dropdown-toggle' data-toggle='dropdown' href='#'>Brand
										<span class='caret'></span></a>
									<ul class='dropdown-menu' style='min-width: 65px;'>
										@foreach ($brands as $brand)
											<li><button type='button' class='btn btn-primary btn-lg btn-block a4' onclick="updateProductBrand({{ $product->id }}, {{ $brand->id }}, '{{ route('update_product_brand') }}')">{{ $brand->name }}</button></li>
										@endforeach
									</ul>
								</li>
							</ul>
						</div>
					</div>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b51'>
						<p>
							@include('partials._rating-stars')
							<a>{{ $product->total_reviews }} ratings</a> <b style='color: #777'>|</b> <a>{{ $product->total_faqs }} answered questions</a>
						</p>
					</div>
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b53'>
						<p style='color: #777; margin-top: 2px; margin-right: 5px;'>Price: </p>
						<P style='color: #B12704;font-size: 17px;'>${{ $product->price }}</p>
					</div>
					
					
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
						<ul style="margin-left: -25px;">
							@foreach ($product->productSummaries as $productSummary)
								<form action="{{ route('summaries.update', $productSummary->id) }}" method='post'>
									@csrf
									@method('PUT')

									<input type="hidden" name="product_id" value="{{ $product->id }}">
									<textarea name='description' class='form-control' placeholder='Summary' style='height: 100px;width: 100%;'>{{ $productSummary->description }}</textarea>
									<center>
										<button type='submit' class='btn btn-success' style='margin: 10px;'>Save</button>
										<button type='button' class='btn btn-danger' style='margin: 10px;' onclick="destroyProductSummary('{{ route('summaries.destroy', $productSummary->id) }}')">Delete</button>
									</center>
								</form>
							@endforeach
							<center><button type='button' class='btn btn-info' onclick="storeProductSummary('{{ route('products.summaries.store', $product->id) }}')" style='margin: 10px;'>Add</button></center>
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
					<div class="b47">
						<a type='button' class='btn btn-primary b55' style='margin: 10px;' href="{{ route('products.show', $product->id) }}">Preview</a>
						<ul class='nav nav-pills b54' style="margin-top: 10px;">
							<li class='dropdown'>
								<a id='i11' class='dropdown-toggle' data-toggle='dropdown' href='#'>Departments
									<span class='caret'></span></a>
								<ul class='dropdown-menu' style='min-width: 65px;'>
									@foreach ($departments as $department)
										<li><button type='button' class='btn btn-primary btn-lg btn-block a4' onclick="updateProductDepartment({{ $product->id }}, {{ $department->id }}, '{{ route('update_product_department') }}')">{{ $department->name }}</button></li>
									@endforeach
								</ul>
							</li>
						</ul>
						<form action="{{ route('update_auth_product_seller') }}" method='post'>
							@csrf
							@method('PUT')
							
							<input type="hidden" name="product_id" value="{{ $product->id }}">
							<p style='margin-top: 10px;'>Stock:</p>
							<input type='text' name='stock' class='form-control b79' placeholder='Stock Number' aria-describedby='basic-addon1' value='{{ $productSeller->stock }}' style='width: 100%;float: none;'>
							<p style='margin-top: 10px;'>Price:</p>
							<input type='text' name='price' class='form-control b79' placeholder='Price' aria-describedby='basic-addon1' value='{{ $productSeller->price }}' style='width: 100%;float: none;'>
							<p style='margin-top: 10px;'>Shipped from:</p>
							<input type='text' name='shipping_location' class='form-control b79' placeholder='Shipping Location' aria-describedby='basic-addon1' value='{{ $productSeller->shipping_location }}' style='width: 100%;float: none;'>
							<center><button type='submit' class='btn btn-success' style='margin: 10px;'>Save</button></center>
						</form>
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
							<img src ='{{ $image?->url ?? '/images/camera1.png' }}'>
						</div>
						<center><button type='button' class='btn btn-danger' style='margin: 10px;' onclick="destroyProductManufacturerImage('{{ route('product-manufacturer-images.destroy', $image->id) }}')">Delete</button></center>
					@endforeach
					<center><button type='button' class='btn btn-info' style='margin: 10px;' onclick="createProductManufacturerImage({{ $product->id }}, '{{ route('product-manufacturer-images.store') }}')">Add</button></center>
				</div>
			</div>
		@else
			<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
				<div class='b59'>
					<p style="font-size: 20px;color: #C60; margin-top: 15px;">From the manufacturer</p>
					<center><button type='button' class='btn btn-info' style='margin: 10px;' onclick="createProductManufacturerImage({{ $product->id }}, '{{ route('product-manufacturer-images.store') }}')">Add</button></center>
				</div>
			</div>
		@endif
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
			<div id='i6' class='b59'>
				<p style="font-size: 20px;color: #C60; margin-top: 15px;">Product description</p>
				<form action="{{ route('update_product_description') }}" method='post'>
					@csrf
					@method('PUT')

					<input type="hidden" name="product_id" value="{{ $product->id }}">
					<textarea name='description' class='form-control' placeholder='Product description' style='height: 200px;width: 100%;'>{{ $product->description }}</textarea>
					<center><button type='submit' class='btn btn-success' style='margin: 10px;'>Save</button></center>
				</form>
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
						@foreach ($product->comparingFeatures as $element)
							<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72'>
								<P>{{ $element->name }}</p>
							</div>
						@endforeach
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
							@if (isset($db_value8[0]->name))
								<P>{{ $db_value8[0]->name }}</p>
							@endif
						</div>
						<form action="{{ route('comparing-values.update', $product->id) }}" method='POST'>
							@csrf
							@method('PUT')

							@foreach ($product->comparingValues as $element)
								<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b72 b74'>
									<input type='text' name='values[{{ $element->id }}]' class='form-control b79' aria-describedby='basic-addon1' value='{{ $element->value }}' style='width: 100%;float: none;height: 30px;'>
								</div>
							@endforeach
							<center><button type='submit' class='btn btn-success' style='margin: 10px;'>Save</button></center>
						</form>
					</div>
					<div id='i19' class='b65'>
						{{-- compare compare 1 --}}
						<x-comparing-product :main-product-id="$product->id" :comparing-slot="1" page="edit" :product-id="$product->comparingProducts[0]->product_id" />
					</div>
					<div id='i20' class='b66'>
						{{-- compare compare 2 --}}
						<x-comparing-product :main-product-id="$product->id" :comparing-slot="2" page="edit" :product-id="$product->comparingProducts[1]->product_id" />
					</div>
				</div>
			</div>
		</div>
		<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
			<div class='b59'>
				<p style="font-size: 20px; margin-top: 15px;">Customer FAQ & answers</p>

				<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
					<div id='i23' class='b80'>
						@foreach ($product->productFaqs as $faq)
							<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b83'>
								<div class='col-lg-8 col-md-8 col-sm-8 col-xs-8 b82'>
									<p><b>Qustion: {{ $faq->question }}</b></p>
									<p><b>Answer: </b>{{ $faq->answer }}</p>
									<center><button type='button' class='btn btn-danger' style='margin: 10px;' onclick="destroyProductFaq('{{ route('faqs.destroy', $faq->id) }}')">Delete</button></center>
								</div>
							</div>
						@endforeach
						<div id='i26' class='col-lg-12 col-md-12 col-sm-12 col-xs-12 b83'>
							<div class='col-lg-8 col-md-8 col-sm-8 col-xs-8 b82'>
								<form action="{{ route('products.faqs.store', $product->id) }}" method='post'>
									@csrf
									<input type="hidden" name="product_id" value="{{ $product->id }}">
									<textarea name='question' class='form-control' placeholder='Question' style='height: 100px;width: 100%;'></textarea>
									<textarea name='answer' class='form-control' placeholder='Answer' style='height: 100px;width: 100%;'></textarea>
									<p><b></p>
									<center><button type='submit' class='btn btn-success' style='margin: 10px;'>Save</button></center>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<x-slot name='scripts'>
		<script type="text/javascript" src="{{ mix('/js/product-details.js')}}"></script>
		<script type="text/javascript" src="{{ mix('/js/product-edit.js')}}"></script>
		<script type="text/javascript" src="{{ mix('/js/product-comparing.js')}}"></script>
    </x-slot>
</x-app-layout>