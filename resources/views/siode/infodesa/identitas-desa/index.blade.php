@extends('layouts.siode.app')
@section('title', 'Identitas Desa')
@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-dark card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        {{--  <img class="profile-user-img img-fluid img-circle" src="{{ URL::asset('images/desa.png') }}"
                            alt="User profile picture">  --}}
                        <a href="{{ asset(Storage::url($desa->logo)) }}" data-fancybox>
                            <img id="logo" src="{{ asset(Storage::url($desa->logo)) }}"
                                alt="{{ asset(Storage::url($desa->logo)) }}" class="rounded-circle"
                                style="height: 150px; width: 150px; object-fit: cover">
                    </div>
                    <div class="card-header pt-md-1 pb-md-1 border-0 pb-0 text-center">
                        <a id="btn-ganti-logo" href="#input-logo" class="btn btn-sm btn-default mt-1"><span
                                class="fas fa-camera"></span> Ganti</a>
                    </div>
                    <h3 class="profile-username text-center">Logo Desa {{ $desa->nama_desa }}</h3>
                </div>
            </div>
            <div class="card card-dark card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <a href="{{ asset(Storage::url($desa->gambar)) }}" data-fancybox>
                            <img id="desa" src="{{ asset(Storage::url($desa->gambar)) }}"
                                alt="{{ asset(Storage::url($desa->gambar)) }}" class="rounded-rectangle"
                                style="height: 150px; width: 300px; object-fit: cover">
                        </a>
                    </div>
                    <div class="card-header pt-md-1 pb-md-1 border-0 pb-0 text-center">
                        <a id="btn-ganti-gambar" href="#input-gambar" class="btn btn-sm btn-default mt-1"><span
                                class="fas fa-camera"></span> Ganti</a>
                    </div>
                    <h3 class="profile-username text-center">Foto Desa {{ $desa->nama_desa }}</h3>
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
                                    value="{{ $desa->nama_desa }}" required readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-4 mb-0">
                            <div class="form-group">
                                <label for="">Dusun / Kampung</label>
                                <input type="text" class="form-control form-control-sm text-sm"
                                    style="text-transform:uppercase" value="{{ $desa->dusun }}" required readonly>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">RT</label>
                                <input type="text" value="{{ $desa->rt }}" class="form-control form-control-sm"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">RW</label>
                                <input type="text" value="{{ $desa->rw }}" class="form-control form-control-sm"
                                    readonly>
                            </div>
                        </div>
                        <div class="col-md">
                            <div class="form-group">
                                <label for="">Kode Pos</label>
                                <input type="text" value="{{ $desa->kodepos }}" class="form-control form-control-sm"
                                    readonly>
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

        <input type="file" name="logo" id="input-logo" style="display: none">
        <input type="file" name="gambar" id="input-gambar" style="display: none">
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/plugins/select2/css/select2.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">
@endpush

@push('scripts')
    <script src="{!! URL::asset('assets/dist/plugins/select2/js/select2.full.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/dist/plugins/axios/axios.min.js') !!}"></script>
    <script>
        $(document).ready(function() {
            $('#btn-ganti-logo').on('click', function() {
                $('#input-logo').click();
            });
            $('#input-logo').on('change', function() {
                if (this.files && this.files[0]) {
                    let formData = new FormData();
                    let oFReader = new FileReader();
                    formData.append("logo", this.files[0]);
                    formData.append("_method", "patch");
                    formData.append("_token", "{{ csrf_token() }}");
                    oFReader.readAsDataURL(this.files[0]);

                    $.ajax({
                        url: "{{ route('siode.infodesa.identitas-logo.update', $desa) }}",
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        cache: false,
                        processData: false,
                        beforeSend: function() {
                            $('#img-logo').attr('src', "{{ url('/storage/loading.gif') }}");
                        },
                        success: function(data) {
                            if (data.error) {
                                $('#img-logo').attr('src', $("#img-logo").attr('alt'));
                            } else {
                                location.reload();
                            }
                        }
                    });
                }
            });

            $('#btn-ganti-gambar').on('click', function() {
                $('#input-gambar').click();
            });
            $('#input-gambar').on('change', function() {
                if (this.files && this.files[0]) {
                    let formData = new FormData();
                    let oFReader = new FileReader();
                    formData.append("gambar", this.files[0]);
                    formData.append("_method", "patch");
                    formData.append("_token", "{{ csrf_token() }}");
                    oFReader.readAsDataURL(this.files[0]);

                    $.ajax({
                        url: "{{ route('siode.infodesa.identitas-gambar.update', $desa) }}",
                        type: 'POST',
                        data: formData,
                        contentType: false,
                        cache: false,
                        processData: false,
                        beforeSend: function() {
                            $('#img-gambar').attr('src', "{{ url('/storage/loading.gif') }}");
                        },
                        success: function(data) {
                            if (data.error) {
                                $('#img-gambar').attr('src', $("#img-gambar").attr('alt'));
                            } else {
                                location.reload();
                            }
                        }
                    });
                }
            });
        })
    </script>
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
