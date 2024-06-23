<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    @include('Template.head')
    <title>SPI Navigator - Hal Yang Diperhatikan</title>
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
                    <h3 class="content-header-title mb-0 d-inline-block">Hal-hal Yang Perlu Diperhatikan</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="/laporan-hasil-audit">Laporan Hasil Audit</a>
                                </li>
                                <li class="breadcrumb-item active">Hal-hal Yang Perlu Diperhatikan
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Temuan -->
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <button type="button" class="btn btn-primary mr-1" data-toggle="modal"
                                        data-target="#tambahHal">Tambah Hal-hal Yang Perlu Diperhatikan</button>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Hal Yang Perlu Diperhatikan</th>
                                                    <th>Keterangan</th>
                                                    <th>Akibat</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>Administrasi Bagian Frontoffice</td>
                                                    <td>Administrasi bagian front office perlu ditingkatkan kembali demi
                                                        kenyamanan dari klien</td>
                                                    <td>Risiko Tata Kelola Administratif & Operasional</td>
                                                    <td>
                                                        <div class="btn-group" role="group" aria-label="First Group">
                                                            <!-- Update Button -->
                                                            <a href="#" class="btn btn-info mr-1"><i
                                                                    class="fa fa-edit"></i></a>
                                                            <!-- Delete Button -->
                                                            <button class="btn btn-danger">
                                                                <i class="fa fa-trash"></i>
                                                            </button>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- DOM - jQuery events table -->
                {{-- Tambah Modal --}}
                @include('Dashboard.Hal-Diperhatikan.create-hal-hal')
                {{-- Tambah Modal --}}
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
