@extends('layouts.siode.app')
@section('title', 'Kelompok')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>Kelompok Desa</P>
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
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h4>Desa Swadaya
                            </h4>
                            <hr>
                            <text>Masyarakat desa swadaya sudah lebih berkembang jika dibandingkan dengan desa tradisional. Kebutuhan sehari-hari sudah mampu dipenuhi sendiri dengan memanfaatkan alam. Meskipun perkembangan masyarakatnya masih cukup rendah karena kurangnya komunikasi dengan daerah lain. Ciri-ciri desa swadaya adalah sebagai berikut :
                              <br>  a. Penduduknya jarang
                              <br>  b. Mata pencaharian homogen yang bersifat agraris
                              <br>  c. Masih ada campur tangan adat
                              <br>  d. Kegiatan ekonomi hanya untuk memenuhi kebutuhan sendiri
                              <br>  e. Lokasi masih cukup terpencil dan sulit diakses
                              <br>  f. Sarana dan prasarana masih sangat kuran
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
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h4>Desa Swakarya
                            </h4>
                            <hr>
                            <text>Desa swakarya adalah desa yang masyarakatnya sudah berkembang cukup baik dengan pola pemikiran yang mulai terbuka. Kegiatan ekonomi yang dilakukan sudah tidak hanya untuk kebutuhan sendiri tapi juga untuk didistribusikan ke daerah lain. Interaksi antar desa sudah terjalin sehingga perkembangan masyarakatnya lebih cepat dan mudah. Ciri-ciri desa swakarya antara lain :
                               <br> a. Mata pencaharian penduduknya mulai beragam
                               <br> b. Adat istiadat sudah mengalami transisi sesuai dengan perkembangan masyarakat
                               <br> c. Pemerintahan desa mulai berkembang
                               <br> d. Adanya infrastruktur desa yang memadai
                               <br> e. Kualitas hidup masyarakat meningkat
                               <br> f. Akses ke luar daerah yang mudah
                               <br> g. Teknologi mulai digunakan meskipun masih rendah
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
        <div class="card-body">
            <div class="row">
                <div class="col-lg-12 col-12">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h4>Desa Swasembada
                            </h4>
                            <hr>
                            <text>Masyarakat desa swasembada sudah mampu memanfaatkan dan mengembangkan potensi desa secara optimal. Perkembangan masyarakat sudah sangat baik dan mampu menyerap pengaruh dari daerah luar dengan mudah. Adat sudah tidak lagi berpengaruh pada perekonomian masyarakatnya dan desa berkembang dengan cukup cepat. Ciri-ciri desa swasembada antara lain sebagai berikut :
                               <br> a. Kualitas dan taraf hidup sangat meningkat
                               <br>  b. Mata pencaharian masyarakat beraneka ragam
                               <br>  c. Biasanya terletak disekitar pusat kota
                               <br>  d. Teknologi dan alat modern sudah banyak digunakan
                               <br>  e. Sarana dan prasarana penunjang sudah tersedia
                               <br>  f. Tingkat pendidikan, kesehatan, dan keterampilan tinggi
                               <br>  g. Transportasi antar wilayah sangat mudah diakses
                               <br>  h. Hubungan dengan wilayah lain sudah terjalin dengan baik
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