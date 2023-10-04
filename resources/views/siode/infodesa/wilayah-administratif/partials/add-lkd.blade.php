<a href="{{ route('siode.infodesa.wilayah-administratif.create.lkd') }}"
    class="btn bg-gradient-primary btn-block mb-3">Tambah LKD</a>
<div class="card">
    <div class="card-header">
        <h3 class="card-title">LKD</h3>
        <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse">
                <i class="fas fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="card-body p-0">
        @foreach ($lkd as $lks)
            <ul class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="fas fa-inbox"></i> {{ Str::upper($lks->dusun_id) }}
                    </a>
                </li>
            </ul>
        @endforeach
    </div>
    <div class="card-footer">

    </div>
</div>
