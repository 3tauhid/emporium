@props(['seoTitle', 'seoDescription' => 'Buy computers, phones, laptops, softwares and more', 'seoImage' => '/images/background-bags-bows-1050244.jpg', 'seoKeywords' => 'Books, Online Shopping, Book Store, Magazine, Subscription, Music, CDs, DVDs, Videos, Electronics, Video Games, Computers, Cell Phones, Toys, Games, Apparel, Accessories, Shoes, Jewelry, Watches, Office Products, Sports &amp; Outdoors, Sporting Goods, Baby Products, Health, Personal Care, Beauty, Home, Garden, Bed &amp; Bath, Furniture, Tools, Hardware, Vacuums, Outdoor Living, Automotive Parts, Pet Supplies, Broadband, DSL'])
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

        <meta name="keywords" content="{{ $seoKeywords }}">

        <meta name="robots" content="none">

        <link rel="canonical" href="{{ url()->current() }}">

        <meta property="og:site_name"     content="Emporium">
        <meta property="og:title"         content="{{ $seoTitle }} - Emporium" />
        <meta property="og:description"   content="{{ $seoDescription }}" />
        <meta property="og:type"          content="website" />
        <meta property="og:url"           content="{{ url()->current() }}" />
        <meta property="og:image"         content="{{ $seoImage }}" />

        <meta name="twitter:card" content="summary">
        
        <link href="/vendor/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet">
        <link href="/vendor/toastr/toastr.min.css" type="text/css" rel="stylesheet">
        <link href="{{ mix('/css/scrollbar.css')}}" type="text/css" rel="stylesheet">
        <link href="{{ mix('/css/common.css')}}" type="text/css" rel="stylesheet">

        @isset ($css)
            {{ $css }}
        @endisset
    </head>

    <body>
        <x-header />

		<div id='notification'>
		</div>
		
        {{ $slot }}

		@include('partials._footer')

        <script type="text/javascript" src="/vendor/jquery.min.js"></script>
        <script type="text/javascript" src="/vendor/bootstrap/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="/vendor/toastr/toastr.min.js"></script>
        <script type="text/javascript" src="/vendor/moment.min.js"></script>
        <script type="text/javascript" src="/js/local-time.js"></script>
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