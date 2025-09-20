<x-auth-layout seoTitle="Signin">
	<x-slot name='css'>
        <link href="{{ mix('/css/signin.css')}}" type="text/css" rel="stylesheet">
    </x-slot>

	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class='b30'>
			<div class='b31'>
				<p style="font-size: 30px;">Sign-In</p>

				@include('partials._errors')

				<form action="{{ route('signin') }}" method="post">
					@csrf
					
					<p><b>Email</b></p>
					<input type="text" name='email' class="form-control b32" placeholder="Email" value="{{ old('email') }}">

					<div class='b90'>
						<p><b>Password</b></p>
					</div>
					<input type="password" name='password' class="form-control b33" placeholder="Password">

					<button type="submit" class="btn btn-primary b34">Sign in</button>
				</form>
				<p style="margin-top: 20px;margin-bottom: 25px;">By continuing, you agree to Emporium's <a href="#">Conditions of Use</a> and <a href="#">Privacy Notice</a>.</p>
				<p><a href="#">Need help?</a></p>
			</div>
		</div>
	</div>
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class='b35'>
			<p style="padding-top: 20px;padding-bottom: 10px;color: #767676; font-size: 12px;">----------------------------- New to Emporium? -----------------------------</p>
			<a type="button" class="btn btn-primary b36" href="{{ route('register') }}">Create your Emporium account</a>
		</div>
	</div>
</x-auth-layout>