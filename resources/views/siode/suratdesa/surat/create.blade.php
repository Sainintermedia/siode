@extends('layouts.siode.app')
@section('title', 'Pengaturan Surat')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <a href="{{ route('siode.surat.surat.index') }}" class="btn btn-xs bg-gradient-primary"><i
                                class="fa-solid fa-plus"></i>
                            Kembali</a>
                    </div>
                    <div class="card-tools">

                    </div>
                </div>
                <div class="card-body">
                    @include('siode.suratdesa.surat.partials.alert')
                    <div class="row">
                        <div class="col">
                            <form autocomplete="off" action="{{ route('siode.surat.surat.store') }}" method="post"
                                data-redirect="{{ route('siode.surat.surat.index') }}">
                                @csrf
                                <input type="hidden" class="form-control form-control-alternative" name="isian[]"
                                    value="isian">
                                <input type="hidden" id="urutan" value="1">
                                <input type="hidden" name="jenis_isi[]" value="0">
                                <input type="hidden" name="tampilkan[]" value="0">
                                {{--  <h6 class="heading-small text-muted">Detail Surat</h6>  --}}
                                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                                    <h6 class="mb-0">
                                        <strong>Detail Surat :</strong>
                                    </h6>
                                </div>
                                {{--  <div class="pl-lg-4">  --}}
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Nama Surat</label>
                                            <input class="form-control form-control-sm" name="nama">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label>Icon</label>
                                            @include('layouts.siode.icon')
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Deskripsi</label>
                                    <textarea class="form-control form-control-alternative" name="deskripsi"></textarea>
                                </div>
                                <div class="form-group">
                                    <label>Persyaratan</label>
                                    <textarea class="form-control form-control-alternative" name="persyaratan"
                                        placeholder="Masukkan persyaratan untuk membuat surat yang ditujukan untuk warga"></textarea>
                                </div>
                                {{--  </div>  --}}
                                {{--  <h6 class="heading-small text-muted mt-4">Isian</h6>  --}}
                                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                                    <h6 class="mb-0">
                                        <strong>Isian :</strong>
                                    </h6>
                                </div>
                                <div id="isian"></div>
                                {{--  <h6 class="heading-small text-muted">Alat</h6>  --}}
                                <div class="bg-gray mt-2 mb-2 py-2 px-2">
                                    <h6 class="mb-0">
                                        <strong>Alat :</strong>
                                    </h6>
                                </div>
                                <div class="pl-lg-4">
                                    @include('siode.suratdesa.surat.partials.button-alat')
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tampilkan_surat_ini"
                                            name="tampilkan_surat_ini" value="1">
                                        <input type="hidden" name="tampilkan_surat" id="tampilkan_surat" value="0">
                                        <label class="custom-control-label" for="tampilkan_surat_ini">Tampilkan
                                            surat ini untuk warga yang ingin mencetak surat keterangan ini</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tampilkan_perihal"
                                            name="tampilkan_perihal" value="1">
                                        <input type="hidden" name="perihal" id="perihal" value="0">
                                        <label class="custom-control-label" for="tampilkan_perihal">Perihal</label>
                                        <a href="{{ url('img/bantuan-perihal.png') }}" data-fancybox
                                            data-caption="Akan menampilkan surat seperti ini"><i
                                                class="fas fa-question-circle text-blue" title="Bantuan"
                                                data-toggle="tooltip"></i></a>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input" id="tampilkan_data_kades"
                                            name="tampilkan_data_kades" value="1">
                                        <input type="hidden" name="data_kades" id="data_kades" value="0">
                                        <label class="custom-control-label" for="tampilkan_data_kades">Data
                                            Kades</label> <a href="{{ url('img/bantuan-data-kades.png') }}" data-fancybox
                                            data-caption="Akan menampilkan data kepala desa"><i
                                                class="fas fa-question-circle text-blue" title="Bantuan"
                                                data-toggle="tooltip"></i></a>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" class="custom-control-input"
                                            id="tampilkan_tanda_tangan_bersangkutan"
                                            name="tampilkan_tanda_tangan_bersangkutan" value="1">
                                        <input type="hidden" name="tanda_tangan_bersangkutan"
                                            id="tanda_tangan_bersangkutan" value="0">
                                        <label class="custom-control-label"
                                            for="tampilkan_tanda_tangan_bersangkutan">Tanda tangan
                                            bersangkutan</label> <a
                                            href="{{ url('img/bantuan-tanda-tangan-bersangkutan.png') }}" data-fancybox
                                            data-caption="Akan menampilkan tanda tangan yang bersangkutan"><i
                                                class="fas fa-question-circle text-blue" title="Bantuan"
                                                data-toggle="tooltip"></i></a>
                                    </div>
                                </div>
                                <div class="form-group mt-3">
                                    <button type="submit" class="btn btn-primary btn-block"
                                        id="simpan">SIMPAN</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                </div>

            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{{ URL::asset('assets/dist/plugins/fancybox/jquery.fancybox.css') }}">
    {{--  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" />  --}}
    <style>
        .ikon {
            font-family: fontAwesome;
        }
    </style>
@endpush

@push('scripts')
    <script src="{{ URL::asset('assets/dist/plugins/fancybox/jquery.fancybox.js') }}"></script>
    <script>
        $(document).ready(function() {
            $(".ikon").val("fa-file-text-o");
            $("input:checkbox").change(function() {
                if ($(this).prop('checked') == true) {
                    $(this).next().val('1');
                } else {
                    $(this).next().val('0');
                }
            });
        });
    </script>
    @include('siode.suratdesa.surat.partials.scripts')
@endpush
