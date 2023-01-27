    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="csrf-token" content="{!! csrf_token() !!}">
    <title>@yield('title') | Siode</title>


    <link href="{{ URL::asset('images/desa.png') }}" rel='shortcut icon'>
    <link rel="icon" href="{{ URL::asset('images/desa.png') }}" type="image/x-icon" />

    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

    <link rel="stylesheet" href="{{ URL::asset('assets/dist/plugins/fontawesome-free/css/all.min.css') }}">

    <link rel="stylesheet" href="{{ URL::asset('assets/dist/css/adminlte.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('assets/dist/plugins/toastr/toastr.min.css') }}">
