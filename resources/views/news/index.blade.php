<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>News Landing Page</title>

    <!-- AdminLTE CSS -->
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/css/adminlte.min.css') !!}">
    @include('layouts.siode.styles')
</head>

<body class="hold-transition layout-top-nav">
    <div class="wrapper">

        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-facebook-f"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-twitter"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fab fa-instagram"></i></a>
                    </li>
                </ul>
            </div>
        </nav>

        <!-- Navbar -->
        <nav class="main-header navbar navbar-expand-md navbar-light navbar-white">
            <div class="container">
                <a href="#" class="navbar-brand">
                    <span class="brand-text font-weight-light">News Site</span>
                </a>

                <!-- Navbar links -->
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a href="#" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">Contact</a>
                    </li>
                </ul>
            </div>
        </nav>
        <!-- /.navbar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <style>
                                .carousel-item img {
                                    object-fit: cover;
                                    height: 400px;
                                }
                            </style>

                            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img src="https://tpc.googlesyndication.com/simgad/3038613955127742416/14763004658117789537"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://greennetwork.id/wp-content/uploads/sites/2/2021/10/SDGs-Desa.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                    <div class="carousel-item">
                                        <img src="https://i.ytimg.com/vi/WaxYo70moBw/maxresdefault.jpg"
                                            class="d-block w-100" alt="...">
                                    </div>
                                </div>
                                <button class="carousel-control-prev" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Previous</span>
                                </button>
                                <button class="carousel-control-next" type="button"
                                    data-bs-target="#carouselExampleControls" data-bs-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-8">
                            <!-- News articles -->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Latest News</h5>
                                    <div class="row">
                                        <!-- News article item -->
                                        <div class="col-md-6">
                                            <div class="card mb-4">
                                                <img src="news-image.jpg" class="card-img-top" alt="News Image">
                                                <div class="card-body">
                                                    <h6 class="card-subtitle text-muted mb-2">Category</h6>
                                                    <h5 class="card-title">News Title</h5>
                                                    <p class="card-text">News description goes here.</p>
                                                    <a href="#" class="card-link">Read More</a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.News article item -->

                                        <!-- Add more news article items here -->

                                    </div>
                                </div>
                            </div>
                            <!-- /.News articles -->
                        </div>
                        <div class="col-lg-4">
                            <!-- Sidebar -->
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Categories</h5>
                                    <ul class="list-group">
                                        <li class="list-group-item">Category 1</li>
                                        <li class="list-group-item">Category 2</li>
                                        <li class="list-group-item">Category 3</li>
                                        <!-- Add more categories here -->
                                    </ul>
                                </div>
                            </div>
                            <!-- /.Sidebar -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /.content-wrapper -->

        <!-- Footer -->
        <footer class="main-footer">
            <div class="container">
                <div class="d-none d-sm-inline float-right">
                    Powered by News Site
                </div>
            </div>
        </footer>
        <!-- /.footer -->

    </div>
    <!-- ./wrapper -->

    <!-- AdminLTE JavaScript -->
    <script src="{!! URL::asset('assets/dist/js/adminlte.min.js') !!}"></script>
    @include('layouts.siode.scripts')
</body>

</html>
