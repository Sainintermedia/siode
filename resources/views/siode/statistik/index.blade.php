@extends('layouts.siode.app')
@section('title', 'Statistik Kependudukan')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>Kependudukan</P>
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
            <tapble border="1">
                <thead>
                  <tr>
                    <th colspan="2">Tanjung Burung</th>
                    <th></th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td colspan="2" rowspan="2">Penduduk</td>
                    <td></td>
                    <td></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                  </tr>
                </tbody>
            </table>
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="small-box bg-warning">
                        
                        <div class="inner">
                            <h4>Desa Tradisional
                            </h4>
                            <hr>
                            <text>Desa tradisional adalah desa yang masyarakatnya masih bergantung sepenuhnya pada kekayaan alam untuk bertahan hidup. Tingkat perkembangan masyarakat masih rendah karena tidak adanya pengaruh atau komunikasi dari luar wilayah desa. Ciri-ciri desa yang diklasifikasikan desa tradisional antara lain :
                               <br> a. Ditinggali oleh sebuah suku
                               <br> b. Adat tradisi leluhur masih terus dipegang
                               <br> c. Letak desa terpencil dan terisolir
                               <br> d. Masyarakat masih bergantung pada alam untuk bertahan hidup
                               <br> e. Penduduknya cenderung tertutup dari daerah lain
                               <br> f. Hubungan antar personal sangat erat
                            </text>
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