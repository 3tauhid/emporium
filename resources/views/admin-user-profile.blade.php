<x-app-layout seoTitle="User Profile">
	<x-slot name='css'>
		<link href="{{ mix('/css/admin-user-profile.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

    <div class="container area3">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b115">
			</br>
			@include('partials._profile-menu')

			<div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 b102">
				<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b103">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 p4">
						<div class='col-lg-3 col-md-3 col-sm-12 col-xs-12'>
							<center><img src ="{{ $user->user_image?->url ?? '/images/user.png' }}" alt='Profile Photo' style='margin-top: 27px;'></center>			
							<center>
								<div class='btn-group-vertical'>
									<a type='button' href="{{ route('users.show', $user->id) }}" class='btn btn-primary b101'>Profile Info</a>
									@if ($user->is_active == 1)
										<button type='button' onclick="deactivateUser({{ $user->id }}, '{{ route('deactivate_user') }}')" class='btn btn-danger'>Deactivate</button>
									@else
										<button type='button' onclick="activateUser({{ $user->id }}, '{{ route('activate_user') }}')" class='btn btn-info'>Activate</button>
									@endif
								</div>
							</center>
						</div>
						<div class='col-lg-9 col-md-9 col-sm-12 col-xs-12 p3' style='padding-bottom: 30px;'>
							<h1 style='padding-top: 0px;'>Profile Info</h1>
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
			</div>
		</div>
	</div>

	<x-slot name='scripts'>
		<script type="text/javascript" src="{{ mix('/js/admin-block.js')}}"></script>
    </x-slot>
</x-app-layout>