<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    @include('Template.head')
    <title>SPI Navigator - Laporan Hasil Audit</title>
</head>

<body class="vertical-layout vertical-menu 2-columns menu-expanded fixed-navbar" data-open="click"
    data-menu="vertical-menu" data-col="2-columns">

    {{-- Navbar --}}
    <!-- fixed-top-->
    @include('Template.nav')
    {{-- Navbar --}}

    {{-- Side Menu --}}
    @include('Template.side-menu')
    {{-- Side Menu --}}

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-8 col-12 mb-2 breadcrumb-new">
                    <h3 class="content-header-title mb-0 d-inline-block">Laporan Hasil Audit</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item active">Laporan Hasil Audit
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Form Laporan Hasil Audit -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <button type="button" class="btn btn-primary mr-1">Tambah Laporan</button>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nomor Laporan</th>
                                                    <th>Tanggal</th>
                                                    <th>Divisi/Unit</th>
                                                    <th>Judul</th>
                                                    <th>Bentuk Kegiatan</th>
                                                    {{-- <th>Nomor Temuan</th> --}}
                                                    {{-- <th>Temuan</th> --}}
                                                    {{-- <th>Jenis Temuan</th>
                                                    <th>Nilai Temuan</th>
                                                    <th>Penyebab</th>
                                                    <th>Kriteria</th>
                                                    <th>Akibat</th> --}}
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>87291289128</td>
                                                    <td>10/06/2024</td>
                                                    <td>SPI</td>
                                                    <td>Pemeriksaan Lanjut Website SPI</td>
                                                    <td>Pemeriksaan</td>
                                                    {{-- <td>1036252</td> --}}
                                                    {{-- <td>Kurang Tambahan Fitur</td> --}}
                                                    {{-- <td>3 - Kinerja</td>
                                                    <td>Rp. 0</td>
                                                    <td>Development</td>
                                                    <td>Butuh Tambahan</td>
                                                    <td>2</td> --}}
                                                    <td><span class="success">Open</span></td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal"
                                                            data-target="#large">
                                                            Detail
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2</td>
                                                    <td>87291289128</td>
                                                    <td>10/06/2024</td>
                                                    <td>SPI</td>
                                                    <td>Pemeriksaan Lanjut Website SPI</td>
                                                    <td>Pemeriksaan</td>
                                                    {{-- <td>1036252</td> --}}
                                                    {{-- <td>Kurang Tambahan Fitur</td> --}}
                                                    {{-- <td>3 - Kinerja</td>
                                                    <td>Rp. 0</td>
                                                    <td>Development</td>
                                                    <td>Butuh Tambahan</td>
                                                    <td>2</td> --}}
                                                    <td><span class="danger">Closed</span></td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal"
                                                            data-target="#large">
                                                            Detail
                                                        </button>
                                                    </td>
                                                </tr>
                                                </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- DOM - jQuery events table -->
                {{-- Detail Data with Modal --}}
                <div class="form-group">
                    <!-- Modal -->
                    <div class="modal fade text-left" id="large" tabindex="-1" role="dialog"
                        aria-labelledby="myModalLabel17" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h4 class="modal-title" id="myModalLabel17"><strong>Detail Laporan Hasil Audit</strong></h4>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <h5>Nomor Laporan Hasil Audit</h5>
                                    <p>87291289128</p>
                                    <hr>
                                    <h5>Tanggal Laporan Hasil Audit</h5>
                                    <p>10 Juni 2024</p>
                                    <hr>
                                    <h5>Divisi/Unit</h5>
                                    <p>SPI</p>
                                    <hr>
                                    <h5>Judul LHA</h5>
                                    <p>Pemeriksaan Lanjut Website SPI</p>
                                    <hr>
                                    <h5>Bentuk Kegiatan Audit</h5>
                                    <p>Pemeriksaan</p>
                                    <hr>
                                    <h5>Nomor Temuan</h5>
                                    <p>1036252</p>
                                    <hr>
                                    <h5>Temuan</h5>
                                    <p>Kurang Tambahan Fitur</p>
                                    <hr>
                                    <h5>Jenis Temuan</h5>
                                    <p>03 – kinerja operasional</p>
                                    <hr>
                                    <h5>Nilai Temuan</h5>
                                    <p>Rp. 0,-</p>
                                    <hr>
                                    <h5>Penyebab</h5>
                                    <p>Development</p>
                                    <hr>
                                    <h5>Kriteria</h5>
                                    <p>Butuh Tambahan</p>
                                    <p>Penyesuaian</p>
                                    <hr>
                                    <h5>Akibat</h5>
                                    <p>02 – risiko tata kelola administratif & operasional</p>
                                    <hr>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Hapus Data</button>
                                    <button type="button" class="btn btn-warning"><i class="fa fa-edit"></i> Ubah Data</button>
                                    <button type="button" class="btn grey btn-outline-secondary"
                                        data-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Detail Data with Modal --}}
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    {{-- Footer --}}
    @include('Template.footer')

    {{-- JS --}}
    @include('Template.js')
    {{-- JS --}}

</body>

</html>
