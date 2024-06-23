<div class="form-group">
    <!-- Modal -->
    <div class="modal fade text-left" id="tambahTemuan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17"><strong>Tambah Temuan Hasil Audit</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <fieldset class="form-group floating-label-form-group">
                        <label for="temuan">Temuan</label>
                        <div class="position-relative has-icon-left">
                            <input type="text" id="temuan" class="form-control" placeholder="Temuan"
                                name="temuan">
                            <div class="form-control-position">
                                <i class="fa fa-suitcase"></i>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="jenisTemuan">Jenis Temuan</label>
                        <div class="position-relative has-icon-left">
                            <select id="optionSelect" class="form-control" onchange="showForm()">
                                <option selected>-- Pilih Jenis Temuan --</option>
                                <option value="1">01 - Kerugian Keuangan</option>
                                <option value="2">02 – Tata Kelola Administratif</option>
                                <option value="3">03 – Kinerja Operasional</option>
                            </select>
                            <div class="form-control-position">
                                <i class="fa fa-briefcase"></i>
                            </div>
                        </div>
                        <div id="1" class="form-container">
                            <form>
                                <div class="form-group">
                                    <label for="nilaiTemuan">Nilai Temuan</label>
                                    <div class="input-group">
										<div class="input-group-prepend">
											<span class="input-group-text">Rp.</span>
										</div>
										<input type="text" class="form-control square" placeholder="Nilai Temuan" aria-label="Rupiah (dalam rupiah)" name="nilaiTemuan">
										<div class="input-group-append">
											<span class="input-group-text">,00</span>
										</div>
									</div>
                                </div>
                            </form>
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="penyebab">Penyebab</label>
                        <div class="position-relative has-icon-left repeater-default">
                            <div data-repeater-list="repeater-group">
                                <div class="input-group mb-1" data-repeater-item>
                                    <input type="text" class="form-control" placeholder="Penyebab">
                                    <span class="input-group-append" id="button-addon2">
                                        <button class="btn btn-danger" type="button" data-repeater-delete><i class="ft-x"></i></button>
                                    </span>
                                    <div class="form-control-position">
                                        <i class="fa fa-file-o"></i>
                                    </div>
                                </div>
                            </div>
                            <button type="button" data-repeater-create class="btn btn-primary">
                                <i class="ft-plus"></i> Tambah Penyebab
                            </button>
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="kriteria">Kriteria</label>
                        <div class="position-relative has-icon-left repeater-default">
                            <div data-repeater-list="repeater-group">
                                <div class="input-group mb-1" data-repeater-item>
                                    <input type="text" class="form-control" placeholder="Kriteria">
                                    <span class="input-group-append" id="button-addon2">
                                        <button class="btn btn-danger" type="button" data-repeater-delete><i class="ft-x"></i></button>
                                    </span>
                                    <div class="form-control-position">
                                        <i class="fa fa-files-o"></i>
                                    </div>
                                </div>
                            </div>
                            <button type="button" data-repeater-create class="btn btn-primary">
                                <i class="ft-plus"></i> Tambah Kriteria
                            </button>
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="akibat">Akibat</label>
                        <div class="position-relative has-icon-left">
                            <select id="optionSelect" class="form-control">
                                <option selected>-- Pilih Akibat --</option>
                                <option value="1">01 - Kerugian Keuangan</option>
                                <option value="2">02 – Resiko Tata Kelola Administratif & Operasional</option>
                                <option value="3">03 – Compliance/Kepatuhan</option>
                            </select>
                            <div class="form-control-position">
                                <i class="fa fa-exclamation-circle"></i>
                            </div>
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
