@extends('layouts.siode.app')
@section('title', 'Lembaga Desa')
@section('content')

    <div class="card">
        <div class="card-header">
            <div class="card-title">
                Edit Struktur
            </div>
        </div>
        <form action="{{ route('siode.infodesa.lembaga.updateJabatan', $lembaga->id) }}" method="post">
            @csrf
            @method('PATCH')
            <div class="card-body">
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label for="">Nama Lembaga</label>
                            <input type="text" name="nama" class="form-control form-control-sm"
                                value="{{ Str::upper($lembaga->nama) }}">
                        </div>
                    </div>
                </div>

                <label for="">Jabatan</label>
                @foreach ($lembaga->lembagajabatan as $jabatan)
                    <div class="form-group">
                        {{--  <label class="form-control-label">Jabatan</label>  --}}
                        <div class="input-group input-group-sm input-group-alternative mb-3">
                            <input type="text" class="form-control form-control-sm" name="nama_jabatan[]"
                                value="{{ Str::upper($jabatan->nama_jabatan) }}">
                            {{--  <input type="hidden" name="lembaga_id[]" value="{{ $lembaga->id }}">  --}}
                            <div class="input-group-append input-group-sm">
                                <button type="button" class="btn btn-sm bg-gradient-danger hapus" data-toggle="tooltip"
                                    title="Hapus"><i class="fas fa-trash"></i></button>
                                <button type="button" class="btn bg-gradient-success atas" data-toggle="tooltip"
                                    title="Pindah Ke Atas"><i class="fas fa-arrow-up"></i></button>
                                <button type="button" class="btn bg-gradient-success bawah" data-toggle="tooltip"
                                    title="Pindah Ke Bawah"><i class="fas fa-arrow-down"></i></button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="card-footer">
                <a style="margin-top:0px;" class="btn bg-gradient-secondary btn-sm" style="text-transform:uppercase"
                    href="#">
                    {{ trans('Cancel') }}
                </a>
                <input type="submit" value="Submit" class="btn bg-gradient-primary btn-sm">
            </div>
        </form>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
    <script>
        $(document).on("click", ".atas", function() {
            $(this).tooltip('hide');
            const before = $(this).parent('div').parent('div').parent('div').prev();
            const current = $(this).parent('div').parent('div').parent('div');
            const dataBefore = $(before).html();
            const dataCurrent = $(current).html();
            $(current).html(dataBefore);
            $(before).html(dataCurrent);
        });

        $(document).on("click", ".bawah", function() {
            $(this).tooltip('hide');
            const after = $(this).parent('div').parent('div').parent('div').next();
            const current = $(this).parent('div').parent('div').parent('div');
            const dataAfter = $(after).html();
            const dataCurrent = $(current).html();
            $(current).html(dataAfter);
            $(after).html(dataCurrent);
        });

        $(document).on("click", ".hapus", function() {
            $(this).tooltip('dispose');
            $(this).parent('div').parent('div').parent('div').remove();
        });
    </script>
@endpush
