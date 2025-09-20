<x-app-layout seoTitle="Homepage">
	<x-slot name='css'>
        <link href="{{ mix('/css/homepage.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

    <div class="container area4" style="background-image:url(/images/background-bags-bows-1050244.jpg); background-repeat: no-repeat; background-size: 100%; background-position: center;">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b1">
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
				<div class='b2'>
					<h1><b>Shop by Category</b></h1>
					<center>
						<div style="max-width: 300px;">
							<img src ="/images/p1.jpg" alt="Shop by Category">
							<div class='b3' style="text-align-last: left;"><a href="{{ route('products.index') }}">Shop now</a></div>
						</div>
					</center>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
				<div class='b2'>
					<h1><b>Like-new Cellphones</b></h1>
					<center>
						<div style="max-width: 300px;">
							<img src ="/images/p2.jpg" alt="Cellphones">
							<p style="text-align-last: left;">Find your new cellphone</p>
							<div class='b4' style="text-align-last: left;"><a href="#">See more</a></div>
						</div>
					</center>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
				<div class='b2'>
					<h1><b>Renewed computers</b></h1>
					<center>
						<div style="max-width: 300px;">
							<img src ="/images/p3.jpg" alt="Renewed computers">
							<p style="text-align-last: left;">Discover like-new laptops and desktops.</p>
							<div class='b4' style="text-align-last: left;"><a href="#">See more</a></div>
						</div>
					</center>
				</div>
			</div>
			<div class="col-lg-3 col-md-12 col-sm-12 col-xs-12">
				<div class='b2'>
					<h1><b>Sign in for the best experience</b></h1>
					<div class='b5'>
						<center>
							<div style="max-width: 300px;">
								<a type="button" class="btn btn-primary b6" href="{{ route('signin') }}">Sign in securely</a>
							</div>
						</center>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container area3"> 
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class='b7'>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p class='b8'>Discover Emporium</p>
					<a style='float: left;margin-top: 28px;margin-left: 15px;' href="#">Click to learn more</a>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class='b9' onclick='scrollLeft200(13)'>
						<span class="glyphicon glyphicon-chevron-left b12"></span>
					</div>
					<div class='b10' id='i13' onmouseover='showScroll(13)' onmouseout='hideScroll(13)' style='overflow: hidden;'>
						<img src ="/images/p4.jpg" style='height: 200px;padding-left: 4px;padding-right: 4px;'>
						<img src ="/images/p5.jpg" style='height: 200px;padding-left: 4px;padding-right: 4px;'>
						<img src ="/images/p6.jpg" style='height: 200px;padding-left: 4px;padding-right: 4px;'>
						<img src ="/images/p7.jpg" style='height: 200px;padding-left: 4px;padding-right: 4px;'>
						<img src ="/images/p8.jpg" style='height: 200px;padding-left: 4px;padding-right: 4px;'>
						<img src ="/images/p9.jpg" style='height: 200px;padding-left: 4px;padding-right: 4px;'>
						<img src ="/images/p10.jpg" style='height: 200px;padding-left: 4px;padding-right: 4px;'>
					</div>
					<div class='b11' onclick='scrollRight200(13)'>
						<span class="glyphicon glyphicon-chevron-right b12"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class='b7'>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p class='b8'>Trending in Video Games</p>
					<a style='float: left;margin-top: 28px;margin-left: 15px;' href="{{ route('products.index') }}">Shop now</a>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class='b9' onclick='scrollLeft200(14)'>
						<span class="glyphicon glyphicon-chevron-left b12"></span>
					</div>
					<div class='b10' id='i14' onmouseover='showScroll(14)' onmouseout='hideScroll(14)' style='overflow: hidden;'>
						@foreach ($gamingProducts as $product)
							<a href="{{ route('products.show', $product->id) }}"><img src ="{{ $product->product_images->first()?->url() ?? '/images/camera1.png' }}" style='height: 200px;padding-left: 4px;padding-right: 4px;'></a>
						@endforeach
					</div>
					<div class='b11' onclick='scrollRight200(14)'>
						<span class="glyphicon glyphicon-chevron-right b12"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class='b7'>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p class='b8'>Must have Wireless products</p>
					<a style='float: left;margin-top: 28px;margin-left: 15px;' href="{{ route('products.index') }}">Shop now</a>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class='b9' onclick='scrollLeft200(15)'>
						<span class="glyphicon glyphicon-chevron-left b12"></span>
					</div>
					<div class='b10' id='i15' onmouseover='showScroll(15)' onmouseout='hideScroll(15)' style='overflow: hidden;'>
						@foreach ($watchProducts as $product)
							<a href="{{ route('products.show', $product->id) }}"><img src ="{{ $product->product_images->first()?->url() ?? '/images/camera1.png' }}" style='height: 200px;padding-left: 4px;padding-right: 4px;'></a>
						@endforeach
					</div>
					<div class='b11' onclick='scrollRight200(15)'>
						<span class="glyphicon glyphicon-chevron-right b12"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class='b7'>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p class='b8'>Emporium Top Sellers</p>
					<a style='float: left;margin-top: 28px;margin-left: 15px;' href="{{ route('products.index') }}">Shop now</a>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class='b9' onclick='scrollLeft200(16)'>
						<span class="glyphicon glyphicon-chevron-left b12"></span>
					</div>
					<div class='b10' id='i16' onmouseover='showScroll(16)' onmouseout='hideScroll(16)' style='overflow: hidden;'>
						@foreach ($topTotalRatedProducts as $product)
							<a href="{{ route('products.show', $product->id) }}"><img src ="{{ $product->product_images->first()?->url() ?? '/images/camera1.png' }}" style='height: 200px;padding-left: 4px;padding-right: 4px;'></a>
						@endforeach
					</div>
					<div class='b11' onclick='scrollRight200(16)'>
						<span class="glyphicon glyphicon-chevron-right b12"></span>
					</div>
				</div>
			</div>
		</div>
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<div class='b7'>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<p class='b8'>Best Sellers in Home & Kitchen</p>
					<a style='float: left;margin-top: 28px;margin-left: 15px;' href="{{ route('products.index') }}">Shop now</a>
				</div>
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
					<div class='b9' onclick='scrollLeft200(17)'>
						<span class="glyphicon glyphicon-chevron-left b12"></span>
					</div>
					<div class='b10' id='i17' onmouseover='showScroll(17)' onmouseout='hideScroll(17)' style='overflow: hidden;'>
						@foreach ($kitchenProducts as $product)
							<a href="{{ route('products.show', $product->id) }}"><img src ="{{ $product->product_images->first()?->url() ?? '/images/camera1.png' }}" style='height: 200px;padding-left: 4px;padding-right: 4px;'></a>
						@endforeach
					</div>
					<div class='b11' onclick='scrollRight200(17)'>
						<span class="glyphicon glyphicon-chevron-right b12"></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>