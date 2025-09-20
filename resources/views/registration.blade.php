<x-auth-layout seoTitle="Registration">
	<x-slot name='css'>
        <link href="{{ mix('/css/registration.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class='b30'>
			<div class='b31'>
				<p style="font-size: 30px;">Sign-Up</p>

				@include('partials._errors')

				<form action="{{ route('register') }}" method="post">
					@csrf
					
					<p><b>Name</b></p>
					<input type="text" name="name" class="form-control b32" placeholder="Name">

					<div class='b90'>
						<p><b>Email</b></p>
					</div>
					<input type="text" name="email" class="form-control b33" placeholder="Email">

					<div class='b90'>
						<p><b>Phone</b></p>
					</div>
					<input type="text" name="phone" class="form-control b33" placeholder="Phone">

					<div class='b90'>
						<p><b>Address</b></p>
					</div>
					<input type="text" name="address" class="form-control b33" placeholder="Address">

					<div class='b90'>
						<p><b>Password</b></p>
					</div>
					<input type="password" name="password" class="form-control b33" placeholder="Password">

					<div class='b90'>
						<p><b>Role</b></p>
					</div>
					<input id="seller" type="radio" name="role" value="Seller">Seller
					<input id="customer" type="radio" name="role" value="Customer" style="margin-left: 15px;margin-bottom: 15px;">Customer

					<button type="submit" name="submit1" class="btn btn-primary b34">Create your Emporium account</button>

					<p style="margin-top: 20px;margin-bottom: 25px;">By continuing, you agree to Emporium's <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice</a>.</p>
					
					<p><a href="#">Need help?</a></p>
				</form>
				<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
					<?php
						if (isset($taken1)) {
							if ($taken1==1) {
								echo "<div id='notification'>
								<div style='margin-top: 30px; margin-bottom: 30px;'><center><p style='color: #000; font-size: 16px;'>Email already taken</p></center><center><button type='button' class='btn btn-primary' onclick='hideNotification()'>Ok</button></center></div>
								</div>";
							}

							if ($taken1==2) {
								echo "<div id='notification'>
								<div style='margin-top: 30px; margin-bottom: 30px;'><center><p style='color: #000; font-size: 16px;'>Can't be empty input</p></center><center><button type='button' class='btn btn-primary' onclick='hideNotification()'>Ok</button></center></div>
								</div>";
							}
						}
					?>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class='b35'>
			<p style="padding-top: 20px;padding-bottom: 10px;color: #767676; font-size: 12px;">------------------------- Already have an account? -------------------------</p>
			<a type="button" class="btn btn-primary b36" href="{{ route('signin') }}">Sign In</a>
		</div>
	</div>
</x-auth-layout>