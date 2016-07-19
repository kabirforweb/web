<html>
<head>
    @include('guest.head')
    @yield('styles')
</head>
<body>

    <div class="container">
        @yield('content')
    </div>

    @yield('scripts')

</body>
</html>