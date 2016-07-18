<!DOCTYPE html lang="en">
<html>
    <head>
        @include('loggedIn.head')
    </head>

    <body id="page-top" class="index">

        @include('loggedIn.navigation')

        <div class="container">
            @yield('content')
        </div>

        @include('loggedIn.footer')
        @include('loggedIn.styles')
        @include('loggedIn.scripts')

    </body>
</html>