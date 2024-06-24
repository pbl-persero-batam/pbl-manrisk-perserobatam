<div class="form-group">
    <!-- Modal -->
    <div class="modal fade text-left" id="detailFU" tabindex="-1" role="dialog" aria-labelledby="myModalLabel17"
        aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel17"><strong>Detail Laporan SPI</strong></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h5>Nomor LHA</h5>
                    <p>87291289128</p>
                    <hr>
                    <h5>Judul LHA</h5>
                    <p>Pemeriksaan Lanjut Website SPI</p>
                    <hr>
                    <h5>Temuan</h5>
                    <p>Pemeriksaan</p>
                    <hr>
                    <h5>Rekomendasi</h5>
                    <p>Pemeriksaan Lanjutkan ke Bagian Keuangan</p>
                    <hr>
                    <div class="form-group">
                        <label for="optionSelect">Status</label>
                        <select id="optionSelect" class="form-control" onchange="showForm()">
                            <option selected>-- Pilih Status --</option>
                            <option value="open">Open</option>
                            <option value="progres">On Progress</option>
                            <option value="closed">Closed</option>
                        </select>
                    </div>
                    <div id="closed" class="form-container">
                        <form>
                            <div class="form-group">
                                <label for="attacment">Tutup Rekomendasi (Upload Surat/Nota Dinas)</label>
                                <div class="position-relative has-icon-left">
                                    <input type="file" name="attacment" id="attacment" class="form-control">
                                    <div class="form-control-position">
                                        <i class="fa fa-file-pdf-o"></i>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
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
