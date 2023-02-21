@extends('layouts.siode.app')
@section('title', 'Lembaga Desa')
@section('content')
    <div class="row">
        @include('siode.infodesa.lembaga.partials.side')

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <form action="{{ route('siode.infodesa.lembaga.destroy', $lembagafind->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <a type="button" class="btn btn-xs bg-gradient-primary" data-toggle="modal"
                                data-target="#modal-jabatan-{{ $lembagafind->id }}"><i class="fa-solid fa-plus"></i>
                                Tambah Jabatan
                            </a>
                            @if ($lembagafind->lembagajabatan->where('lembaga_id', $lembagafind->id)->count() > 0)
                                <a href="{{ route('siode.infodesa.lembaga.editJabatan', $lembagafind->id) }}"
                                    class="btn btn-xs bg-gradient-warning"><i class="fa-solid fa-pen"></i>
                                    Ubah Struktur</a>
                            @else
                            @endif
                            <button class="btn btn-xs bg-gradient-danger show_confirm" type="submit"><i
                                    class="fa-solid fa-trash"></i>
                                Hapus</button>
                        </form>
                    </div>

                    <div class="card-tools">

                    </div>
                </div>
                <div class="card-body">
                    {{ Str::upper($lembagafind->nama) }}
                    <table class="table-sm table-borderless">

                        @foreach ($lembagafind->lembagajabatan as $jabatan)
                            <tr>
                                <th>{{ Str::upper($jabatan->nama_jabatan) }}</th>
                            </tr>
                        @endforeach
                    </table>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>

    </div>
    <div class="modal fade" id="modal-jabatan-{{ $lembagafind->id }}">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('siode.infodesa.lembaga.storeJabatan', ['lembaga_id' => $lembagafind->id]) }}"
                    method="post">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Lembaga</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="">NAMA JABATAN</label>
                            <input type="text" name="nama_jabatan" class="form-control" required>
                            {{--  <input type="hidden" name="lembaga_id" value="{{ $lembagafind->id }}">  --}}
                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                        <button type="button" class="btn bg-gradient-navy" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn bg-gradient-success">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
    <script src="{{ URL::asset('assets/dist/plugins/sweetalert2/sweetalert.min.js') }}"></script>
    <script type="text/javascript">
        $('.show_confirm').click(function(event) {
            var form = $(this).closest("form");
            var name = $(this).data("name");
            var nama_data = $(this).attr('data-nama');
            event.preventDefault();
            swal({
                    title: `Apakah anda yakin ?`,
                    text: "Data " + nama_data + " yang dihapus tidak dapat dikembalikan!",
                    icon: "warning",
                    buttons: true,
                    dangerMode: true,
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                })
                .then((willDelete) => {
                    if (willDelete) {
                        form.submit();
                        swal(
                            'Terhapus!',
                            'Data berhasil di Hapus!',
                            'success'
                        )
                    }
                });
        });
    </script>
@endpush
