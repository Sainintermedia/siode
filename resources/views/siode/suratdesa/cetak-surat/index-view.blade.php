@extends('layouts.siode.app')
@section('title', 'Cetak Surat')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card card-dark card-outline table-responsive">
                <div class="card-header">
                    <div class="card-title">
                        <a href="{{ route('siode.surat.buat-surat', ['id' => $surat->id, 'slug' => Str::slug($surat->nama)]) }}"
                            class="btn btn-xs bg-gradient-primary"><i class="fa-solid fa-plus"></i>
                            Tambah</a>
                        {{--  <a href="{{ route('siode.kependudukan.kartu-keluarga.view-delete') }}"
                            class="btn btn-xs bg-gradient-danger"><i class="fa-solid fa-trash"></i> Trash</a>  --}}
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
                                <th class="text-center">No</th>
                                <th>Aksi</th>
                                <th>Nomor Surat</th>
                                @php
                                    $i = 0;
                                @endphp
                                @foreach ($surat->isiSurat as $isiSurat)
                                    @if ($isiSurat->jenis_isi == 3)
                                        @php
                                            $i++;
                                        @endphp
                                        <th class="text-center">{{ $isiSurat->isi }}</th>
                                    @else
                                        @php
                                            $string = $isiSurat->isi;
                                            preg_match_all('/\{[A-Za-z\s\(\)]+\}/', $string, $matches);
                                        @endphp
                                        @foreach ($matches[0] as $k => $value)
                                            @php
                                                $pertama = substr($value, 1);
                                                $hasil = substr($pertama, 0, -1);
                                                $i++;
                                            @endphp
                                            <th class="text-center">{{ $hasil }}</th>
                                        @endforeach
                                    @endif
                                @endforeach
                                @if ($surat->tanda_tangan_bersangkutan == 1)
                                    <th class="text-center">Yang Bersangkutan</th>
                                @endif
                                <th class="text-center">Tanggal Cetak</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($cetakSurat as $value => $item)
                                <tr>
                                    <th>{{ $cetakSurat->firstItem() + $value }}</th>
                                    <td class="text-center">
                                        <form method="POST" action="{!! route('siode.surat.cetak-surat.destroy', $item->id) !!}" class="text-center">
                                            @csrf
                                            @method('delete')
                                            <div class="btn-group">
                                                <a target="_blank"
                                                    href="{{ route('siode.surat.cetak-surat.show', $item->id) }}"
                                                    class="btn btn-sm bg-gradient-success" title="Detail Cetak"
                                                    data-toggle="tooltip"><i class="fas fa-print"></i></a>
                                                @if ($item->arsip == 1)
                                                    <a class="btn btn-sm bg-gradient-dark arsip" data-id=""
                                                        data-action="{{ route('siode.surat.cetak-surat.arsip', $item->id) }}"
                                                        data-toggle="tooltip" href="#arsip" title="Buka Arsip"><i
                                                            class="fas fa-lock"></i></a>
                                                @else
                                                    <a href="{{ route('siode.surat.cetak-surat.edit', $item->id) }}"
                                                        class="btn btn-sm bg-gradient-primary" title="Edit"
                                                        data-toggle="tooltip"><i class="fas fa-edit"></i></a>
                                                    {{--  <a class="btn btn-sm btn-danger hapus-data"
                                                            data-nama="Detail cetak surat ini"
                                                            data-action="{{ route('siode.surat.cetak-surat.destroy', $item->id) }}"
                                                            data-toggle="tooltip" href="#modal-hapus" title="Hapus"><i
                                                                class="fas fa-trash"></i></a>  --}}
                                                    <button class="btn btn-sm bg-gradient-danger show_confirm"
                                                        data-nama="{{ $item->nama }}" type="submit"><i
                                                            class="fas fa-trash"></i></button>
                                                    <a class="btn btn-sm bg-gradient-dark arsip" data-id="1"
                                                        data-action="{{ route('siode.surat.cetak-surat.arsip', $item->id) }}"
                                                        data-toggle="tooltip" href="#arsip" title="Arsipkan"><i
                                                            class="fas fa-unlock"></i></a>
                                                @endif
                                            </div>
                                        </form>
                                    </td>
                                    <td class="text-center">{{ $item->nomor ? $item->nomor : '-' }}</td>
                                    @foreach ($item->DetailCetak as $DetailCetak)
                                        <td class="text-center">{{ $DetailCetak->isian }}</td>
                                    @endforeach
                                    <td class="text-center">{{ date('d/m/Y H:i', strtotime($item->created_at)) }}</td>
                                </tr>
                            @empty
                                <h4>tidak ada data</h4>
                            @endforelse
                        </tbody>
                        <tfoot>
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer clearfix">

                    Halaman : {{ $cetakSurat->currentPage() }} <br />
                    Jumlah Data : {{ $cetakSurat->total() }} <br />
                    Data Per Halaman : {{ $cetakSurat->perPage() }}
                    <ul class="pagination pagination-sm float-right m-0">
                        {{ $cetakSurat->links() }}
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <form id="form-arsip" method="POST">
        @csrf @method('patch')
        <input type="hidden" name="arsip" id="arsip">
    </form>
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
            $(".arsip").click(function(event) {
                event.preventDefault();
                $("#arsip").val($(this).data('id'));
                $("#form-arsip").attr('action', $(this).data('action'));
                $("#form-arsip").submit();
            });
        });
    </script>
@endpush
