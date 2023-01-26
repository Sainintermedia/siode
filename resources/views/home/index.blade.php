@extends('layouts.app-master')

@section('content')
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://tpc.googlesyndication.com/simgad/409121367224940654/14763004658117789537?w=1200&h=628" alt="First slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="https://tpc.googlesyndication.com/simgad/3038613955127742416/14763004658117789537" alt="Second slide">
        </div>
        <div class="carousel-item">
            <img class="d-block w-100" src="image 3" alt="Third slide">
        </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
        </a>
    </div>
    <div class="bg-light rounded p-5">
        @auth
            <h1>Dashboard</h1>
            <p class="lead">Only authenticated users can access this section.</p>
        @endauth

        @guest
            <h1>Homepage</h1>
            <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
