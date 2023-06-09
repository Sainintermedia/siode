@extends('layouts.siode-front.app-master')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://tpc.googlesyndication.com/simgad/3038613955127742416/14763004658117789537"
                    class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://greennetwork.id/wp-content/uploads/sites/2/2021/10/SDGs-Desa.jpg" class="d-block w-100"
                    alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i.ytimg.com/vi/WaxYo70moBw/maxresdefault.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    
    {{-- <div class="card body"> --}}
        <div class="row">
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $kk }}</h3>
                        <p>Jumlah Kartu Keluarga</p>
                    </div>
                    <div class="icon">
                        {{--  <i class="ion ion-bag"></i>  --}}
                        <i class="fa-solid fa-chart-simple"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $pen }}</h3>
                        <p>Jumlah Penduduk</p>
                    </div>
                    <div class="icon">
                        {{--  <i class="ion ion-bag"></i>  --}}
                        <i class="fa-solid fa-chart-simple"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $kkanggotalaki }}</h3>
                        <p>Penduduk Laki-laki</p>
                    </div>
                    <div class="icon">
                        {{--  <i class="ion ion-bag"></i>  --}}
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $kkanggotaperempuan }}</h3>
                        <p>Penduduk Perempuan</p>
                    </div>
                    <div class="icon">
                        {{--  <i class="ion ion-bag"></i>  --}}
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-6">
                <div class="small-box bg-info">
                    <div class="inner">
                        <h3>{{ $jmlrw }}</h3>
                        <p>Kejaroan</p>
                    </div>
                    <div class="icon">
                        {{--  <i class="ion ion-bag"></i>  --}}
                        <i class="fa-solid fa-user"></i>
                    </div>
                    <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                </div>
            </div>
        </div>
    {{-- </div> --}}
    <div class="bg-info rounded p-4">
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
