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