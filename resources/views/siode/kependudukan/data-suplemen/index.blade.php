@extends('layouts.siode.app')
@section('title', 'Data Suplemen')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>Data Suplemen Desa</P>
                </h3>
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 100px;">
                    <input type="hidden" name="table_search" class="form-control float-right" placeholder="Informasi">
                    <div class="input-group-append">
                   

                            <div class="card-tools">
                                <button class="btn btn-warning" type="button" id="button-addon2" data-toggle="modal"
                                    data-target="#ubah"> Panduan <i class="fas fa-question-circle text-blue"></i></button>
                            </div>
    
    
                            <div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content rounded-0 text-sm">
                                        <div class="modal-header">
                                            <h5 class="modal-title">Panduan Input</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="row">
                                                <text>
                                                <u>Keterangan</u><br>
                                                Data Suplemen adalah modul untuk pengelolaan data tambahan warga, baik secara perorangan, keluarga, rumah tangga, maupun kelompok/organisasi.
                                                <br><br>
                                                <u>Panduan</u> <br>
                                                Cara menyimpan/memperbarui Data Suplemen adalah dengan mengisikan formulir yang terdapat dari menu Tulis Data Suplemen Baru:
                                                <br><br>
                                                <u>Kolom Sasaran Data</u><br>
                                                Pilihlah salah satu dari sasaran data, apakah pribadi/perorangan, keluarga/kk, Rumah Tangga, ataupu Organisasi/kelompok warga
                                                <br><br>
                                                <u>Kolom Nama Data</u><br>
                                                Nama data wajib diisi
                                                <br><br>
                                                <u>Kolom Keterangan Data</u><br>
                                                Isikan keterangan data suplemen ini
                                                </text>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                    </div>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h4>Data Kependudukan Menurut Penerima Bantuan Keluarga
                            </h4>
                            <hr>
                            <text>Data suplemen digunakan untuk mencatat data tambahan mengenai penduduk yang belum terdapat form'nya di data dasar kependudukan
                            </text>
                        </div>
                        {{-- <div class="icon"> --}}
                             {{-- <i class="ion ion-bag"></i>  --}}
                            {{-- <i class="fa-solid fa-chart-simple"></i> --}}
                        {{-- </div> --}}
                        
                        {{-- <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a> --}}
                    
                    </div>
                    
                </div>
            </div>
        </div>
    
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="small-box">
                        <div class="card-body table-responsive">
                            <table id="example1"
                                class="table-bordered table-hover table-striped rounded-0 table-sm table py-0 text-sm">
                                <thead>
                                    <tr class="text-center">
                                        <th style="width: 1%">No</th>
                                        <th style="width: 1%">Aksi</th>
                                        <th>Kode</th>
                                        <th>Nama Data</th>
                                        <th>Sasaran</th>
                                   
                                    </tr>
                                </thead>
                                <tbody>
                                   
                                        <tr class="text-center">
                                            <td class="text-center">vfvf</td>
                                            <td class="text-center">
                                                <div class="btn-group text-center">
                                                    <button type="button"
                                                        class="btn bg-gradient-success dropdown-toggle dropdown-icon btn-xs"
                                                        data-toggle="dropdown">
                                                        <span class="bg-gradient-success sr-only">Toggle Dropdown</span>
                                                    </button>
                                                    <div class="dropdown-menu" role="menu">
                                                        <form method="POST" action="" class="text-center">
                                                            @csrf
                                                            @method('delete')
                                                            <a class="dropdown-item bg-gradient-warning"
                                                                href="#"><i
                                                                    class="fa-solid fa-pen"></i>
                                                                Edit</a>
                                                            <a class="dropdown-item bg-gradient-danger show_confirm"
                                                                data-nama="#" type="submit"><i
                                                                    class="fa-solid fa-trash"></i>
                                                                Delete</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </td>
                                            <th></th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                        {{-- <h4>tidak ada data</h4> --}}
                                </tbody>
                                <tfoot>
                                    <tr class="text-center">
                                        <th style="width: 1%">No</th>
                                        <th style="width: 1%">Aksi</th>
                                        <th>Kode</th>
                                        <th>Nama Data</th>
                                        <th>Sasaran</th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>

    </div>
@endsection