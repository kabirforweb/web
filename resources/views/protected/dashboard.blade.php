@extends('guest.master')
@include('guest.head')

<body id="page-top" class="index">

<!-- About Section -->
<section class="login-sec" id="">

    <div class="container" style="min-height: 200px">
        <h3>Welcome {{$user}}</h3>
        <div>
            <a href="{{route('logout')}}">Sign out</a>
        </div>
    </div>

</section>



<!-- Footer -->
@include('guest.footer')
@include('guest.styles')
@include('guest.scripts')
