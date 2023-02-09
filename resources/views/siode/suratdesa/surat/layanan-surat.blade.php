@extends('layouts.siode.app')
@section('title', 'Pengaturan Surat')
@section('content')
    <div class="row justify-content-center mt-4">
        @forelse ($surat as $item)
            <div class="col-lg-4 col-md-6 surats">
                <div class="single-service animate-up rounded bg-white p-3 shadow">
                    <a href="{{ route('siode.surat.buat-surat', ['id' => $item->id, 'slug' => Str::slug($item->nama)]) }}">
                        <i class="fas {{ $item->icon }} ikon fa-5x mb-3"></i>
                        <h4>{{ $item->nama }}</h4>
                    </a>
                    <p>{{ $item->deskripsi }}</p>
                </div>
            </div>
        @empty
            <div class="col">
                <div class="single-service rounded bg-white shadow">
                    <h4>Data belum tersedia</h4>
                </div>
            </div>
        @endforelse
    </div>
@endsection

@push('styles')
    <script>
        // Your custom JavaScript...
    </script>
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
    <script>
        $(document).ready(function() {
            $('[name="cari"]').on("keyup", function() {
                var value = $(this).val().toLowerCase();
                $("#card .surats").filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                });
            });
        });
    </script>
@endpush
