<a href="{{ route('siode.infodesa.wilayah-administratif.create') }}" class="btn bg-gradient-primary btn-block mb-3">Tambah
    Dusun</a>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">Data Dusun</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        @foreach ($wilayahdusun as $dusun)
            <ul class="nav nav-pills flex-column">
                <li class="nav-dusun active">
                    <a href="#" class="nav-link">
                        <i class="fas fa-inbox"></i> {{ Str::upper($dusun->nama) }}
                    </a>
                </li>
            </ul>
        @endforeach
    </div>
</div>
