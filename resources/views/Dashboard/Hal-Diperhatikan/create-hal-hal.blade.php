<div class="form-group">
    <!-- Modal -->
    <div class="modal fade text-left" id="tambahHal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17"><strong>Tambah Hal-hal Yang Perlu Diperhatikan</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <fieldset class="form-group floating-label-form-group">
                        <label for="hal">Hal Yang Perlu Diperhatikan</label>
                        <div class="position-relative has-icon-left">
                            <input type="text" id="hal" class="form-control" placeholder="Hal Yang Perlu Diperhatikan"
                                name="hal">
                            <div class="form-control-position">
                                <i class="fa fa-suitcase"></i>
                            </div>
                        </div>
                    </fieldset>
                    <fieldset class="form-group floating-label-form-group">
                        <label for="keterangan">Keterangan</label>
                        <div class="position-relative has-icon-left">
                            <textarea id="keterangan" rows="5" class="form-control" name="keterangan"
                                placeholder="Keterangan"></textarea>
                            <div class="form-control-position">
                                <i class="fa fa-info"></i>
                            </div>
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
