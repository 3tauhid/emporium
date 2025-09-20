<x-app-layout seoTitle="Profile Edit">
	<x-slot name='css'>
		<link href="{{ mix('/css/profile-edit.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

    <div class="container area3">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 b99">
			</br>
			<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
				<div class='b101'>
					<center><img src ="/images/camera1.png" alt='Update' style="background-image:url({{ $user->user_image?->url() ?? '/images/user.png' }}); background-size: 100%;" onclick="createUserImage('{{ route('user-images.store') }}')"></center>
				</div>
				<center>
					<div class="btn-group-vertical">
						<div class="dropdown">
							<button class="btn btn-primary dropdown-toggle btn-block b101" type="button" data-toggle="dropdown">Profile <span class="caret"></span></button>
							<ul class="dropdown-menu">
								<li><a type="button" class="btn btn-primary btn-block b101" href='{{ route('profile.show') }}'>Profile Info</a></li>
								<li><a type="button" class="btn btn-primary btn-block b101" href='{{ route('reset_password') }}'>Change Password</a></li>
								<li><a type="button" class="btn btn-primary btn-block b101" href='{{ route('profile.edit') }}'>Edit Profile</a></li>
							</ul>
							</div>

							@if ($user->isAdmin())
								<a type="button" class="btn btn-primary b101" href='{{ route('users.index') }}'>Users</a>
							@endif
							@if ($user->isSeller())
								<a type="button" class="btn btn-primary b101" href='{{ route('seller-products.index') }}'>Products</a>
								<a type="button" class="btn btn-primary b101" href='{{ route('orders.index') }}'>Orders</a>
							@endif
							@if ($user->isCustomer())
								<a type="button" class="btn btn-primary b101" href='{{ route('orders.index') }}'>Orders</a>
							@endif
					</div>
				</center> 
			</div>
			<div class='col-lg-9 col-md-9 col-sm-12 col-xs-12 b100'>
				<h1>Profile Info</h1>
					<form action="{{ route('profile.update') }}" method="post">
						@csrf
						@method('PUT')
						
						<p><b>Name</b></p>
						<input type='text' name='name' class='form-control b32' placeholder='Name' value="{{ $user->name }}">
						<div class='b90'>
							<p><b>Email</b></p>
						</div>
						<input type='text' name='email' class='form-control b32' placeholder='Email' value="{{ $user->email }}">
						<div class='b90'>
							<p><b>Phone</b></p>
						</div>
						<input type='text' name='phone' class='form-control b32' placeholder='Phone' value="{{ $user->phone }}">
						<div class='b90'>
							<p><b>Address</b></p>
						</div>
						<input type='text' name='address' class='form-control b32' placeholder='Address' value="{{ $user->address }}">
						<button type='submit' name='submit1' class='btn btn-success b99' style='margin-top: 15px; margin-left: 30%;' onclick=''>Save</button>
					</form>
			</div>
		</div>
	</div>
</x-app-layout>