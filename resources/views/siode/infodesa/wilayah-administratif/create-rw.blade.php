@extends('layouts.siode.app')
@section('title', 'Tambah Rw')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                </div>
                <form action="{{ route('siode.infodesa.wilayah-administratif.storeRw') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">NO RW</label>
                                    <input type="text" class="form-control form-control-sm" name="no_rw" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">NIK KETUA RW</label>
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="nik_rw" id="no_nik" value="{{ old('nik_rw') }}"
                                            class="form-control form-control-sm text-sm" style="text-transform:uppercase"
                                            aria-describedby="button-addon2" readonly required>
                                        <button class="btn btn-outline-secondary btn-sm" style="text-transform:uppercase"
                                            type="button" id="button-addon2" data-toggle="modal"
                                            data-target="#modal-ketua"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">KETUA RW</label>
                                    <input type="text" id="nama" name="ketua_rw"
                                        class="form-control form-control-sm" required readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('siode.infodesa.wilayah-administratif.index') }}"
                            class="btn bg-gradient-primary btn-sm">Kembali</a>
                        <button class="btn btn-sm bg-gradient-success" type="submit">Simpan</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-ketua" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content rounded-0 text-sm">
                <div class="modal-header">
                    <h5 class="modal-title">Data Penduduk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="col-12 table-responsive">
                        <table class="table-bordered user_datatable table-sm table">
                            <thead class="text-center">
                                <tr>
                                    <th>ID</th>
                                    <th>Nik</th>
                                    <th>Nama</th>
                                    <th style="width: 1%">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center"></tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('styles')
    <link rel="stylesheet" href="{{ URL::asset('assets/dist/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet"
        href="{{ URL::asset('assets/dist/plugins/datatables-responsive/css/responsive.bootstrap4.min.css') }}">
@endpush

@push('scripts')
    <script src="{!! URL::asset('assets/dist/plugins/jquery-validation/jquery.validate.js') !!}"></script>
    <script src="{!! URL::asset('assets/dist/plugins/jquery/jquery.js') !!}"></script>
    <script src="{!! URL::asset('assets/dist/plugins/datatables/jquery.dataTables.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/dist/plugins/datatables-bs4/js/dataTables.bootstrap4.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/dist/plugins/datatables-responsive/js/dataTables.responsive.min.js') !!}"></script>
    <script src="{!! URL::asset('assets/dist/plugins/datatables-responsive/js/responsive.bootstrap4.min.js') !!}"></script>
    <script type="text/javascript">
        $(function() {
            var table = $('.user_datatable').DataTable({
                responsive: true,
                autoWidth: false,
                processing: true,
                serverSide: true,
                ordering: true,
                paging: true,
                searching: true,
                info: true,
                ajax: "{{ route('siode.infodesa.wilayah-administratif.createRw') }}",
                columns: [{
                        data: 'id',
                        name: 'id'
                    },
                    {
                        data: 'no_nik',
                        name: 'no_nik'
                    },
                    {
                        data: 'nama',
                        name: 'nama'
                    },
                    {
                        data: 'action',
                        name: 'action',
                    },
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $(document).on('click', '#selectFamillies', function() {
                var nama = $(this).data('nama');
                var no_nik = $(this).data('no_nik');
                $('#nama').val(nama);
                $('#no_nik').val(no_nik);
            })
        })
    </script>
@endpush
