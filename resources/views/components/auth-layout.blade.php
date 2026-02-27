@props(['seoTitle', 'seoDescription' => 'Buy computers, phones, laptops, softwares and more'])
<!DOCTYPE html>
<html lang="en">
    <head>	
		<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

        <link rel="icon" href="/favicon.ico">

        <meta name="referrer" content="origin-when-cross-origin">

        <meta name="csrf-token" content="{{ csrf_token() }}" />

        <title>{{ $seoTitle }} - Emporium</title>

        <meta name="description" content="{{ $seoDescription }}">

        <meta name="robots" content="none">

        <link href="/vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="/vendor/toastr/toastr.min.css" type="text/css" rel="stylesheet">
        <link href="{{ mix('/css/scrollbar.css')}}" type="text/css" rel="stylesheet">
        <link href="{{ mix('/css/common.css')}}" type="text/css" rel="stylesheet">

		@isset ($css)
            {{ $css }}
        @endisset
    </head>

    <body>
        <div class="container area3">
			<div id='notification'>
			</div>
            <div class='b29'>
                <img src ="/images/logo2.png" alt="Logo Image">
                <p>Emporium</p>
            </div>

            {{ $slot }}
            
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="display: flex;justify-content: center;">
				<div class='b37' style="margin-top: 30px;">
					<p style="padding-top: 20px;padding-bottom: 10px;color: #767676; font-size: 12px;"><a href="#">Conditions of Use</a><a style="margin-left: 30px;margin-right: 30px;" href="#">Privacy Notice</a><a href="#">Help</a></p>
					<p style="padding-top: 20px;padding-bottom: 10px;color: #767676; font-size: 12px;">© 2019-2020, Emporium.com, Inc. or its affiliates</p>
				</div>
			</div>
        </div>

        <script type="text/javascript" src="/vendor/jquery.min.js"></script>
        <script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/vendor/toastr/toastr.min.js"></script>
        <script type="text/javascript" src="{{ mix('/js/common.js')}}"></script>
		
		@isset ($scripts)
            {{ $scripts }}
        @endisset

        @if (session()->has('success_message'))
            <script>
                toastr.success('{{ session("success_message") }}', 'Success');
            </script>
            @php session()->forget('success_message'); @endphp
        @endif

        @if (session()->has('error_message'))
            <script>
                toastr.error('{{ session("error_message") }}', 'Error');
            </script>
            @php session()->forget('error_message'); @endphp
        @endif

        @if (isset($errors) && $errors->any())
            @foreach ($errors->all() as $error)
                <script>
                    toastr.error('{{ $error }}', 'Error');
                </script>
            @endforeach
        @endif
  </body>
</html>