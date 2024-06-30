<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    @include('Template.head')
    <title>SPI Navigator - {{ isset($data) ? 'Edit' : 'Tambah' }} Laporan Hasil Audit</title>
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
                                <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>
                                <li class="breadcrumb-item"><a href="{{ route('audit.index') }}">Laporan
                                        Hasil Audit</a>
                                </li>
                                <li class="breadcrumb-item active">{{ isset($data) ? 'Edit' : 'Tambah' }}</li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <section id="dom">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content collapse show">
                                    <div class="card-body card-dashboard">
                                        @if ($errors->any())
                                            <div class="alert alert-danger my-3">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif
                                        @if (Session::get('success'))
                                            <div class="alert alert-success alert-dismissible fade show mb-3" role="alert">
                                                {{ Session::get('success') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        @if (Session::get('error'))
                                            <div class="alert alert-danger alert-dismissible fade show mb-3" role="alert">
                                                {{ Session::get('danger') }}
                                                <button type="button" class="close" data-dismiss="alert"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                        @endif
                                        @if (Route::is('audit.create'))
                                            <form action="{{ route('audit.store') }}" method="POST"
                                                enctype="multipart/form-data">
                                            @else
                                                <form action="{{ route('audit.update', $data->id) }}" method="POST"
                                                    enctype="multipart/form-data">
                                                    @method('PUT')
                                        @endif

                                        @csrf
                                        <div class="row">
                                            <div class="col-md-3">
                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="nomorLaporan">Nomor Laporan Hasil Audit</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="nomorLaporan"
                                                            class="form-control @error('nomorLaporan') is-invalid @enderror"
                                                            placeholder="Nomor LHA" name="nomorLaporan"
                                                            value="{{ old('nomorLaporan', $data->code ?? '') }}">
                                                        <div class="form-control-position">
                                                            <i class="fa fa-briefcase"></i>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-3">
                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="tanggal">Tanggal Laporan Hasil Audit</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="date" id="tanggal"
                                                            class="form-control @error('tanggal') is-invalid @enderror"
                                                            name="tanggal"
                                                            value="{{ old('tanggal', $data->date ?? '') }}">
                                                        <div class="form-control-position">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-3">
                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="divisi">Divisi/Unit</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="divisi"
                                                            class="form-control @error('divisi') is-invalid @enderror"
                                                            placeholder="Divisi/Unit" name="divisi"
                                                            value="{{ old('divisi', $data->divisi ?? '') }}">
                                                        <div class="form-control-position">
                                                            <i class="fa fa-users"></i>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-3">
                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="judul">Judul Laporan Hasil Audit</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="judul"
                                                            class="form-control @error('judul') is-invalid @enderror"
                                                            placeholder="Judul LHA" name="judul"
                                                            value="{{ old('judul', $data->title ?? '') }}">
                                                        <div class="form-control-position">
                                                            <i class="fa fa-envelope"></i>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-3">
                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="bentuk_kegiatan">Bentuk Kegiatan Audit</label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="text" id="bentuk_kegiatan"
                                                            class="form-control @error('bentuk_kegiatan') is-invalid @enderror"
                                                            placeholder="Bentuk Kegiatan Audit" name="bentuk_kegiatan"
                                                            value="{{ old('bentuk_kegiatan', $data->activity ?? '') }}">
                                                        <div class="form-control-position">
                                                            <i class="fa fa-bars"></i>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-3">
                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="surat_tugas">Unggah Surat Tugas @if (isset($data))
                                                            <em class="text-muted">*kosongi jika tidak diubah</em>
                                                        @endif
                                                    </label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="file" name="surat_tugas" id="surat_tugas"
                                                            class="form-control @error('surat_tugas') is-invalid @enderror">
                                                        <div class="form-control-position">
                                                            <i class="fa fa-file-pdf-o"></i>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-3">
                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="nota_dinas">Unggah Nota Dinas @if (isset($data))
                                                            <em class="text-muted">*kosongi jika tidak diubah</em>
                                                        @endif
                                                    </label>
                                                    <div class="position-relative has-icon-left">
                                                        <input type="file" name="nota_dinas" id="nota_dinas"
                                                            class="form-control @error('nota_dinas') is-invalid @enderror">
                                                        <div class="form-control-position">
                                                            <i class="fa fa-file-pdf-o"></i>
                                                        </div>
                                                    </div>
                                                </fieldset>
                                            </div>
                                            <div class="col-md-6">
                                                <fieldset class="form-group floating-label-form-group">
                                                    <label for="anggota">Anggota SPI</label>
                                                    <div class="position-relative has-icon-left repeater-default">
                                                        @if (isset($data))
                                                            <div data-repeater-list="anggota">
                                                                @if ($data->member)
                                                                    @foreach ($data->member as $item)
                                                                        <div class="input-group mb-1"
                                                                            data-repeater-item>
                                                                            <input type="text"
                                                                                class="form-control anggota-spi"
                                                                                placeholder="Anggota SPI"
                                                                                name="anggota"
                                                                                value="{{ $item }}">
                                                                            <span class="input-group-append"
                                                                                id="button-addon2">
                                                                                <button class="btn btn-danger"
                                                                                    type="button"
                                                                                    data-repeater-delete><i
                                                                                        class="ft-x"></i></button>
                                                                            </span>
                                                                            <div class="form-control-position">
                                                                                <i class="fa fa-user"></i>
                                                                            </div>
                                                                        </div>
                                                                    @endforeach
                                                                @else
                                                                    <div class="input-group mb-1" data-repeater-item>
                                                                        <input type="text"
                                                                            class="form-control anggota-spi"
                                                                            placeholder="Anggota SPI" name="anggota">
                                                                        <span class="input-group-append"
                                                                            id="button-addon2">
                                                                            <button class="btn btn-danger"
                                                                                type="button" data-repeater-delete><i
                                                                                    class="ft-x"></i></button>
                                                                        </span>
                                                                        <div class="form-control-position">
                                                                            <i class="fa fa-user"></i>
                                                                        </div>
                                                                    </div>
                                                                @endif
                                                            </div>
                                                        @else
                                                            <div data-repeater-list="anggota">
                                                                <div class="input-group mb-1" data-repeater-item>
                                                                    <input type="text"
                                                                        class="form-control anggota-spi"
                                                                        placeholder="Anggota SPI" name="anggota">
                                                                    <span class="input-group-append"
                                                                        id="button-addon2">
                                                                        <button class="btn btn-danger" type="button"
                                                                            data-repeater-delete><i
                                                                                class="ft-x"></i></button>
                                                                    </span>
                                                                    <div class="form-control-position">
                                                                        <i class="fa fa-user"></i>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        @endif

                                                        <button type="button" data-repeater-create
                                                            class="btn btn-primary">
                                                            <i class="ft-plus"></i> Tambah Anggota SPI
                                                        </button>
                                                    </div>
                                                </fieldset>
                                            </div>

                                            <div class="col-md-12">
                                                <a href="{{ route('audit.index') }}"
                                                    class="btn btn-outline-danger mr-1">
                                                    <i class="ft-x"></i> Back
                                                </a>
                                                <button type="submit" class="btn btn-outline-success">
                                                    <i class="fa fa-check-square-o"></i> Save
                                                </button>
                                            </div>
                                        </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
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
