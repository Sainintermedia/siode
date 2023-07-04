@extends('layouts.siode-front.app-master')

@section('content')
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://tpc.googlesyndication.com/simgad/3038613955127742416/14763004658117789537"
                    class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://greennetwork.id/wp-content/uploads/sites/2/2021/10/SDGs-Desa.jpg"
                    class="d-block w-100 img-fluid" alt="...">
            </div>
            <div class="carousel-item">
                <img src="https://i.ytimg.com/vi/WaxYo70moBw/maxresdefault.jpg" class="d-block w-100 img-fluid"
                    alt="...">
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

    <div class="row mt-2">
        <div class="col-lg-12">
            <div class="trending-area fix">
                <div class="container">
                    <div class="trending-main">
                        <!-- Trending Tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="trending-tittle">
                                    <a class="btn btn-danger"><strong>Trending now</strong></a>
                                    <div class="trending-animated">
                                        <ul id="js-news" class="js-hidden">
                                            <li class="news-item">Bangladesh dolor sit amet, consectetur adipisicing elit.
                                            </li>
                                            <li class="news-item">Spondon IT sit amet, consectetur.......</li>
                                            <li class="news-item">Rem ipsum dolor sit amet, consectetur adipisicing elit.
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-lg-8">
                                <!-- Trending Top -->
                                <div class="trending-top mb-30">
                                    <div class="trend-top-img">
                                        <img src="{!! URL::asset('assets/dist/img/photo2.png') !!}" alt=""
                                            style="width: 100%; height: auto;">
                                        <div class="trend-top-cap">
                                            <span>Appetizers</span>
                                            <h4><a href="details.html">Welcome To The Best Model Winner Contest At Look
                                                    of the year</a></h4>
                                        </div>
                                    </div>
                                </div>

                                <hr class="dropdown-divider">
                                <!-- Trending Bottom -->
                                <div class="trending-bottom">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <img src="{!! URL::asset('assets/dist/img/photo2.png') !!}" alt=""
                                                        style="width: 100%; height: auto;">
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <span class="color1">Lifestyle</span>
                                                    <h6><a href="details.html">Get the Illusion of Fuller Lashes by
                                                            “Mascng.”</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <img src="{!! URL::asset('assets/dist/img/photo2.png') !!}" alt=""
                                                        style="width: 100%; height: auto;">
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <span class="color2">Sports</span>
                                                    <h6><a href="details.html">Get the Illusion of Fuller Lashes by
                                                            “Mascng.”</a></h6>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="single-bottom mb-35">
                                                <div class="trend-bottom-img mb-30">
                                                    <img src="{!! URL::asset('assets/dist/img/photo2.png') !!}" alt=""
                                                        style="width: 100%; height: auto;">
                                                </div>
                                                <div class="trend-bottom-cap">
                                                    <span class="color3">Travels</span>
                                                    <h6><a href="details.html">Welcome To The Best Model Winner Contest</a>
                                                    </h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img src="{!! URL::asset('assets/dist/img/photo1.png') !!}" alt=""
                                            style="width: 100px; height: auto;">
                                    </div>
                                    <div class="trand-right-cap" style="margin-left: 10px;">

                                        <span class="color1">Concert</span>
                                        <h6><a href="details.html">Welcome To The Best Model Winner Contest</a></h6>
                                    </div>
                                </div>
                                <hr class="dropdown-divider">
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img src="{!! URL::asset('assets/dist/img/photo2.png') !!}" alt=""
                                            style="width: 100px; height: auto;">
                                    </div>
                                    <div class="trand-right-cap" style="margin-left: 10px;">

                                        <span class="color3">sea beach</span>
                                        <h6><a href="details.html">Welcome To The Best Model Winner</a></h6>
                                    </div>
                                </div>
                                <hr class="dropdown-divider">
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img src="{!! URL::asset('assets/dist/img/photo3.jpg') !!}" alt=""
                                            style="width: 100px; height: auto;">
                                    </div>
                                    <div class="trand-right-cap" style="margin-left: 10px;">

                                        <span class="color2">Bike Show</span>
                                        <h6><a href="details.html">Welcome To The Best Model Winner Contest</a></h6>
                                    </div>
                                </div>
                                <hr class="dropdown-divider">
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img src="{!! URL::asset('assets/dist/img/photo4.jpg') !!}" alt=""
                                            style="width: 100px; height: auto;">
                                    </div>
                                    <div class="trand-right-cap" style="margin-left: 10px;">

                                        <span class="color4">See beach</span>
                                        <h6><a href="details.html">Welcome To The Best Model Winner Contest</a></h6>
                                    </div>
                                </div>
                                <hr class="dropdown-divider">
                                <div class="trand-right-single d-flex">
                                    <div class="trand-right-img">
                                        <img src="{!! URL::asset('assets/dist/img/prod-1.jpg') !!}" alt=""
                                            style="width: 100px; height: auto;">
                                    </div>
                                    <div class="trand-right-cap" style="margin-left: 10px;">

                                        <span class="color1">Skeping</span>
                                        <h6><a href="details.html">Welcome To The Best Model Winner Contest</a></h6>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <hr class="dropdown-divider">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row mt-2">
        <div class="col-lg-12">
            <!--  Recent Articles start -->
            <div class="recent-articles">
                <div class="container">
                    <div class="recent-wrapper">
                        <!-- section Tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="section-tittle mb-30">
                                    <h3>Recent Articles</h3>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12">
                                <div class="recent-active dot-style">
                                    <div class="single-recent mb-100">
                                        <div class="what-img">
                                            <img src="{!! URL::asset('assets/dist/img/photo3.jpg') !!}">
                                        </div>
                                        <div class="what-cap">
                                            <span class="color1">Night party</span>
                                            <h6><a href="#">Welcome To The Best Model Winner Contest</a></h6>
                                        </div>
                                    </div>
                                    <div class="single-recent mb-100">
                                        <div class="what-img">
                                            <img src="{!! URL::asset('assets/dist/img/photo3.jpg') !!}">
                                        </div>
                                        <div class="what-cap">
                                            <span class="color1">Night party</span>
                                            <h6><a href="#">Welcome To The Best Model Winner Contest</a></h6>
                                        </div>
                                    </div>
                                    <div class="single-recent mb-100">
                                        <div class="what-img">
                                            <img src="{!! URL::asset('assets/dist/img/photo3.jpg') !!}">
                                        </div>
                                        <div class="what-cap">
                                            <span class="color1">Night party</span>
                                            <h6><a href="#">Welcome To The Best Model Winner Contest</a></h6>
                                        </div>
                                    </div>
                                    <div class="single-recent mb-100">
                                        <div class="what-img">
                                            <img src="{!! URL::asset('assets/dist/img/photo3.jpg') !!}">
                                        </div>
                                        <div class="what-cap">
                                            <span class="color1">Night party</span>
                                            <h6><a href="#">Welcome To The Best Model Winner Contest</a></h6>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--Recent Articles End -->
            <!--Start pagination -->
            <div class="pagination-area pb-45 text-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-12">
                            <div class="single-wrap d-flex justify-content-center">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination justify-content-start">
                                        <li class="page-item"><a class="page-link" href="#">«</a></li>
                                        <li class="page-item active"><a class="page-link" href="#">01</a></li>
                                        <li class="page-item"><a class="page-link" href="#">02</a></li>
                                        <li class="page-item"><a class="page-link" href="#">03</a></li>
                                        <li class="page-item"><a class="page-link" href="#">»</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    {{--  <div class="row">
        <div class="col-lg-3 col-6">
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $kk }}</h3>
                    <p>Jumlah Kartu Keluarga</p>
                </div>
                <div class="icon">
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
                    <i class="fa-solid fa-user"></i>
                </div>
                <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>
    <div class="bg-info rounded p-4">
        @auth
            <h1>Dashboard</h1>
            <p class="lead">Only authenticated users can access this section.</p>
        @endauth

        @guest
            <h1>Homepage</h1>
            <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest


    </div>  --}}
@endsection
@push('styles')
    <style>
        .carousel-item img {
            object-fit: cover;
            height: 400px;
        }

        .trending-tittle {
            display: flex;
            align-items: center;
        }

        .trending-animated {
            margin-left: 10px;
        }

        .trand-right-img img {
            border-radius: 5%;
        }

        .trend-bottom-img img {
            border-radius: 3%;
        }

        .trend-top-img img {
            border-radius: 1%;
        }

        .single-recent img {
            border-radius: 3%;
        }

        .dot-style {
            display: flex;
            justify-content: flex-start;
            align-items: flex-start;
        }

        .single-recent {
            margin-left: 10px;
        }

        .what-img img {
            width: 100%;
            height: auto;
        }
    </style>
@endpush

@push('script')
    <script>
        // JavaScript for Trending News Animation
        const newsList = document.getElementById('js-news');
        const newsItems = newsList.getElementsByClassName('news-item');

        let currentIndex = 0;

        function showNewsItem(index) {
            // Hide all news items
            for (let i = 0; i < newsItems.length; i++) {
                newsItems[i].style.display = 'none';
            }

            // Show the news item at the specified index
            newsItems[index].style.display = 'block';
        }

        function animateNews() {
            // Hide the current news item
            newsItems[currentIndex].style.display = 'none';

            // Increment the index or reset to 0 if it exceeds the length of news items
            currentIndex = (currentIndex + 1) % newsItems.length;

            // Show the next news item
            showNewsItem(currentIndex);

            // Call the animateNews function recursively after a delay
            setTimeout(animateNews, 3000); // Change news item every 3 seconds
        }

        // Start the animation
        animateNews();
    </script>
@endpush
