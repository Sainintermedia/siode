@extends('layouts.siode.app')
@section('title', 'Cetak Surat')
@section('content')
    {{--  <div class="row fixed-top m-3">
        <div class="col-lg-6"></div>
        <div class="col-lg-6">
            @if ($errors->any())
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <span class="alert-icon"><i class="fas fa-exclamation-triangle"></i></span>
                    <span class="alert-text">
                        <strong>Gagal</strong>
                        Data tidak boleh kosong!
                    </span>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            @endif
        </div>
    </div>  --}}
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h4>Surat {{ $surat->nama }}</h4>
            </div>
            <div class="card-tools">

            </div>
        </div>
        <div class="card-body">
            <form role="form"
                action="{{ route('siode.surat.cetak-surat.store', ['id' => $surat->id, 'slug' => Str::slug($surat->nama)]) }}"
                method="POST">
                @csrf
                <div class="form-group">
                    <label for="">No Surat</label>
                    <input type="text" name="" id="" class="form-control form-control-sm"
                        value="{{ $nosurat }}" disabled>
                </div>
                @foreach ($surat->isiSurat as $key => $isiSurat)
                    @if ($isiSurat->jenis_isi == 3)
                        <div class="form-group mb-3">
                            <label for="{{ $isiSurat->isi . '' . $key }}"
                                class="form-control-label">{{ $isiSurat->isi }}</label>

                            <input required id="{{ $isiSurat->isi . '' . $key }}" class="form-control form-control-sm"
                                name="isian[]" autofocus placeholder="Masukkan {{ $isiSurat->isi }}">
                        </div>
                    @endif
                    @if ($isiSurat->tampilkan == 1)
                        <p class="mt-5 mb-0">{{ $isiSurat->isi }}</p>
                    @endif
                    @php
                        $string = $isiSurat->isi;
                        preg_match_all('/\{[A-Za-z\s\(\)]+\}/', $string, $matches);
                    @endphp
                    @foreach ($matches[0] as $k => $value)
                        @php
                            $pertama = substr($value, 1);
                            $hasil = substr($pertama, 0, -1);
                        @endphp
                        <div class="form-group mb-3">
                            <label for="{{ $hasil . '' . $k }}" class="form-control-label">{{ $hasil }}</label>
                            <input required id="{{ $hasil . '' . $k }}" class="form-control form-control-sm" name="isian[]"
                                autofocus placeholder="Masukkan {{ $hasil }}">
                        </div>
                    @endforeach
                @endforeach

                @if ($surat->tanda_tangan_bersangkutan == 1)
                    <div class="form-group mb-3">
                        <label for="tanda_tangan_bersangkutan" class="form-control-label">Nama yang bersangkutan</label>
                        <input required id="tanda_tangan_bersangkutan" class="form-control form-control-sm" name="isian[]"
                            autofocus placeholder="Masukkan nama yang bersangkutan">
                    </div>
                @endif

                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Cetak</button>
                </div>
                <p>{!! nl2br($surat->persyaratan) !!}</p>
            </form>
        </div>
    </div>
@endsection

@push('styles')
    <meta name="description"
        content="Buat {{ $surat->nama }} di Website Desa {{ $desa->nama_desa }}, Kecamatan {{ $desa->nama_kecamatan }}, Kabupaten {{ $desa->nama_kabupaten }}">
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            $("form").submit(function() {
                $(this).children('.text-center').children('button').attr('disabled', 'disabled');
                $(this).children('.text-center').children('button').html(
                    `<img height="20px" src="{{ url('/storage/loading.gif') }}" alt=""> Sedang diproses`
                );
            });
        });
    </script>
@endpush
