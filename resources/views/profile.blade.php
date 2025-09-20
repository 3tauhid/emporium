<x-app-layout seoTitle="Profile">
	<x-slot name='css'>
		<link href="{{ mix('/css/profile.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

    <div class="container area3">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b99">
			</br>

			@include('partials._profile-menu')

			<div class='col-lg-9 col-md-9 col-sm-12 col-xs-12 b100'>
				<h1>Profile Info</h1>
				<div class='col-lg-2 col-md-2 col-sm-6 col-xs-6'>
					<h3>Name:</h3>
				</div>
				<div class='col-lg-10 col-md-10 col-sm-6 col-xs-6'>
					<h3>{{ $user->name }}</h3>
				</div>
				<div class='col-lg-2 col-md-2 col-sm-6 col-xs-6'>
					<h3>Email:</h3>
				</div>
				<div class='col-lg-10 col-md-10 col-sm-6 col-xs-6'>
					<h3>{{ $user->email }}</h3>
				</div>
				<div class='col-lg-2 col-md-2 col-sm-6 col-xs-6'>
					<h3>Role:</h3>
				</div>
				<div class='col-lg-10 col-md-10 col-sm-6 col-xs-6'>
					<h3>
						@if ($user->isAdmin()) Admin @endif
						@if ($user->isSeller()) Seller @endif
						@if ($user->isCustomer()) Customer @endif
					</h3>
				</div>
				<div class='col-lg-2 col-md-2 col-sm-6 col-xs-6'>
					<h3>Phone:</h3>
				</div>
				<div class='col-lg-10 col-md-10 col-sm-6 col-xs-6'>
					<h3>{{ $user->phone }}</h3>
				</div>
				<div class='col-lg-2 col-md-2 col-sm-6 col-xs-6'>
					<h3>Address:</h3>
				</div>
				<div class='col-lg-10 col-md-10 col-sm-6 col-xs-6'>
					<h3>{{ $user->address }}</h3>
				</div>
			</div>
		</div>
	</div>
</x-app-layout>