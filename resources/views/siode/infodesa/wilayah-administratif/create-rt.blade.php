@extends('layouts.siode.app')
@section('title', 'Rt')
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <div class="card-title">
                        <h6>Tambah data RT</h6>
                    </div>
                </div>
                <form action="{{ route('siode.infodesa.wilayah-administratif.store.rt') }}" method="post" autocomplete="off">
                    @csrf
                    @method('POST')
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">NO RT</label>
                                    <input type="text" class="form-control form-control-sm" name="no_rt" required>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">DUSUN</label>
                                    <select name="dusun_id" id="" class="form-control form-control-sm" required>
                                        <option value="">Pilih</option>
                                        @foreach ($dusun as $dsn)
                                            <option value="{{ $dsn->id }}">{{ $dsn->nama_dusun }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">NO RW</label>
                                    <select name="rw_id" id="" class="form-control form-control-sm" required>
                                        <option value="">Pilih</option>
                                        @foreach ($rw as $rws)
                                            <option value="{{ $rws->id }}">{{ $rws->no_rw }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">NIK KETUA RT</label>
                                    <div class="input-group input-group-sm">
                                        <input type="text" name="nik_ketua_rt" id="no_nik"
                                            value="{{ old('nik_ketua_rt') }}" class="form-control form-control-sm text-sm"
                                            style="text-transform:uppercase" aria-describedby="button-addon2" readonly
                                            required>
                                        <button class="btn btn-outline-secondary btn-sm" style="text-transform:uppercase"
                                            type="button" id="button-addon2" data-toggle="modal"
                                            data-target="#modal-ketua"><i class="fas fa-search"></i></button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="">KETUA RT</label>
                                    <input type="text" id="nama" name="ketua_rt" value="{{ old('ketua_rt') }}"
                                        class="form-control form-control-sm" required readonly>
                                </div>
                            </div>
                        </div>
                        <label for="periode">Periode</label>
                        <div class="row">
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="periode_1">Dari</label>
                                    <input type="number" name="periode_1" class="form-control form-control-sm"
                                        value="{{ old('periode_1') }}" min="1900" max="2100" required>
                                </div>
                            </div>
                            <div class="col-md">
                                <div class="form-group">
                                    <label for="periode_2">Sampai</label>
                                    <input type="number" name="periode_2" class="form-control form-control-sm"
                                        value="{{ old('periode_2') }}" min="1900" max="2100" required>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="card-footer">
                        <a href="{{ route('siode.infodesa.wilayah-administratif.index') }}"
                            class="btn bg-gradient-navy btn-sm">Kembali</a>
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
    <link rel="stylesheet"
        href="{{ URL::asset('assets/dist/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css') }}">
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
                ajax: "{{ route('siode.infodesa.wilayah-administratif.create.rt') }}",
                columns: [{
                        data: 'DT_RowIndex',
                        name: 'DT_RowIndex',
                        width: '1%',
                        class: 'text-center',
                        orderable: false,
                        searchable: false,
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
