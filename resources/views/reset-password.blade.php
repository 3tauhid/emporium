<x-auth-layout seoTitle="Reset Password">
	<x-slot name='css'>
		<link href="{{ mix('/css/change-pass.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class='b30'>
			<div class='b31'>
				<p style="font-size: 30px;">Change Password</p>

				@include('partials._errors')
				
				<form action="{{ route('reset_password') }}" method="post">
					@csrf
					
					<p><b>Old Password</b></p>
					<input type="password" name='old_password' class="form-control b32" placeholder="Old Password">

					<div class='b90'>
						<p><b>New Password</b></p>
					</div>
					<input type="password" name='new_password' class="form-control b33" placeholder="New Password">

					<button type="submit" class="btn btn-primary b34">Save</button>
				</form>
				<p style="margin-top: 20px;margin-bottom: 25px;">By continuing, you agree to Emporium's <a>Conditions of Use</a> and <a>Privacy Notice</a>.</p>
				<p><a>Need help?</a></p>
			</div>
		</div>
	</div>
</x-auth-layout>