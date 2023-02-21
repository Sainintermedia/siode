@extends('layouts.siode.app')
@section('title', 'Wilayah Administratif')
@section('content')
    <div class="row">

        <div class="col-md">
            @include('siode.infodesa.wilayah-administratif.partials.side')
        </div>

        <div class="col-md-9">
            <div class="card">
                <div class="card-header">
                    <a href="{{ route('siode.infodesa.wilayah-administratif.createWilayah', ['id' => $wilayahfind->id, Str::slug($wilayahfind->nama)]) }}"
                        class="btn bg-gradient-primary btn-sm">Tambah</a>
                    <a href="{{ route('siode.infodesa.wilayah-administratif.createWilayah', ['id' => $wilayahfind->id, Str::slug($wilayahfind->nama)]) }}"
                        class="btn bg-gradient-primary btn-sm">Tambah</a>
                </div>
                <div class="card-body">

                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>

    </div>

@endsection

@push('styles')
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.1/bootstrap3-typeahead.min.js"></script>
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
