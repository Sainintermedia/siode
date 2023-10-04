    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
        <meta name="generator" content="Hugo 0.87.0">
        <title>SiODe</title>

        <!-- Bootstrap core CSS -->
        <link href="{!! url('assets/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">

        <style>
            .bd-placeholder-img {
                font-size: 1.125rem;
                text-anchor: middle;
                -webkit-user-select: none;
                -moz-user-select: none;
                user-select: none;
            }

            @media (min-width: 768px) {
                .bd-placeholder-img-lg {
                    font-size: 3.5rem;
                }
            }

            .float-right {
                float: right;
            }


            @media (max-width: 767px) {
                .container {
                    padding-left: 10px;
                    padding-right: 10px;
                }
            }

            .footer-logo {
                text-align: left;
                margin-right: 20px;
                /* Atur jarak antara logo dan teks */
            }

            .footer-tittle {
                text-align: left;
            }
        </style>


        <!-- Custom styles for this template -->
        <link href="{!! url('assets/css/app.css') !!}" rel="stylesheet">
        @include('layouts.siode.styles')
        @stack('styles')
    </head>

    <body class="hold-transition layout-top-nav">

        <div class="wrapper">
            @include('layouts.partials.navbar')
        </div>

        <main class="container mt-4">
            @yield('content')
        </main>

        @include('layouts.siode-front.footer')
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="{!! url('assets/bootstrap/js/bootstrap.bundle.min.js') !!}"></script>
        @stack('script')

    </body>


    </html>
