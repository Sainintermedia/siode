@extends('layouts.siode.app')
@section('title', 'Identitas Desa')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle" src="{{ URL::asset('images/desa.png') }}"
                            alt="User profile picture">
                    </div>
                    <h3 class="profile-username text-center">Nina Mcintire</h3>
                    <p class="text-muted text-center">Software Engineer</p>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Pilih Logo</label>
                            </div>
                            <div class="input-group-append">
                                <a class="input-group-text btn" href="#input-logo">Ganti</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <div class="col-sm invoice-col">
                            <img src="https://3dwarehouse.sketchup.com/warehouse/v1.0/content/public/50f1e0af-5dcb-489e-ad45-c57a3c7cf6ab"
                                class="img-fluid" alt="black sample">
                            </a>
                        </div>
                    </div>

                    <h3 class="profile-username text-center">Nina Mcintire</h3>
                    <p class="text-muted text-center">Software Engineer</p>
                    <div class="form-group">
                        <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="exampleInputFile">
                                <label class="custom-file-label" for="exampleInputFile">Pilih Foto Desa</label>
                            </div>
                            <div class="input-group-append">
                                <a class="input-group-text btn" href="#input-logo">Ganti</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card card-dark card-outline table-responsive">
                <div class="card-header">
                    <div class="card-title">
                        <h4>Identitas Profil Desa</h4>
                    </div>
                    <div class="card-tools">
                        <button class="btn btn-xs bg-gradient-info" type="button" id="button-addon2" data-toggle="modal"
                            data-target="#ubah-{{ $desa->id }}">Ubah Data</button>
                    </div>

                    <div class="modal fade" id="ubah-{{ $desa->id }}" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content rounded-0 text-sm">
                                <div class="modal-header">
                                    <h5 class="modal-title">Edit data rw</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Provinsi</label>
                                                <select class="form-control form-control-sm select2"
                                                    style="text-transform:uppercase" name="provinsi" id="province"
                                                    required>
                                                    <option value="" hidden>Pilih Provinsi</option>
                                                    @foreach ($provinces as $id => $name)
                                                        <option value="{{ $id }}">{{ $name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Kabupaten / Kota</label>
                                                <select class="form-control form-control-sm select2"
                                                    style="text-transform:uppercase" name="kabkot" id="city" required>
                                                    <option value="" hidden>Pilih Kab/Kota</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Kecamatan</label>
                                                <select class="form-control form-control-sm select2"
                                                    style="text-transform:uppercase" name="kecamatan" id="district"
                                                    required>
                                                    <option value="" hidden>Pilih Kab/Kota</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Desa</label>
                                                <select class="form-control form-control-sm select2"
                                                    style="text-transform:uppercase" name="desa" id="village" required>
                                                    <option value="" hidden>Pilih Kab/Kota</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Dusun / Kampung</label>
                                                <input type="text" class="form-control form-control-sm text-sm"
                                                    style="text-transform:uppercase" name="kp" id=""
                                                    required>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Kode Pos</label>
                                                <input type="text" name="kodepos"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">RT</label>
                                                <select name="" id=""
                                                    class="form-control form-control-sm select2"
                                                    style="text-transform:uppercase">
                                                    <option value="">001</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">RW</label>
                                                <select name="" id=""
                                                    class="form-control form-control-sm select2"
                                                    style="text-transform:uppercase">
                                                    <option value="">001</option>
                                                </select>
                                            </div>
                                        </div>
                                        {{--  <div class="col-md">
                                            
                                        </div>  --}}
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Nama Kepala Desa</label>
                                                <input type="text" name="nama_kepala_desa"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Alamat Kepala Desa</label>
                                                <input type="text" name="almaat_kepala_desa"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Nama Camat</label>
                                                <input type="text" name="nama_kepala_desa"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </div>
                                        <div class="col-md">
                                            <div class="form-group">
                                                <label for="">Alamat Camat</label>
                                                <input type="text" name="almaat_kepala_desa"
                                                    class="form-control form-control-sm">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="card-body table-responsive">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Provinsi</label>
                                <input class="form-control form-control-sm" style="text-transform:uppercase"
                                    value="{{ $desa->nama_provinsi }}" readonly>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Kabupaten / Kota</label>
                                <input class="form-control form-control-sm" style="text-transform:uppercase"
                                    value="{{ $desa->nama_kabupaten }}" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Kecamatan</label>
                                <input class="form-control form-control-sm" style="text-transform:uppercase"
                                    value="{{ $desa->nama_kecamatan }}" readonly>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Desa</label>
                                <input class="form-control form-control-sm" style="text-transform:uppercase"
                                    value="{{ $desa->nama_desa }}" required>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mb-0">
                            <div class="form-group">
                                <label for="">Dusun / Kampung</label>
                                <input type="text" class="form-control form-control-sm text-sm"
                                    style="text-transform:uppercase" value="{{ $desa->alamat_desa }}" required>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">RT</label>
                                <select name="" id="" class="form-control form-control-sm select2"
                                    style="text-transform:uppercase">
                                    <option value="">001</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">RW</label>
                                <select name="" id="" class="form-control form-control-sm select2"
                                    style="text-transform:uppercase">
                                    <option value="">001</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Kode Pos</label>
                                <input type="text" name="kodepos" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Nama Kepala Desa</label>
                                <input type="text" name="nama_kepala_desa" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Alamat Kepala Desa</label>
                                <input type="text" name="almaat_kepala_desa" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Nama Camat</label>
                                <input type="text" name="nama_kepala_desa" class="form-control form-control-sm">
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Alamat Camat</label>
                                <input type="text" name="almaat_kepala_desa" class="form-control form-control-sm">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer clearfix">
                    {{--  <div class="form-group">
                        <label for="">Ketua Rw</label>
                        <input type="text" id='ketua' class="form-control form-control-sm" name="ketua"
                            value="" required>
                    </div>  --}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">

    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/plugins/select2/css/select2.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">
    {{--  <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/dist/plugins/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('assets/dist/plugins/jquery-ui/jquery-ui.theme.min.css') }}">
    @include('siode.infodesa.wilayah-administratif.rw.partials.styles')  --}}
@endpush

@push('scripts')
    <script src="{!! URL::asset('assets/dist/plugins/select2/js/select2.full.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/dist/plugins/axios/axios.min.js') !!}"></script>
    {{--  <script src="{{ URL::asset('assets/dist/plugins/jquery/jquery.min.js') }}" type="text/javascript"></script>  --}}
    {{--  <script src="{{ URL::asset('assets/dist/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>  --}}
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

    {{--  <script type="text/javascript">
        // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function() {

            $("#ketua").autocomplete({
                source: function(request, response) {
                    // Fetch data
                    $.ajax({
                        url: "{{ route('siode.infodesa.rw.autocomplete') }}",
                        type: 'POST',
                        data: {
                            search: request.term,
                            _token: '{{ csrf_token() }}',
                        },
                        dataType: "json",
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                select: function(event, ui) {
                    // Set selection
                    $('#ketua').val(ui.item.label);
                    $('#nonik').val(ui.item.nonik);
                    return false;
                },
                //appendTo: "#ketuarw",
            });

            $("#editketua").autocomplete({
                source: function(request, response) {
                    // Fetch data
                    $.ajax({
                        url: "{{ route('siode.infodesa.rw.autocomplete') }}",
                        type: 'POST',
                        data: {
                            search: request.term,
                            _token: '{{ csrf_token() }}',
                        },
                        dataType: "json",
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                select: function(event, ui) {
                    // Set selection
                    $('#editketua').val(ui.item.label);
                    $('#nonikedit').val(ui.item.nonik);
                    return false;
                },
                //appendTo: "#edit-/*",
            });

        });
    </script>  --}}
@endpush
