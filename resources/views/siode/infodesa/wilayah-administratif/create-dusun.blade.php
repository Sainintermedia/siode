@extends('layouts.siode.app')
@section('title', 'Dusun')
@section('content')

    <div class="row">
        <div class="col-md">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h6>Tambah data dusun</h6>
                    </div>
                </div>
                <form action="{{ route('siode.infodesa.wilayah-administratif.store.dusun') }}" method="post"
                    autocomplete="off">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">Nama Dusun</label>
                                    <input type="text" name="nama_dusun" class="form-control form-control-sm"
                                        value="{{ old('nama_dusun') }}" required>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('siode.infodesa.wilayah-administratif.index') }}"
                            class="btn bg-gradient-dark btn-sm">Kembali</a>
                        <button type="submit" class="btn btn-sm bg-gradient-success">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
