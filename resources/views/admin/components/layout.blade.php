<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.components.head')
</head>

<body>
    <div id="app">
        @include('admin.components.sidebar')
        <div id="main" class='layout-navbar'>
            @include('admin.components.header')
            <div id="main-content">
                @yield('content')
            </div>

        </div>
    </div>
    @include('admin.components.toast')
    @include('admin.components.script')
</body>

</html>
