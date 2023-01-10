@extends('siode.infodesa.wilayah-administratif.wilayah-side')
@section('content-administratif')
    <div class="card card-primary card-outline">
        <div class="card-header">
            <h3 class="card-title">Rukun Warga</h3>
        </div>

        <div class="card-body table-responsive">
            <div class="row">
                <div class="col">

                    <button class="btn btn-xs bg-gradient-navy" style="text-transform:uppercase" type="button"
                        id="button-addon2" data-toggle="modal" data-target="#ketuarw"><i class="fa-solid fa-plus"></i>
                        Tambah Rw</button>

                </div>
            </div>
            <br>
            <div class="row">
                <div class="col">
                    <table class="table-sm table-bordered table">
                        <thead>
                            <tr class="text-center">
                                <th style="width: 5%">No</th>
                                <th>No RW</th>
                                <th>Ketua</th>
                                <th colspan="3" style="width: 1%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($rw as $key => $r)
                                <tr class="text-center">
                                    <th>{{ $loop->iteration }}</th>
                                    <td>{{ $r->no }}</td>
                                    <td>{{ $r->ketua }}</td>
                                    <form action="{{ route('siode.infodesa.rw.destroy', $r->id) }}" method="post">
                                        @csrf
                                        @method('DELETE')
                                        <td><button class="btn btn-xs bg-gradient-info" type="button" id="button-addon2"
                                                data-toggle="modal" data-target="#view-{{ $r->id }}">View</button>
                                        </td>
                                        <td><button class="btn btn-xs bg-gradient-warning" type="button" id="button-addon2"
                                                data-toggle="modal" data-target="#edit-{{ $r->id }}">Edit</button>
                                        </td>
                                        <td><button class="btn btn-xs bg-gradient-danger" type="button" id="button-addon2"
                                                data-toggle="modal" data-target="#delete-{{ $r->id }}">Hapus</button>
                                        </td>
                                        {{--  <td><button class="btn btn-xs bg-gradient-danger" type="submit">Hapus</button></td>  --}}
                                    </form>
                                </tr>

                                <div class="modal fade" id="edit-{{ $r->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content rounded-0 text-sm">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit data rw</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST"
                                                    action="{{ route('siode.infodesa.rw.update', $r->id) }}">
                                                    @csrf
                                                    @method('PUT')
                                                    <div class="form-group">
                                                        <label for="">No Rw</label>
                                                        <input type="number" class="form-control form-control-sm"
                                                            name="no" value="{{ $r->no }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Ketua Rw</label>
                                                        <input type="text" id='ketuaedit'
                                                            class="form-control form-control-sm" name="ketua"
                                                            value="{{ $r->ketua }}" required>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">No Nik</label>
                                                        <input type="text" id='nonikedit'
                                                            class="form-control form-control-sm"
                                                            value="{{ $r->no_nik }}" name="no_nik" required>
                                                    </div>
                                                    <a style="margin-top:0px;" class="btn bg-gradient-secondary btn-sm"
                                                        data-dismiss="modal" aria-label="Close"
                                                        style="text-transform:uppercase">
                                                        {{ trans('Cancel') }}
                                                    </a>
                                                    <input type="submit" value="Submit"
                                                        class="btn bg-gradient-primary btn-sm">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="delete-{{ $r->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content rounded-0 text-sm">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Yakin hapus data {{ $r->ketua }} ?</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form method="POST"
                                                    action="{{ route('siode.infodesa.rw.destroy', $r->id) }}">
                                                    @csrf
                                                    @method('DELETE')
                                                    <div class="form-group">
                                                        <label for="">No Rw</label>
                                                        <input type="number" class="form-control form-control-sm"
                                                            name="no" value="{{ $r->no }}" required readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">Ketua Rw</label>
                                                        <input type="text" id='ketuaedit'
                                                            class="form-control form-control-sm" name="ketua"
                                                            value="{{ $r->ketua }}" required readonly>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="">No Nik</label>
                                                        <input type="text" id='nonikedit'
                                                            class="form-control form-control-sm"
                                                            value="{{ $r->no_nik }}" name="no_nik" required readonly>
                                                    </div>
                                                    <a style="margin-top:0px;" class="btn bg-gradient-secondary btn-sm"
                                                        data-dismiss="modal" aria-label="Close"
                                                        style="text-transform:uppercase">
                                                        {{ trans('Cancel') }}
                                                    </a>
                                                    <input type="submit" value="Submit"
                                                        class="btn bg-gradient-primary btn-sm">
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="modal fade" id="view-{{ $r->id }}" tabindex="-1" role="dialog">
                                    <div class="modal-dialog">
                                        <div class="modal-content rounded-0 text-sm">
                                            <div class="modal-header">
                                                <h5 class="modal-title">Edit data rw</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="">No Rw</label>
                                                    <input type="number" class="form-control form-control-sm"
                                                        name="no" value="{{ $r->no }}" required readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Ketua Rw</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        name="ketua" value="{{ $r->ketua }}" required readonly>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">No Nik</label>
                                                    <input type="text" class="form-control form-control-sm"
                                                        value="{{ $r->no_nik }}" name="no_nik" readonly required>
                                                </div>
                                                <a style="margin-top:0px;" class="btn bg-gradient-secondary btn-sm"
                                                    data-dismiss="modal" aria-label="Close"
                                                    style="text-transform:uppercase">
                                                    {{ trans('Close') }}
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <h4>tidak ada data</h4>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <div class="card-footer">

        </div>

    </div>
    <div class="modal fade" id="ketuarw" tabindex="-1" role="dialog">
        <div class="modal-dialog">
            <div class="modal-content rounded-0 text-sm">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah data rw</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{ route('siode.infodesa.rw.store') }}">
                        @csrf
                        <div class="form-group">
                            <label for="">No Rw</label>
                            <input type="number" class="form-control form-control-sm" name="no" required>
                        </div>
                        <div class="form-group">
                            <label for="">Ketua Rw</label>
                            <input type="text" id='ketua' class="form-control form-control-sm" name="ketua"
                                required>

                        </div>
                        <div class="form-group">
                            <label for="">No Nik</label>
                            <input type="text" id='nonik' class="form-control form-control-sm" name="no_nik"
                                required>
                        </div>
                        <a style="margin-top:0px;" class="btn bg-gradient-secondary btn-sm" data-dismiss="modal"
                            aria-label="Close" style="text-transform:uppercase">
                            {{ trans('Cancel') }}
                        </a>
                        <input type="submit" value="Submit" class="btn bg-gradient-primary btn-sm">
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('styles-administratif')
    <link rel="stylesheet" type="text/css" href="{{ URL::asset('assets/dist/plugins/jquery-ui/jquery-ui.min.css') }}">
    <link rel="stylesheet" type="text/css"
        href="{{ URL::asset('assets/dist/plugins/jquery-ui/jquery-ui.theme.min.css') }}">
    <style>
        .ui-menu .ui-menu-item a {
            font-size: 12px;
        }

        .ui-autocomplete {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1051 !important;
            float: left;
            display: none;
            min-width: 160px;
            _width: 160px;
            padding: 4px 0;
            margin: 2px 0 0 0;
            list-style: none;
            background-color: #ffffff;
            border-color: #ccc;
            border-color: rgba(0, 0, 0, 0.2);
            border-style: solid;
            border-width: 1px;
            -webkit-border-radius: 2px;
            -moz-border-radius: 2px;
            border-radius: 2px;
            -webkit-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            -moz-box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
            -webkit-background-clip: padding-box;
            -moz-background-clip: padding;
            background-clip: padding-box;
            *border-right-width: 2px;
            *border-bottom-width: 2px;
        }

        .ui-menu-item>a.ui-corner-all {
            display: block;
            padding: 3px 15px;
            clear: both;
            font-weight: normal;
            line-height: 18px;
            color: #555555;
            white-space: nowrap;
            text-decoration: none;
        }

        .ui-state-hover,
        .ui-state-active {
            color: #ffffff;
            text-decoration: none;
            background-color: #0088cc;
            border-radius: 0px;
            -webkit-border-radius: 0px;
            -moz-border-radius: 0px;
            background-image: none;
        }

        #modalIns {
            width: 500px;
        }
    </style>
@endpush

@push('scripts-administratif')
    <script src="{{ URL::asset('assets/dist/plugins/sweetalert2/sweetalert.min.js') }}"></script>
    <script src="{{ URL::asset('assets/dist/plugins/jquery/jquery.min.js') }}" type="text/javascript"></script>
    <script src="{{ URL::asset('assets/dist/plugins/jquery-ui/jquery-ui.min.js') }}" type="text/javascript"></script>
    <script type="text/javascript">
        // CSRF Token
        var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
        $(document).ready(function() {

            $("#ketua").autocomplete({
                source: function(request, response) {
                    // Fetch data
                    $.ajax({
                        url: "{{ route('siode.infodesa.rw.autocomplete') }}",
                        type: 'POST',
                        data: {
                            search: request.term,
                            _token: '{{ csrf_token() }}',
                        },
                        dataType: "json",
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                select: function(event, ui) {
                    // Set selection
                    $('#ketua').val(ui.item.label);
                    $('#nonik').val(ui.item.nonik);
                    return false;
                },
                //appendTo: "#ketuarw",
            });
            $("#ketuaedit").autocomplete({
                source: function(request, response) {
                    // Fetch data
                    $.ajax({
                        url: "{{ route('siode.infodesa.rw.autocomplete') }}",
                        type: 'POST',
                        data: {
                            search: request.term,
                            _token: '{{ csrf_token() }}',
                        },
                        dataType: "json",
                        success: function(data) {
                            response(data);
                        }
                    });
                },
                select: function(event, ui) {
                    // Set selection
                    $('#ketuaedit').val(ui.item.label);
                    $('#nonikedit').val(ui.item.nonik);
                    return false;
                },
                //appendTo: "#edit",
            });

        });
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
