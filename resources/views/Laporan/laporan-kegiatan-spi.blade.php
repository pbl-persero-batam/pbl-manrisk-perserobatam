<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    @include('Template.head')
    <title>SPI Navigator - Laporan Kegiatan SPI</title>
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
                    <h3 class="content-header-title mb-0 d-inline-block">Laporan Kegiatan SPI</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Laporan</a>
                                </li>
                                <li class="breadcrumb-item active">Laporan Kegiatan SPI
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
                                    <button type="button" class="btn btn-primary mr-1" data-toggle="modal" data-target="#tambahLaporan">Tambah Laporan</button>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Nomor Laporan</th>
                                                    <th>Tanggal Laporan</th>
                                                    <th>Judul</th>
                                                    <th>Divisi/Unit</th>
                                                    <th>Keterangan</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>87291289128</td>
                                                    <td>01/06/2024</td>
                                                    <td>Laporan Bulan Mei SPI</td>
                                                    <td>SPI</td>
                                                    <td>Laporan Bulan Mei SPI untuk hal-hal yang diperlukan</td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal"
                                                            data-target="#detail">
                                                            Detail
                                                        </button>
                                                    </td>
                                                </tr>
                                                <tr class="text-center">
                                                    <td>2</td>
                                                    <td>87291289128</td>
                                                    <td>01/06/2024</td>
                                                    <td>Laporan Bulan Mei SPI</td>
                                                    <td>SPI</td>
                                                    <td>Laporan Bulan Mei SPI untuk hal-hal yang diperlukan</td>
                                                    <td>
                                                        <button type="button" class="btn btn-outline-success block btn-lg" data-toggle="modal"
                                                            data-target="#detail">
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
                @include('Laporan.modal-detail')

                {{-- Tambah Laporan --}}
                @include('Laporan.create-laporan-spi')

                {{-- Edit Laporan --}}
                @include('Laporan.edit-laporan')
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
