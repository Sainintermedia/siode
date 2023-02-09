@extends('layouts.siode.app')
@section('title', 'Cetak Surat')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark card-outline table-responsive">
                <div class="card-header">
                    {{--  <div class="card-title">
                        <a href="{{ route('siode.kependudukan.kepala-keluarga.create') }}"
                            class="btn btn-xs bg-gradient-primary"><i class="fa-solid fa-plus"></i>
                            Tambah</a>
                        <a href="{{ route('siode.kependudukan.kartu-keluarga.view-delete') }}"
                            class="btn btn-xs bg-gradient-danger"><i class="fa-solid fa-trash"></i> Trash</a>
                    </div>  --}}
                    <div class="card-title">
                        <h5>Jenis Surat</h5>
                    </div>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <input type="text" name="table_search" class="form-control float-right" placeholder="Cari...">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-default">
                                    <i class="fas fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table id="example1"
                        class="table-bordered table-hover table-striped rounded-0 table-sm table py-0 text-sm">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 1%">No</th>
                                <th>Nama</th>
                                <th>Kode</th>
                                <th>Dicetak</th>
                                <th>Tampil</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($surat as $value => $item)
                                <tr class="text-center">
                                    <th>{{ $surat->firstItem() + $value }}</th>
                                    <td>{{ $item->nama }}</td>
                                    <td>{{ $item->kode_surat }}</td>
                                    <td>{{ $item->count }}</td>
                                    <td>
                                        @if ($item->tampilkan == 0)
                                            <p class="font-weight-bold">(Belum ditampilkan)</p>
                                            {{--  <a href="{{ route('siode.surat.surat.edit', $item) }}"
                                                class="btn btn-sm btn-success" title="Cetak"><i class="fas fa-print"></i>
                                                Coba cetak</a>  --}}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('siode.surat.surat.indexView', ['id' => $item->id, 'slug' => Str::slug($item->nama)]) }}"
                                            class="btn btn-xs bg-gradient-success" title="Cetak"><i
                                                class="fas fa-print"></i>
                                            Cek Surat</a>
                                    </td>
                                </tr>
                            @empty
                                <div class="col">
                                    <div class="single-service rounded bg-white shadow">
                                        <h4>Data belum tersedia</h4>
                                    </div>
                                </div>
                            @endforelse
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer clearfix">

                    Halaman : {{ $surat->currentPage() }} <br />
                    Jumlah Data : {{ $surat->total() }} <br />
                    Data Per Halaman : {{ $surat->perPage() }}
                    <ul class="pagination pagination-sm float-right m-0">
                        {{ $surat->links() }}
                    </ul>
                </div>
            </div>
        </div>
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
@endpush
