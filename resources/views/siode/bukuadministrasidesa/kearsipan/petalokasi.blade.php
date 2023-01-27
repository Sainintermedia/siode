@extends('layouts.siode.app')
@section('title', 'Peta Lokasi')
@section('content')
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <P>Wilayah Administratif Desa</P>
                </h3>
            {{-- <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 250px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div> --}}
        </div>
        <div class="card-body">
           
                    {{-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31728.614323634192!2d106.37351131281362!3d-6.253613160295355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4204f51b3345dd%3A0x3a2c7b3f6c6ea7f2!2sCarenang%2C%20Kec.%20Cisoka%2C%20Kabupaten%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1674764607736!5m2!1sid!2sid" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> --}}
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31728.614323634192!2d106.37351131281362!3d-6.253613160295355!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e4204f51b3345dd%3A0x3a2c7b3f6c6ea7f2!2sCarenang%2C%20Kec.%20Cisoka%2C%20Kabupaten%20Tangerang%2C%20Banten!5e0!3m2!1sid!2sid!4v1674765333229!5m2!1sid!2sid" width="1200" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
           
        </div>
    </div>
@endsection