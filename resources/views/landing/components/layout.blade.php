<!DOCTYPE html>
<html lang="en">

<head>
    @include('landing.components.head')
</head>

<body>
    <section class="header_area">
        @include('landing.components.navbar')
        @yield('hero')
    </section>
    @yield('content')
    @include('landing.components.footer')
    @include('landing.components.script')
</body>

</html>
