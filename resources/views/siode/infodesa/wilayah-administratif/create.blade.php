@extends('layouts.siode.app')
@section('title', 'Wilayah Administratif')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <form action="{{ route('siode.infodesa.wilayah-administratif.store') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">RW</label>
                                    <select name="no_rw" id="no_rw" class="form-control form-control-sm select2bs4"
                                        required>
                                        <option value="">- Pilih -</option>
                                        @foreach ($wilayahrw as $id => $no_rw)
                                            <option value="{{ $id }}">{{ $no_rw }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Nama Dusun</label>
                                    <input type="text" name="nama" class="form-control form-control-sm">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('siode.infodesa.wilayah-administratif.index') }}"
                            class="btn bg-gradient-primary btn-sm">Kembali</a>
                        <button class="btn bg-gradient-success btn-sm">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/plugins/select2/css/select2.min.css') !!}">
    <link rel="stylesheet" href="{!! URL::asset('assets/dist/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css') !!}">
@endpush

@push('scripts')
    <script src="{!! URL::asset('assets/dist/plugins/select2/js/select2.full.min.js') !!}"></script>
    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        });
    </script>
@endpush
