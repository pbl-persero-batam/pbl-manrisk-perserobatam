<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">

<head>
    @include('Template.head')
    <title>SPI Navigator - Dashboard</title>
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
            </div>
            <div class="content-body">
                <!-- Sales stats -->
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                            <div class="pb-1">
                                                <div class="clearfix mb-1">
                                                    <i class="icon-star font-large-1 blue-grey float-left mt-1"></i>
                                                    <span
                                                        class="font-large-2 text-bold-300 info float-right">100</span>
                                                </div>
                                                <div class="clearfix">
                                                    <span class="text-muted">Laporan Hasil Audit</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                            <div class="pb-1">
                                                <div class="clearfix mb-1">
                                                    <i class="icon-user font-large-1 blue-grey float-left mt-1"></i>
                                                    <span
                                                        class="font-large-2 text-bold-300 success float-right">50</span>
                                                </div>
                                                <div class="clearfix">
                                                    <span class="text-muted">Terbuka</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12 border-right-blue-grey border-right-lighten-5">
                                            <div class="pb-1">
                                                <div class="clearfix mb-1">
                                                    <i class="icon-shuffle font-large-1 blue-grey float-left mt-1"></i>
                                                    <span
                                                        class="font-large-2 text-bold-300 warning float-right">20</span>
                                                </div>
                                                <div class="clearfix">
                                                    <span class="text-muted">Progres</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-3 col-sm-12">
                                            <div class="pb-1">
                                                <div class="clearfix mb-1">
                                                    <i class="icon-wallet font-large-1 blue-grey float-left mt-1"></i>
                                                    <span
                                                        class="font-large-2 text-bold-300 danger float-right">30</span>
                                                </div>
                                                <div class="clearfix">
                                                    <span class="text-muted">Selesai</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{-- Footer --}}
    @include('Template.footer')

    {{-- JS --}}
    @include('Template.js')

</body>

</html>
