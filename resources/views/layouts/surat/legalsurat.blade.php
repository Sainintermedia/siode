<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/plugins/paper-cs/normalize/normalize.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/plugins/paper-cs/paper/paper.css') !!}">
    <style>
        @page {
            size: legal
        }
    </style>
</head>

<body class="legal">
    <section class="sheet padding-10mm">
        @yield('content')
    </section>
</body>

</html>
