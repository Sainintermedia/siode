@extends('layouts.siode.app')
@section('title', 'Pengaturan Surat')
@section('content')

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h3 class="mb-0">Edit Surat</h3>
                    </div>
                </div>
                <div class="card-body">
                    <form autocomplete="off" action="{{ route('siode.surat.surat.update', $surat) }}" method="post">
                        @csrf @method('patch')
                        <input type="hidden" class="form-control form-control-alternative" name="isian[]" value="isian">
                        <input type="hidden" name="jenis_isi[]" value="2">
                        <input type="hidden" name="tampilkan[]" value="0">
                        {{--  <h6 class="heading-small text-muted">Detail Surat</h6>  --}}
                        <div class="bg-gray mt-2 mb-2 py-2 px-2">
                            <h6 class="mb-0">
                                <strong>Detail Surat :</strong>
                            </h6>
                        </div>
                        <div class="pl-lg-4">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Nama Surat</label>
                                        <input class="form-control form-control-alternative" name="nama"
                                            value="{{ $surat->nama }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="form-control-label">Icon</label>
                                        @include('layouts.siode.icon')
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Deskripsi</label>
                                <textarea class="form-control form-control-alternative" name="deskripsi">{{ $surat->deskripsi }}</textarea>
                            </div>
                            <div class="form-group">
                                <label class="form-control-label">Persyaratan</label>
                                <textarea class="form-control form-control-alternative" name="persyaratan"
                                    placeholder="Masukkan persyaratan untuk membuat surat yang ditujukan untuk warga">{{ $surat->persyaratan }}</textarea>
                            </div>
                        </div>
                        {{--  <h6 class="heading-small text-muted">Isian</h6>  --}}
                        <div class="bg-gray mt-2 mb-2 py-2 px-2">
                            <h6 class="mb-0">
                                <strong>Isian :</strong>
                            </h6>
                        </div>
                        <div class="pl-lg-4" id="isian">
                            @if ($surat->perihal == 1)
                                @php
                                    $perihal = [];
                                    foreach ($surat->isiSurat->where('jenis_isi', 4) as $isiSurat) {
                                        array_push($perihal, $isiSurat->isi);
                                    }
                                @endphp
                                <div id="isian_perihal">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Sifat</label>
                                                <input class="form-control form-control-alternative" name="isian[]"
                                                    value="<?php try {
                                                        echo $perihal[0];
                                                    } catch (\Throwable $th) {
                                                    } ?>">
                                                <input type="hidden" name="jenis_isi[]" value="4">
                                                <input type="hidden" name="tampilkan[]" value="0">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Lampiran</label>
                                                <input class="form-control form-control-alternative" name="isian[]"
                                                    value="<?php try {
                                                        echo $perihal[1];
                                                    } catch (\Throwable $th) {
                                                    } ?>">
                                                <input type="hidden" name="jenis_isi[]" value="4">
                                                <input type="hidden" name="tampilkan[]" value="0">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Perihal</label>
                                                <input class="form-control form-control-alternative" name="isian[]"
                                                    value="<?php try {
                                                        echo $perihal[2];
                                                    } catch (\Throwable $th) {
                                                    } ?>">
                                                <input type="hidden" name="jenis_isi[]" value="4">
                                                <input type="hidden" name="tampilkan[]" value="0">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label class="form-control-label">Kepada</label>
                                                <input class="form-control form-control-alternative" name="isian[]"
                                                    value="<?php try {
                                                        echo $perihal[3];
                                                    } catch (\Throwable $th) {
                                                    } ?>">
                                                <input type="hidden" name="jenis_isi[]" value="4">
                                                <input type="hidden" name="tampilkan[]" value="0">
                                            </div>
                                            <div class="form-group">
                                                <label class="form-control-label">Di</label>
                                                <input class="form-control form-control-alternative" name="isian[]"
                                                    value="<?php try {
                                                        echo $perihal[4];
                                                    } catch (\Throwable $th) {
                                                    } ?>">
                                                <input type="hidden" name="jenis_isi[]" value="4">
                                                <input type="hidden" name="tampilkan[]" value="0">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endif
                            @foreach ($surat->isiSurat as $key => $isiSurat)
                                @if ($isiSurat->jenis_isi == 1)
                                    <div class="form-group">
                                        <label class="form-control-label">Paragraf</label> <a
                                            href="{{ url('img/bantuan-paragraf.png') }}" data-fancybox><i
                                                class="fas fa-question-circle text-blue" title="Bantuan"
                                                data-toggle="tooltip"></i></a>
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="checkbox" name="tampil[]" value="1"
                                                        data-toggle="tooltip"
                                                        title="Centang untuk menampilkan paragraf ini pada form buat surat"
                                                        @if ($isiSurat->tampilkan == 1) checked @endif>
                                                    <input type="hidden" name="tampilkan[]"
                                                        value="{{ $isiSurat->tampilkan }}">
                                                </div>
                                            </div>
                                            <textarea class="form-control" name="isian[]">{{ $isiSurat->isi }}</textarea>
                                            <input type="hidden" name="id" value="{{ $isiSurat->id }}">
                                            <input type="hidden" name="jenis_isi[]" value="1">
                                            @include('siode.suratdesa.surat.partials.button-isian')
                                        </div>
                                    </div>
                                @endif
                                @if ($isiSurat->jenis_isi == 2)
                                    <div class="form-group">
                                        <label class="form-control-label">Kalimat</label> <a
                                            href="{{ url('img/bantuan-kalimat.png') }}" data-fancybox><i
                                                class="fas fa-question-circle text-blue" title="Bantuan"
                                                data-toggle="tooltip"></i></a>
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="checkbox" name="tampil[]" value="1"
                                                        data-toggle="tooltip"
                                                        title="Centang untuk menampilkan kalimat ini pada form buat surat"
                                                        @if ($isiSurat->tampilkan == 1) checked @endif>
                                                    <input type="hidden" name="tampilkan[]"
                                                        value="{{ $isiSurat->tampilkan }}">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="isian[]"
                                                value="{{ $isiSurat->isi }}">
                                            <input type="hidden" name="id" value="{{ $isiSurat->id }}">
                                            <input type="hidden" name="jenis_isi[]" value="2">
                                            @include('siode.suratdesa.surat.partials.button-isian')
                                        </div>
                                    </div>
                                @endif
                                @if ($isiSurat->jenis_isi == 3)
                                    <div class="form-group">
                                        <label class="form-control-label">Isian</label>
                                        <div class="input-group input-group-alternative mb-3">
                                            <input type="text" class="form-control" name="isian[]"
                                                value="{{ $isiSurat->isi }}">
                                            <input type="hidden" name="id" value="{{ $isiSurat->id }}">
                                            <input type="hidden" name="jenis_isi[]" value="3">
                                            <input type="hidden" name="tampilkan[]" value="{{ $isiSurat->tampilkan }}">
                                            @include('siode.suratdesa.surat.partials.button-isian')
                                        </div>
                                    </div>
                                @endif
                                @if ($isiSurat->jenis_isi == 5)
                                    <div class="form-group">
                                        <label class="form-control-label">Sub Judul</label> <a
                                            href="{{ url('img/bantuan-kalimat.png') }}" data-fancybox><i
                                                class="fas fa-question-circle text-blue" title="Bantuan"
                                                data-toggle="tooltip"></i></a>
                                        <div class="input-group input-group-alternative mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <input type="checkbox" name="tampil[]" value="1"
                                                        data-toggle="tooltip"
                                                        title="Centang untuk menampilkan kalimat ini pada form buat surat"
                                                        @if ($isiSurat->tampilkan == 1) checked @endif>
                                                    <input type="hidden" name="tampilkan[]"
                                                        value="{{ $isiSurat->tampilkan }}">
                                                </div>
                                            </div>
                                            <input type="text" class="form-control" name="isian[]"
                                                value="{{ $isiSurat->isi }}">
                                            <input type="hidden" name="id" value="{{ $isiSurat->id }}">
                                            <input type="hidden" name="jenis_isi[]" value="5">
                                            @include('siode.suratdesa.surat.partials.button-isian')
                                        </div>
                                    </div>
                                @endif
                            @endforeach
                        </div>
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
                                    name="tampilkan_surat_ini" {{ $surat->tampilkan ? 'checked="true"' : '' }}
                                    value="1">
                                <input type="hidden" name="tampilkan_surat" id="tampilkan_surat"
                                    value="{{ $surat->tampilkan }}">
                                <label class="custom-control-label" for="tampilkan_surat_ini">Tampilkan surat ini untuk
                                    warga yang ingin mencetak surat keterangan ini</label>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="tampilkan_perihal"
                                    name="tampilkan_perihal" {{ $surat->perihal ? 'checked="true"' : '' }}
                                    value="1">
                                <input type="hidden" name="perihal" id="perihal" value="{{ $surat->perihal }}">
                                <label class="custom-control-label" for="tampilkan_perihal">Perihal</label> <a
                                    href="{{ url('img/bantuan-perihal.png') }}" data-fancybox
                                    data-caption="Akan menampilkan surat seperti ini"><i
                                        class="fas fa-question-circle text-blue" title="Bantuan"
                                        data-toggle="tooltip"></i></a>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="tampilkan_data_kades"
                                    name="tampilkan_data_kades" {{ $surat->data_kades ? 'checked="true"' : '' }}
                                    value="1">
                                <input type="hidden" name="data_kades" id="data_kades"
                                    value="{{ $surat->data_kades }}">
                                <label class="custom-control-label" for="tampilkan_data_kades">Data Kades</label> <a
                                    href="{{ url('img/bantuan-data-kades.png') }}" data-fancybox
                                    data-caption="Akan menampilkan data kepala desa"><i
                                        class="fas fa-question-circle text-blue" title="Bantuan"
                                        data-toggle="tooltip"></i></a>
                            </div>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input"
                                    id="tampilkan_tanda_tangan_bersangkutan" name="tampilkan_tanda_tangan_bersangkutan"
                                    {{ $surat->tanda_tangan_bersangkutan ? 'checked="true"' : '' }} value="1">
                                <input type="hidden" name="tanda_tangan_bersangkutan" id="tanda_tangan_bersangkutan"
                                    value="{{ $surat->tanda_tangan_bersangkutan }}">
                                <label class="custom-control-label" for="tampilkan_tanda_tangan_bersangkutan">Tanda tangan
                                    bersangkutan</label> <a href="{{ url('img/bantuan-tanda-tangan-bersangkutan.png') }}"
                                    data-fancybox data-caption="Akan menampilkan tanda tangan yang bersangkutan"><i
                                        class="fas fa-question-circle text-blue" title="Bantuan"
                                        data-toggle="tooltip"></i></a>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button type="submit" class="btn btn-primary btn-block" id="simpan">SIMPAN</button>
                        </div>
                    </form>
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
