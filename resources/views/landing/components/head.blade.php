<meta charset="utf-8">

<!--====== Title ======-->
<title>@yield('title', 'Eco Farm') - Desa Cakrawala</title>

<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">

<!--====== Favicon Icon ======-->
<link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/apple-touch-icon.png') }}">
<link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon/favicon-32x32.png') }}">
<link rel="icon" type="image/png" sizes="16x16" href="{{ asset('favicon/favicon-16x16.png') }}">
<link rel="manifest" href="{{ asset('favicon/site.webmanifest') }}">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">


<!--====== Animate CSS ======-->
<link rel="stylesheet" href="{{ asset('landing/css/animate.css') }}">



<!--====== Line Icons CSS ======-->
<link rel="stylesheet" href="{{ asset('landing/css/LineIcons.2.0.css') }}">

<!--====== Bootstrap CSS ======-->
<link rel="stylesheet" href="{{ asset('landing/css/bootstrap.4.5.2.min.css') }}">

<!--====== Default CSS ======-->
<link rel="stylesheet" href="{{ asset('landing/css/default.css') }}">

<!--====== Style CSS ======-->
<link rel="stylesheet" href="{{ asset('landing/css/style.css') }}">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />



@stack('styles')
