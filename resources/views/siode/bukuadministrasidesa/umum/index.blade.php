@extends('layouts.siode.app')
@section('title', 'Umum')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>Buku Administrasi Desa Umum</P>
                </h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>BUKU PERATURAN DI DESA
                            </h4>
                        </div>
                        <div class="icon">
                            {{--  <i class="ion ion-bag"></i>  --}}
                            <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <a href="{{ route('siode.buku.umum.peraturandesa.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>BUKU KEPUTUSAN KEPALA DESA
                            </h4>
                        </div>
                        <div class="icon">
                            {{--  <i class="ion ion-bag"></i>  --}}
                            <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <a href="{{ route('siode.buku.umum.peraturandesa.index') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>BUKU INVENTARIS DAN KEKAYAAN DESA
                            </h4>
                        </div>
                        <div class="icon">
                            {{--  <i class="ion ion-bag"></i>  --}}
                            <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>BUKU APARAT PEMERINTAH DESA
                            </h4>
                        </div>
                        <div class="icon">
                            {{--  <i class="ion ion-bag"></i>  --}}
                            <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>BUKU TANAH KAS DESA
                            </h4>
                        </div>
                        <div class="icon">
                            {{--  <i class="ion ion-bag"></i>  --}}
                            <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>BUKU TANAH DI DESA
                            </h4>
                        </div>
                        <div class="icon">
                            {{--  <i class="ion ion-bag"></i>  --}}
                            <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>BUKU AGENDA
                            </h4>
                        </div>
                        <div class="icon">
                            {{--  <i class="ion ion-bag"></i>  --}}
                            <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>BUKU EKSPEDISI
                            </h4>
                        </div>
                        <div class="icon">
                            {{--  <i class="ion ion-bag"></i>  --}}
                            <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-md-12 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>BUKU LEMBARAN DESA DAN BERITA DESA
                            </h4>
                        </div>
                        <div class="icon">
                            {{--  <i class="ion ion-bag"></i>  --}}
                            <i class="fa-solid fa-chart-simple"></i>
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection