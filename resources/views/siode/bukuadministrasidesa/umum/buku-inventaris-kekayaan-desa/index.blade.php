@extends('layouts.siode.app')
@section('title', 'Buku Inventaris Kekayaan Desa')
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
                    <table style="example1" class="table table-bordered">
                        {{-- <colgroup>
                        <col style="width: 32.2px">
                        <col style="width: 100.2px">
                        <col style="width: 54.2px">
                        <col style="width: 82.2px">
                        <col style="width: 61.2px">
                        <col style="width: 90.2px">
                        <col style="width: 38.2px">
                        <col style="width: 50.2px">
                        <col style="width: 50.2px">
                        <col style="width: 46.2px">
                        <col style="width: 104.2px">
                        <col style="width: 82.2px">
                        <col style="width: 38.2px">
                        <col style="width: 50.2px">
                        <col style="width: 32.2px">
                        </colgroup> --}}
                        <thead>
                          <tr>
                            <td rowspan="3" class="text-center">NO</td>
                            <td rowspan="3" class="text-center">Jenis Barang /<br>Bangunan</td>
                            <td colspan="4" class="text-center" >Asal Barang / Bangunan</td>
                            <td colspan="2" class="text-center">Keadaan</td>
                            <td colspan="4" class="text-center" >Penghapusan Barang </td>
                            <td colspan="2" class="text-center">Keadaan</td>
                            <td rowspan="2" class="text-center">Ket</td>
                          </tr>
                          <tr>
                            <td rowspan="2"class="text-center" >Dbeli<br>Sendiri</td>
                            <td colspan="3" class="text-center">Bantuan</td>
                            <td rowspan="2" class="text-center">Baik</td>
                            <td rowspan="2" class="text-center">Rusak</td>
                            <td rowspan="2" class="text-center">Rusak</td>
                            <td rowspan="2" class="text-center">Dijual</td>
                            <td rowspan="2" class="text-center">Disumbangkan</td>
                            <td rowspan="2"class="text-center" >Tgl Pengeh<br>hapusan</td>
                            <td rowspan="2" class="text-center">Baik</td>
                            <td rowspan="2" class="text-center" >Rusak</td>
                          </tr>
                          <tr>
                            <td class="text-center" >Pemerintah</td>
                            <td class="text-center">Provinsi</td>
                            <td class="text-center">Kab / Kota</td>
                            <td></td>
                          </tr>
                        </thead>
                        <tbody>
                         <td>cdcdcdcd</td>

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
