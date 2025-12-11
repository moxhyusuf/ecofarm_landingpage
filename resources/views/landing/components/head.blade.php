<meta charset="utf-8">

<!--====== Title ======-->
<title>@yield('title', 'Eco Farm') - Desa Cakrawala</title>

<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--====== Favicon Icon ======-->
<link rel="shortcut icon" href="{{ asset('images/favicon.png') }}" type="image/png">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


<!--====== Animate CSS ======-->
<link rel="stylesheet" href="{{ asset('css/animate.css') }}">



<!--====== Line Icons CSS ======-->
<link rel="stylesheet" href="{{ asset('css/LineIcons.2.0.css') }}">

<!--====== Bootstrap CSS ======-->
<link rel="stylesheet" href="{{ asset('css/bootstrap.4.5.2.min.css') }}">

<!--====== Default CSS ======-->
<link rel="stylesheet" href="{{ asset('css/default.css') }}">

<!--====== Style CSS ======-->
<link rel="stylesheet" href="{{ asset('css/style.css') }}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />



@stack('styles')
