@extends('layouts.siode.app')
@section('title', 'Kearsipan')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>Buku Kearsipan Desa</P>
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
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>Buku Arsip Desa
                            </h4>
                        </div>
                        <div class="icon">
                             {{-- <i class="ion ion-bag"></i>  --}}
                            {{-- <i class="fa-solid fa-chart-simple"></i> --}}
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>Buku Arsip Desa
                            </h4>
                        </div>
                        <div class="icon">
                             {{-- <i class="ion ion-bag"></i>  --}}
                            {{-- <i class="fa-solid fa-chart-simple"></i> --}}
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>Buku Arsip Desa
                            </h4>
                        </div>
                        <div class="icon">
                             {{-- <i class="ion ion-bag"></i>  --}}
                            {{-- <i class="fa-solid fa-chart-simple"></i> --}}
                        </div>
                        <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
@endsection