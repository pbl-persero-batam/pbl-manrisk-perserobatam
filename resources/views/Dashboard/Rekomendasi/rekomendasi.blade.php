<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    @include('Template.head')
    <title>SPI Navigator - Rekomendasi</title>
    <style>
        .form-container {
            display: none;
            margin-top: 20px;
        }
    </style>
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
                    <h3 class="content-header-title mb-0 d-inline-block">Rekomendasi</h3>
                    <div class="row breadcrumbs-top d-inline-block">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a>
                                </li>
                                <li class="breadcrumb-item"><a href="/laporan-hasil-audit">Laporan Hasil Audit</a>
                                </li>
                                <li class="breadcrumb-item active">Rekomendasi
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
                                        data-target="#tambahRekomendasi">Tambah Rekomendasi</button>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        <table class="table table-striped table-bordered dom-jQuery-events">
                                            <thead>
                                                <tr class="text-center">
                                                    <th>No</th>
                                                    <th>Nomor LHA</th>
                                                    <th>Temuan</th>
                                                    <th>Rekomendasi</th>
                                                    <th>Status</th>
                                                    <th>Aksi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr class="text-center">
                                                    <td>1</td>
                                                    <td>87291289128</td>
                                                    <td>Tata Kelola Administratif SPI</td>
                                                    <td>Peningkatan Tata Kelola Rekomendasi dengan Anggota SPI sebagai
                                                        pelopor</td>
                                                    <td>
                                                        <div class="badge badge-warning round font-medium-1">
                                                            <span>On Progress</span>
                                                        </div>
                                                    </td>
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
                @include('Dashboard.Rekomendasi.create-rekomendasi')
                {{-- Tambah Modal --}}
            </div>
        </div>
    </div>
    <!-- ////////////////////////////////////////////////////////////////////////////-->

    {{-- Footer --}}
    @include('Template.footer')

    {{-- JS --}}
    @include('Template.js')
    <script>
        function showForm() {
            // Hide all forms
            const forms = document.querySelectorAll('.form-container');
            forms.forEach(form => form.style.display = 'none');

            // Get the selected value
            const selectedValue = document.getElementById('optionSelect').value;

            // Show the selected form
            if (selectedValue) {
                document.getElementById(selectedValue).style.display = 'block';
            }
        }
    </script>
    {{-- JS --}}

</body>

</html>
