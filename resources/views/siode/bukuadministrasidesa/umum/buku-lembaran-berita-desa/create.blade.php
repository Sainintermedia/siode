@extends('layouts.siode.app')
@section('title', 'Buku Lembaran Dan Berita Desa')
@section('content')

    <div class="card card-dark card-outline">
        <form method="POST" action="{!! route('siode.buku.kearsipan.sarpras.sarprasstore') !!}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="card-header">
                <div class="card-title">
                    <strong>INPUT DATA BUKU KEPUTUSAN KEPALA DESA</strong>
                </div>
            </div>
            <div class="card-body text-sm">
                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                    <h6 class="mb-0">
                        <strong>BUKU KEPALA DESA :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Nomor Dan Tanggal Keputusan Kepala Desa</label>
                            <input type="text" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="kode" id="" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Tentang</label>
                            <input type="text" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="sarpras" id="" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Uraian Singkat</label>
                            <textarea type="text" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="lokasi" id="" required>
                            </textarea>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Nomor Dan Tanggal Di Laporkan</label>
                            <input type="text" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="kondisi" id="" required>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            <label for="">Keterangan</label>
                            <input type="text" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="kondisi" id="" required>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <div class="col-6">
                    <a style="margin-top:0px;" class="btn bg-gradient-secondary btn-sm" style="text-transform:uppercase"
                        href="#">
                        {{ trans('Cancel') }}
                    </a>
                    <input type="submit" value="Submit" class="btn bg-gradient-primary btn-sm">
                </div>
            </div>
        </form>
    </div>
@endsection
{{-- 
@push('styles')
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/plugins/select2/css/select2.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">
@endpush

@push('scripts')
    <script src="{!! URL::asset('assets/dist/plugins/select2/js/select2.full.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/dist/plugins/axios/axios.min.js') !!}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })


            // Depent dropdown
            $('#province').on('change', function() {
                axios.post('{{ route('dependent-dropdown.store.city') }}', {
                        id: $(this).val()
                    })
                    .then(function(response) {
                        $('#city').empty();

                        $.each(response.data, function(id, name) {
                            $('#city').append(new Option(name, id))
                        })
                    });
            });
            $('#city').on('change', function() {
                axios.post('{{ route('dependent-dropdown.store.district') }}', {
                        id: $(this).val()
                    })
                    .then(function(response) {
                        $('#district').empty();

                        $.each(response.data, function(id, name) {
                            $('#district').append(new Option(name, id))
                        })
                    });
            });
            $('#district').on('change', function() {
                axios.post('{{ route('dependent-dropdown.store.village') }}', {
                        id: $(this).val()
                    })
                    .then(function(response) {
                        $('#village').empty();

                        $.each(response.data, function(id, name) {
                            $('#village').append(new Option(name, id))
                        })
                    });
            });
            // end depentdropdown
        })
    </script>
@endpush --}}
