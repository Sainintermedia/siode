@extends('layouts.siode.app')
@section('title', 'Pengaturan Surat')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-outline card-dark">
                <div class="card-header">
                    <div class="card-title">
                        <a href="{{ route('siode.surat.surat.create') }}" class="btn btn-xs bg-gradient-primary"><i
                                class="fa-solid fa-plus"></i>
                            Tambah</a>
                    </div>
                    <div class="card-tools">

                    </div>
                </div>
                <div class="card-body">
                    <div class="row">
                        @forelse ($surat as $item)
                            <div class="col-lg-3 col-6">
                                <div class="small-box bg-{{ $item->colour }}">
                                    <div class="inner">
                                        <h3>Surat</h3>
                                        <p>{{ $item->nama }}</p>
                                        @if ($item->cetakSurat->count() > 0)
                                            <p>Telah dicetak sebanyak
                                                {{ $item->cetakSurat->count() }}x</p>
                                        @endif
                                    </div>
                                    <a
                                        href="{{ route('siode.surat.buat-surat', ['id' => $item->id, 'slug' => Str::slug($item->nama)]) }}">
                                        <div class="icon">
                                            <i class="fas {{ $item->icon }}"></i>
                                        </div>
                                    </a>
                                    <span class="small-box-footer">
                                        <form method="POST" action="{!! route('siode.surat.surat.destroy', $item->id) !!}" class="text-center">
                                            @csrf
                                            @method('delete')
                                            <a href="{{ route('siode.surat.surat.edit', $item) }}"
                                                class="btn btn-xs bg-gradient-primary"><i class="fas fa-edit"></i>
                                                Edit</a>
                                            <button class="btn btn-xs bg-gradient-danger show_confirm"
                                                data-nama="{{ $item->nama }}" type="submit"><i class="fas fa-trash"></i>
                                                Hapus</button>
                                        </form>
                                    </span>
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
                    {{--  <div id="card" class="row justify-content-center mt-4">
                        @forelse ($surat as $item)
                            <div class="col-lg-4 col-md-6 small-box bg-info">
                                <div class="single-service rounded bg-white shadow">
                                    <a
                                        href="{{ route('siode.surat.buat-surat', ['id' => $item->id, 'slug' => Str::slug($item->nama)]) }}">
                                        <i class="fa-solid {{ $item->icon }}"></i>
                                        <h4>{{ $item->nama }}</h4>
                                    </a>
                                    <p>{{ $item->deskripsi }}</p>
                                    @if ($item->cetakSurat->count() > 0)
                                        <p class="text-muted text-sm">Telah dicetak sebanyak
                                            {{ $item->cetakSurat->count() }}x</p>
                                    @endif
                                    @if ($item->tampilkan == 0)
                                        <p class="font-weight-bold">(Belum ditampilkan)</p>
                                        <a href="{{ route('buat-surat', ['id' => $item->id, 'slug' => Str::slug($item->nama)]) }}"
                                            class="btn btn-sm btn-success" title="Cetak"><i class="fas fa-print"></i>
                                            Coba
                                            cetak</a>
                                    @endif
                                    <form method="POST" action="{!! route('siode.surat.surat.destroy', $item->id) !!}" class="text-center">
                                        @csrf
                                        @method('delete')
                                        <a href="{{ route('siode.surat.surat.edit', $item) }}"
                                            class="btn btn-sm btn-primary" title="Edit"><i class="fas fa-edit"></i>
                                            Edit</a>
                                        <a class="btn btn-sm btn-danger show_confirm" data-nama="{{ $item->nama }}"
                                            type="submit"><i class="fas fa-trash"></i> Hapus</a>
                                    </form>
                                </div>
                            </div>
                        @empty
                            <div class="col">
                                <div class="single-service rounded bg-white shadow">
                                    <h4>Data belum tersedia</h4>
                                </div>
                            </div>
                        @endforelse
                    </div>  --}}
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>


    {{--  <div class="modal fade" id="modal-hapus" tabindex="-1" role="dialog" aria-labelledby="modal-hapus" aria-hidden="true">
        <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
            <div class="modal-content bg-gradient-danger">

                <div class="modal-header">
                    <h6 class="modal-title" id="modal-title-delete">Hapus Surat?</h6>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>

                <div class="modal-body">

                    <div class="py-3 text-center">
                        <i class="ni ni-bell-55 ni-3x"></i>
                        <h4 class="heading mt-4">Perhatian!!</h4>
                        <p>Menghapus surat akan menghapus semua data yang dimilikinya</p>
                        <p><strong id="nama-hapus"></strong></p>
                    </div>

                </div>

                <div class="modal-footer">
                    <form id="form-hapus" action="" method="POST">
                        @csrf @method('DELETE')
                        <button type="submit" class="btn btn-white">Yakin</button>
                    </form>
                    <button type="button" class="btn btn-link ml-auto text-white" data-dismiss="modal">Tidak</button>
                </div>

            </div>
        </div>
    </div>  --}}
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
