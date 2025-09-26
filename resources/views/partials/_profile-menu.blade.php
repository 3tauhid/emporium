<div class="col-lg-3 col-md-3 col-sm-12 col-xs-12">
	<center><img src="{{ auth()->user()->user_image?->url ?? '/images/user.png' }}" alt='Profile Photo'></center>
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
			
			@if (auth()->user()->isAdmin())
				<a type="button" class="btn btn-primary b101" href='{{ route('users.index') }}'>Users</a>
			@endif
			@if (auth()->user()->isSeller())
				<a type="button" class="btn btn-primary b101" href='{{ route('seller-products.index') }}'>Products</a>
				<a type="button" class="btn btn-primary b101" href='{{ route('orders.index') }}'>Orders</a>
			@endif
			@if (auth()->user()->isCustomer())
				<a type="button" class="btn btn-primary b101" href='{{ route('orders.index') }}'>Orders</a>
			@endif
		</div>
	</center>
</div>