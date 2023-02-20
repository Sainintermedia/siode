@extends('layouts.siode.app')
@section('title', 'Buku Aparat Pemerintah Desa')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark card-outline table-responsive">
                <div class="card-header">
                    <div class="card-title">
                        {{-- {{ route('siode.buku.kearsipan.sarpras.sarprascreate') }} --}}
                        <a href="{{ route('siode.buku.umum.keputusankepaladesa.create') }}"
                            class="btn btn-xs bg-gradient-primary"><i class="fa-solid fa-plus"></i>
                            Tambah</a>
                    </div>
                    <div class="card-tools">
                        <div class="input-group input-group-sm" style="width: 250px;">
                            <input type="text" name="table_search" class="form-control float-right"
                                placeholder="Cari...">
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
                                <th style="width: 1%">Aksi</th>
                                <th>Nama</th>
                                <th>NIAP</th>
                                <th>NIP</th>  
                                <th>Jenis Kelamin</th> 
                                <th>Tempat Dan Tanggal</th> 
                                    <th>Jenis Kelamin</th> 
                                <th>Uraian Singkat</th>
                                <th>Nomor Dan Tanggal Di Laporkan</th>
                                <th>Keterangan</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @forelse ($sarpras as $value => $fm) --}}
                                <tr class="text-center">
                                    <td class="text-center">##</td>
                                    <td class="text-center">
                                        <div class="btn-group text-center">
                                            <button type="button"
                                                class="btn bg-gradient-success dropdown-toggle dropdown-icon btn-xs"
                                                data-toggle="dropdown">
                                                <span class="bg-gradient-success sr-only">Toggle Dropdown</span>
                                            </button>
                                            <div class="dropdown-menu" role="menu">
                                                <form method="POST" action="#" class="text-center">
                                                    @csrf
                                                    @method('delete')
                                                    <a class="dropdown-item bg-gradient-info"
                                                        href="#"><i
                                                            class="fa-solid fa-eye"></i>
                                                        View</a>
                                                    <a class="dropdown-item bg-gradient-warning"
                                                        href="#"><i
                                                            class="fa-solid fa-pen"></i>
                                                        Edit</a>
                                                    <a class="dropdown-item bg-gradient-danger show_confirm"
                                                        data-nama="#" type="submit"><i
                                                            class="fa-solid fa-trash"></i>
                                                        Delete</a>
                                                </form>
                                            </div>
                                        </div>
                                    </td>
                                    <td>#</td>
                                    <td>#</td>
                                    <td style="text-transform:uppercase">#</td>
                                    <td style="text-transform:uppercase" class="text-center">#</td>
                                    <td style="text-transform:uppercase" class="text-center">#</td>
                                    <td style="text-transform:uppercase" class="text-center">#</td>
                                </tr>
                            {{-- @empty --}}
                                <h4>tidak ada data</h4>
                            {{-- @endforelse --}}
                        </tbody>
                        <tfoot>
                            <tr class="text-center">
                                <th style="width: 1%">No</th>
                                <th>Aksi</th>
                                <th>Nomor Dan Tanggal Keputusan Kepala Desa</th>
                                <th>Tentang</th>
                                <th>Uraian Singkat</th>
                                <th>Nomor Dan Tanggal Di Laporkan</th>
                                <th>Keterangan</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                {{-- <div class="card-footer clearfix">

                    Halaman : {{ $sarpras->currentPage() }} <br />
                    Jumlah Data : {{ $sarpras->total() }} <br />
                    Data Per Halaman : {{ $sarpras->perPage() }}
                    <ul class="pagination pagination-sm float-right m-0">
                        {{ $sarpras->links() }}
                    </ul>
                </div> --}}
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
