@extends('layouts.siode.app')
@section('title', 'Dashboard')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>Grafik Desa</P>
            </h3>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">
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
                            <p>Jumlah Penduduk Laki-laki</p>
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
                            <p>Jumlah Penduduk Perempuan</p>
                        </div>
                        <div class="icon">
                            {{--  <i class="ion ion-bag"></i>  --}}
                            <i class="fa-solid fa-user"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>JUMLAH KEJAROAN</P>
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                @forelse ($rw as $key => $rwr)
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-warning">
                            <div class="inner">
                                <h3>RW {{ $key }}</h3>
                                <p>{{ $rwr->count() }}<sup style="font-size: 20px"></sup></p>

                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                @empty
                @endforelse

                {{-- <div class="col-lg-3 col-6">

                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div> --}}

                {{-- <div class="col-lg-3 col-6">

                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>JUMLAH RT</P>
            </h3>
        </div>
        <div class="card-body">
            <div class="row">
                @forelse ($rt as $key => $r)
                    <div class="col-lg-3 col-6">
                        <div class="small-box bg-success">
                            <div class="inner">
                                <h3>{{ $r->count() }}<sup style="font-size: 20px"></sup></h3>
                                <p>RT {{ $key }}</p>
                            </div>
                            <div class="icon">
                                <i class="ion ion-stats-bars"></i>
                            </div>
                            <a href="#" class="small-box-footer">More info <i
                                    class="fas fa-arrow-circle-right"></i></a>
                        </div>
                    </div>
                @empty
                @endforelse
            </div>
        </div>

        <div class="card-footer">

        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/plugins/ionicons/css/ionicons.min.css') !!}">
@endpush

@push('scripts')
    <script>
        // Your custom JavaScript...
    </script>
    <script src="https://unpkg.com/ionicons@latest/dist/ionicons.js"></script>
@endpush
