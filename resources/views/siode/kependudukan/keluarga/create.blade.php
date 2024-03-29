@extends('layouts.siode.app')
@section('title', 'Kartu Keluarga')
@section('content')

    <div class="card card-dark card-outline">
        <form method="POST" action="{!! route('siode.kependudukan.kepala-keluarga.store') !!}" enctype="multipart/form-data" autocomplete="off">
            @csrf
            <div class="card-header">
                <div class="card-title">
                    <strong>INPUT DATA KEPALA KELUARGA</strong>
                </div>
            </div>
            <div class="card-body text-sm">
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            <label for="">No Kartu Keluarga</label>
                            <input type="number" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="no_kk" id="no_kk" required>
                        </div>
                    </div>
                </div>
                <div class="bg-gray mb-2 mt-2 px-2 py-2">
                    <h6 class="mb-0">
                        <strong>ALAMAT KARTU KELUARGA :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Provinsi</label>
                            <select class="form-control form-control-sm select2bs4 text-sm" style="text-transform:uppercase"
                                style="width: 100%;" name="provinsi" id="province" required>
                                <option value="" hidden>Pilih Provinsi</option>
                                @foreach ($provinces as $id => $name)
                                    <option value="{{ $id }}">{{ $name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Kabupaten / Kota</label>
                            <select class="form-control form-control-sm select2bs4 text-sm" style="text-transform:uppercase"
                                style="width: 100%;" name="kabkot" id="city" required>
                                <option value="" hidden>Pilih Kab/Kota</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Kecamatan</label>
                            <select class="form-control form-control-sm select2bs4 text-sm" style="text-transform:uppercase"
                                style="width: 100%;" name="kecamatan" id="district" required>
                                <option value="" hidden>Pilih Kab/Kota</option>
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Desa</label>
                            <select class="form-control form-control-sm select2bs4 text-sm" style="text-transform:uppercase"
                                style="width: 100%;" name="desa" id="village" required>
                                <option value="" hidden>Pilih Kab/Kota</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-4 mb-0">
                        <div class="form-group">
                            <label for="">Dusun / Kampung</label>
                            <input type="text" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="kp" id="" required>
                        </div>
                    </div>
                    <div class="col-4">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Rt</label>
                                    <select name="rt" class="form-select form-control form-control-sm text-sm"
                                        style="text-transform:uppercase" name="rt" required>
                                        <option value="" hidden>Pilih RT</option>
                                        {{--  @foreach ($rtrw->whereNotNull('rt')->pluck('rt') as $id => $nama)
                                            <option value="{!! $nama !!}">{!! $nama !!}
                                            </option>
                                        @endforeach  --}}
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="">Rw</label>
                                    <select name="rw" class="form-select form-control form-control-sm text-sm"
                                        style="text-transform:uppercase" name="rw" required>
                                        <option value="" hidden>Pilih RW</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        {{--  @foreach ($rtrw->whereNotNull('rw')->pluck('rw') as $id => $nama)
                                            <option value="{!! $nama !!}">{!! $nama !!}
                                            </option>
                                        @endforeach  --}}
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">

                        <div class="form-group">
                            <label for="">Kode Pos</label>
                            <input type="number" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="kodepos" id="" required>
                        </div>
                    </div>
                </div>
                <div class="bg-gray mb-2 mt-2 px-2 py-2">
                    <h6 class="mb-0">
                        <strong>IDENTITAS KEPALA KELUARGA :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            <label for="">No Induk Keluarga (NIK)</label>
                            <input type="number" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="no_nik" id="no_nik" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nama Lengkap</label>
                            <input type="text" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="nama" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Jenis Kelamin</label>
                            <select class="form-control form-control-sm select2bs4 text-sm"
                                style="text-transform:uppercase" style="width: 100%;" name="jenkel" id=""
                                required>
                                <option value="" hidden>Pilih Jenis Kelamin</option>
                                @foreach ($jeniskelamin as $id => $nama)
                                    <option value="{!! $id !!}">{!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tempat Lahir</label>
                            <input type="text" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="tmpt_lahir" id="" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tanggal Lahir</label>
                            <input type="date" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="tgl_lahir" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Agama</label>
                            <select class="form-control form-control-sm select2bs4 text-sm"
                                style="text-transform:uppercase" style="width: 100%;" name="agama" id=""
                                required>
                                <option value="" hidden>Pilih Agama</option>
                                @foreach ($agama as $id => $nama)
                                    <option value="{!! $id !!}">{!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Pendidikan</label>
                            <select class="form-control form-control-sm select2bs4 text-sm"
                                style="text-transform:uppercase" style="width: 100%;" name="pendidikan"
                                id=""required>
                                <option value="" hidden>Pilih Pendidikan</option>
                                @foreach ($pendidikankeluarga as $id => $nama)
                                    <option value="{!! $id !!}">{!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Jenis Pekerjaan</label>
                            <select class="form-control form-control-sm select2bs4 text-sm"
                                style="text-transform:uppercase" style="width: 100%;" name="jns_pekerjaan"
                                id="" required>
                                <option value="" hidden>Pilih Pekerjaan</option>
                                @foreach ($pekerjaan as $id => $nama)
                                    <option value="{!! $id !!}">{!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Golongan Darah</label>
                            <select class="form-control form-control-sm select2bs4 text-sm"
                                style="text-transform:uppercase" style="width: 100%;" name="gol_darah" id=""
                                required>
                                <option value="" hidden>Pilih Gol. Darah</option>
                                @foreach ($goldarah as $id => $nama)
                                    <option value="{!! $id !!}">{!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="bg-gray mb-2 mt-2 px-2 py-2">
                    <h6 class="mb-0">
                        <strong>STATUS PERKAWINAN :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Status Perkawinan</label>
                            <select class="form-control form-control-sm select2bs4 text-sm"
                                style="text-transform:uppercase" style="width: 100%;" name="sts_perkawinan"
                                id="" required>
                                <option value="" hidden>Pilih Status Perkawinan</option>
                                @foreach ($pernikahan as $id => $nama)
                                    <option value="{!! $id !!}">{!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Tanggal Perkawinan</label>
                            <input type="date" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="tgl_perkawinan" id="tgl_perkawinan">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Hubungan Dalam Keluarga</label>
                            <select class="form-control form-control-sm select2bs4 text-sm"
                                style="text-transform:uppercase" style="width: 100%;" name="sts_hub_kel" id=""
                                required>
                                <option value="1" selected>KEPALA KELUARGA</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="bg-gray mb-2 mt-2 px-2 py-2">
                    <h6 class="mb-0">
                        <strong>KEWARGANEGARAAN :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">Kewarganegaraan</label>
                            <select class="form-control form-control-sm select2bs4 text-sm"
                                style="text-transform:uppercase" style="width: 100%;" name="sts_kwn" id="sts_kawin"
                                required>
                                <option value="" hidden>Pilih Kewarganegaraan</option>
                                @foreach ($kewarganegaraan as $id => $nama)
                                    <option value="{!! $id !!}">{!! $nama !!}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Paspor</label>
                            <input type="number" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="no_paspor" id="no_paspor">
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Kitap</label>
                            <input type="number" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="no_kitap" id="no_kitap">
                        </div>
                    </div>
                </div>
                <div class="bg-gray mb-2 mt-2 px-2 py-2">
                    <h6 class="mb-0">
                        <strong>ORANG TUA :</strong>
                    </h6>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Induk Keluarga (NIK) Ayah</label>
                            <input type="number" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="nik_ayah" id="nik_ayah" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nama Ayah</label>
                            <input type="text" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="nm_ayah" id="" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="form-group">
                            <label for="">No Induk Keluarga (NIK) Ibu</label>
                            <input type="number" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="nik_ibu" id="nik_ibu" required>
                        </div>
                    </div>
                    <div class="col">
                        <div class="form-group">
                            <label for="">Nama ibu</label>
                            <input type="text" class="form-control form-control-sm text-sm"
                                style="text-transform:uppercase" name="nm_ibu" id="" required>
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
@endpush
