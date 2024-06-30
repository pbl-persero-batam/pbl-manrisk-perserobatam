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
                                <li class="breadcrumb-item"><a href="{{ route('audit.index') }}">Laporan Hasil Audit</a>
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
                                    <a href="{{ route('audit.rekomendasi.create', $auditId) }}"
                                        class="btn btn-primary mr-1">Tambah Rekomendasi</a>
                                </div>
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        @if (Session::get('success'))
                                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                {{ Session::get('success') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        @if (Session::get('error'))
                                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                {{ Session::get('danger') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        <div class="table-responsive mt-3">
                                            {{ $dataTable->table(['class' => 'table table-striped table-bordered dom-jQuery-events', 'id' => 'table-id']) }}
                                        </div>
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
    {{ $dataTable->scripts(attributes: ['type' => 'module']) }}
    <script>
        const handlerEdit = (dataId) => {
            location.href = "{{ url('audit/rekomendasi/' . $auditId) }}" + `/${dataId}/edit`;
        }

        const handlerDelete = (dataId) => {
            $.ajax({
                url: "{{ url('audit/rekomendasi/destroy') }}",
                type: 'POST',
                data: {
                    dataId,
                    '_method': 'delete'
                },
                dataType: 'JSON',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    alert(response.message)
                    if (response.status) {
                        setTimeout(() => location.reload(), 1000);
                    }

                },
                error: function(xhr, error, status) {
                    alert(error)
                },
            });
        }
    </script>
    {{-- JS --}}

</body>

</html>
