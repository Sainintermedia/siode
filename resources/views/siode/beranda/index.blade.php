@extends('layouts.app-master-user')

@section('content')
    <div class="bg-light rounded p-5">
        <div class="jumbotron">
            <h1 class="display-4">Surat Desa</h1>
            <p class="lead">Membantu masyarakat dalam mengakses berbagai layanan umum yang disediakan oleh pemerintah desa.</p>
            <hr class="my-4">
            {{-- <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
            <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a> --}}
        </div>
        <div class="card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
              <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>
          </div>
        {{-- <h1 class="text-hide" img src="{{ URL::asset('images/siode.png') }}"  style="background-image: url('images/siode.png');"></h1> --}}
        {{-- @auth
            <h1>Dashboard</h1>
            <p class="lead">Only authenticated users can access this section.</p>
        @endauth

        @guest
            <h1>Homepage</h1>
            <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest --}}
    </div>
@endsection
