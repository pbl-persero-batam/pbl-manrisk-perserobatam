<div class="form-group">
    <!-- Modal -->
    <div class="modal fade text-left" id="tambahLHA" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17"><strong>Tambah Laporan Hasil Audit</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <fieldset class="form-group floating-label-form-group">
                        <label for="nomorLaporan">Nomor Laporan Hasil Audit</label>
                        <div class="position-relative has-icon-left">
                            <input type="text" id="nomorLaporan" class="form-control" placeholder="Nomor LHA"
                                name="nomorLaporan">
                            <div class="form-control-position">
                                <i class="fa fa-briefcase"></i>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="tanggal">Tanggal Laporan Hasil Audit</label>
                        <div class="position-relative has-icon-left">
                            <input type="date" id="tanggal" class="form-control" name="tanggal">
                            <div class="form-control-position">
                                <i class="fa fa-calendar"></i>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="divisi">Divisi/Unit</label>
                        <div class="position-relative has-icon-left">
                            <input type="text" id="divisi" class="form-control" placeholder="Divisi/Unit"
                                name="divisi">
                            <div class="form-control-position">
                                <i class="fa fa-users"></i>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="judul">Judul Laporan Hasil Audit</label>
                        <div class="position-relative has-icon-left">
                            <input type="text" id="judul" class="form-control" placeholder="Judul LHA"
                                name="judul">
                            <div class="form-control-position">
                                <i class="fa fa-envelope"></i>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="bentuk_kegiatan">Bentuk Kegiatan Audit</label>
                        <div class="position-relative has-icon-left">
                            <input type="text" id="judul" class="form-control" placeholder="Bentuk Kegiatan Audit"
                                name="bentuk_kegiatan">
                            <div class="form-control-position">
                                <i class="fa fa-bars"></i>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="surat_tugas">Unggah Surat Tugas</label>
                        <div class="position-relative has-icon-left">
                            <input type="file" name="surat_tugas" id="surat_tugas" class="form-control">
                            <div class="form-control-position">
                                <i class="fa fa-file-pdf-o"></i>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="nota_dinas">Unggah Nota Dinas Permintaan Data</label>
                        <div class="position-relative has-icon-left">
                            <input type="file" name="nota_dinas" id="nota_dinas" class="form-control">
                            <div class="form-control-position">
                                <i class="fa fa-file-pdf-o"></i>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="anggota">Anggota SPI</label>
                        <div class="position-relative has-icon-left repeater-default">
                            <div data-repeater-list="repeater-group">
                                <div class="input-group mb-1" data-repeater-item>
                                    <input type="text" class="form-control" placeholder="Anggota SPI">
                                    <span class="input-group-append" id="button-addon2">
                                        <button class="btn btn-danger" type="button" data-repeater-delete><i class="ft-x"></i></button>
                                    </span>
                                    <div class="form-control-position">
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <button type="button" data-repeater-create class="btn btn-primary">
                                <i class="ft-plus"></i> Tambah Anggota SPI
                            </button>
                        </div>
                    </fieldset>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-danger mr-1" data-dismiss="modal" value="close">
                        <i class="ft-x"></i> Cancel
                    </button>
                    <button type="submit" class="btn btn-outline-success">
                        <i class="fa fa-check-square-o"></i> Save
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
