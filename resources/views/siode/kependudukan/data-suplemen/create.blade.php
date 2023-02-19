@extends('layouts.siode.app')
@section('title', 'Data Suplemen')
@section('content')
<div class="card card-dark card-outline">
    <form method="POST" action="{!! route('siode.buku.kearsipan.sarpras.sarprasstore') !!}" enctype="multipart/form-data" autocomplete="off">
        @csrf
        <div class="card-header">
            <div class="card-title">
                <strong>INPUT DATA SUPLEMEN DESA</strong>
            </div>
        </div>
        <div class="card-body text-sm">
            <div class="row-md-6">
                <div class="col-md-3">
                    <div class="form-group">
                    
                        <input type="hidden" class="form-control form-control-sm text-sm"
                            style="text-transform:uppercase" name="kode" id="" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                                    <label for="">Sasaran Data</label>
                                    <select name="" id=""
                                        class="form-control form-control-sm select2"
                                        style="text-transform:uppercase">
                                        <option value="">Penduduk</option>
                                        <option value="">Keluarga/KK</option>
                                    </select>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="">Nama Data Suplemen</label>
                        <input type="text" class="form-control form-control-sm text-sm"
                            style="text-transform:uppercase" name="lokasi" id="" required>
                    </div>
                </div>
                <div class="col">
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
                    href="{{ route('siode.kependudukan.data-suplemen.index') }}">
                    {{ trans('Cancel') }}
                </a>
                <input type="submit" value="Submit" class="btn bg-gradient-primary btn-sm">
            </div>
        </div>
    </form>
</div>
@endsection

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
@endpush