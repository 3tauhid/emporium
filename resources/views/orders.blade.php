<x-app-layout seoTitle="Orders">
	<x-slot name='css'>
		<link href="{{ mix('/css/payment.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

    <div class="container area3">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b99">
			</br>
			
			@include('partials._profile-menu')

			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 b102">
				<h1>Orders</h1>
				
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b103">
					<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12'>
						<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 b116'>
							<div>
								<p>Date</p>
							</div>
						</div>
						<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 b116'>
							<p>Name</p>
						</div>
						<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 b116'>
							<p>Status</p>
						</div>
					</div>
					@foreach ($orders as $order)
						<div class='col-lg-12 col-md-12 col-sm-12 col-xs-12' style='border-top: 1px solid #aaa;'>
							<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 b116'>
								<p>{{ $order->created_at }}</p>
							</div>
							<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 b116'>
								<p><a href=''>{{ $order->name }}</a></p>
								<p>No: <a href=''>{{ $order->id }}</a></p>
							</div>
							@if ($order->status=='Processing')
								<div id='i2_{{ $order->id }}' class='col-lg-4 col-md-4 col-sm-12 col-xs-12 b116'>
									<button type='button' class='btn btn-danger' style='margin: 10px;' onclick="cancelOrder({{ $order->id }}, '{{ route('cancel_order') }}')">Cancel</button>
								</div>
							@else
								<div class='col-lg-4 col-md-4 col-sm-12 col-xs-12 b116'>
									<p>{{ $order->status }}</p>
								</div>
							@endif
						</div>
					@endforeach	
				</div>
			</div>
		</div>
	</div>
</x-app-layout>