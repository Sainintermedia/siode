@extends('layouts.siode.app')
@section('title', 'Buku Tanah Kas Desa')
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
                            <tr>
                            <td rowspan="3">NO</td>
                            <td colspan="4" rowspan="3" class="text-center">Asal Tanah Kas Desa<br>&nbsp;&nbsp;&nbsp;<br>&nbsp;&nbsp;&nbsp;</td>
                            <td rowspan="3"class="text-center">Nomor Sertifikat Buku Letter C/ Persil</td>
                            <td colspan="3" rowspan="3"class="text-center" >Luas</td>
                            <td colspan="3" rowspan="3" class="text-center">Kelas</td>
                            <td colspan="9" class="text-center">Perolehan Tanah Kas Desa</td>
                            <td colspan="5" class="text-center">Tanah Kas Desa</td>
                            <td colspan="2" class="text-center">Patok Tanda Batas</td>
                            <td colspan="2"class="text-center" >Papan <br>Nama</td>
                            <td colspan="2" rowspan="3" class="text-center">Lokasi</td>
                            <td colspan="2" rowspan="3" class="text-center" >Peruntukan<br> <br> </td>
                            <td rowspan="3">Mutasi</td>
                            <td rowspan="3">Ket</td>
                            </tr>
                            <tr>
                            <td rowspan="2">Asli Milik Desa</td>
                            <td colspan="3" class="text-center" >Bantuan</td>
                            <td colspan="2" rowspan="2">Lain Lain</td>
                            <td colspan="3" rowspan="2">Tgl Perole<br>han</td>
                            <td rowspan="2">Sa<br>wah</td>
                            <td rowspan="2">Te<br>gal</td>
                            <td rowspan="2">Ke<br>bun</td>
                            <td rowspan="2">Tambak/ Kolam</td>
                            <td rowspan="2">tanah <br>Kering<br>/Darat</td>
                            <td rowspan="2">Ada</td>
                            <td rowspan="2">tdk Ada</td>
                            <td rowspan="2">Ada</td>
                            <td rowspan="2">Tidak <br>Ada</td>
                            </tr>
                            <tr>
                            <td>Pemerintah</td>
                            <td>Prov</td>
                            <td>Kab / Kota</td>
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
