@extends('layouts.siode.app')
@section('title', 'Edit Surat')
@section('content')
    @include('siode.suratdesa.surat.partials.alert')
    <div class="card">
        <div class="card-body px-lg-5 py-lg-5">
            <form role="form" action="{{ route('siode.surat.cetak-surat.update', $cetakSurat) }}" method="POST">
                @csrf
                @method('patch')
                <div class="form-group mb">
                    <label for="nomor" class="form-control-label">Nomor Surat</label>
                    <input id="nomor" class="form-control form-control-sm" name="nomor" autofocus
                        placeholder="Masukkan Nomor" value="{{ $cetakSurat->nomor }}" readonly>
                </div>
                @foreach ($cetakSurat->surat->isiSurat as $key => $isiSurat)
                    @if ($isiSurat->jenis_isi == 3)
                        <div class="form-group mb">
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
                        <div class="form-group mb">
                            <label for="{{ $hasil . '' . $k }}" class="form-control-label">{{ $hasil }}</label>
                            <input required id="{{ $hasil . '' . $k }}" class="form-control form-control-sm" name="isian[]"
                                autofocus placeholder="Masukkan {{ $hasil }}">
                        </div>
                    @endforeach
                @endforeach

                @if ($cetakSurat->surat->tanda_tangan_bersangkutan == 1)
                    <div class="form-group mb">
                        <label for="tanda_tangan_bersangkutan" class="form-control-label">Nama yang bersangkutan</label>
                        <input required id="tanda_tangan_bersangkutan" class="form-control form-control-sm" name="isian[]"
                            autofocus placeholder="Masukkan nama yang bersangkutan">
                    </div>
                @endif

                <div class="text-center">
                    <button type="submit" class="btn btn-primary my-4">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
    <script>
        $(document).ready(function() {
            let detailCetak = {!! json_encode($cetakSurat->detailCetak) !!};
            $.each($('[name="isian[]"]'), function(i, e) {
                $(this).val(detailCetak[i].isian)
            });
        });
    </script>
@endpush
