<div class="col-md-3">
    {{--  <a href="{{ route('siode.infodesa.lembaga.create') }}" class="btn btn-primary btn-block mb-3">Tambah Lembaga</a>  --}}
    <button type="button" class="btn bg-gradient-primary btn-block mb-3" data-toggle="modal" data-target="#modal-default">
        Tambah Lembaga
    </button>
    <div class="card">
        <div class="card-header">
            <h3 class="card-title">Data Lembaga</h3>
            <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                </button>
            </div>
        </div>
        <div class="card-body p-0">
            @foreach ($lembaga as $item)
                <ul class="nav nav-pills flex-column">
                    <li class="nav-item active">
                        <a href="{{ route('siode.infodesa.lembaga.createJabatan', ['id' => $item->id, Str::slug($item->nama)]) }}"
                            class="nav-link {!! request()->is(['siode/info-desa/lembaga/' . $item->id . '/*']) ? 'active' : '' !!}">
                            <i class="fas fa-inbox"></i> {{ Str::upper($item->nama) }}
                        </a>
                    </li>
                </ul>
            @endforeach
        </div>
    </div>
</div>
<div class="modal fade" id="modal-default">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{ route('siode.infodesa.lembaga.store') }}" method="post">
                @csrf
                <div class="modal-header">
                    <h4 class="modal-title">Lembaga</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="">NAMA LEMBAGA</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer justify-content-between">
                    <button type="button" class="btn bg-gradient-navy" data-dismiss="modal">Close</button>
                    <button type="submit" class="btn bg-gradient-success">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>
