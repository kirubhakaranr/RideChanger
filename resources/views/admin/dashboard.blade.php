@extends('admin.layouts.master')
@section('css')
<link rel="stylesheet" type="text/css" href="{{  asset('app-assets/css/core/menu/menu-types/vertical-menu.css')}}" />
<link rel="stylesheet" type="text/css" href="{{  asset('app-assets/css/plugins/charts/chart-apex.css')}}" />
@endsection
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Dashboard</h2>
                        </div>
                    </div>
                </div>
                <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
                    <div class="form-group breadcrumb-right">
                        <div class="dropdown">
                            <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i data-feather="grid"></i></button>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#"><i class="mr-1" data-feather="plus-circle"></i><span class="align-middle">Add New</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Dashboard Ecommerce Starts -->
                <section id="">
                    <div class="row match-height">
                        <!-- Statistics Card -->
                        <div class="col-xl-12 col-md-6 col-12">
                            <div class="card card-statistics">
                                <div class="card-header">
                                    <h4 class="card-title">Statistics</h4>
                                    <div class="d-flex align-items-center">
                                        {{-- <p class="card-text font-small-2 mr-25 mb-0">Last 30 Days</p> --}}
                                    </div>
                                </div>
                                <div class="card-body statistics-body">
                                    <div class="row">
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="media">
                                                <div class="avatar bg-light-primary mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="trending-up" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">3</h4>
                                                    <p class="card-text font-small-3 mb-0">Total Intraday Calls</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-xl-0">
                                            <div class="media">
                                                <div class="avatar bg-light-info mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="user" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">4</h4>
                                                    <p class="card-text font-small-3 mb-0">Total Positional Calls</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12 mb-2 mb-sm-0">
                                            <div class="media">
                                                <div class="avatar bg-light-danger mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="box" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">3</h4>
                                                    <p class="card-text font-small-3 mb-0">Total Delivery Calls</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-xl-3 col-sm-6 col-12">
                                            <div class="media">
                                                <div class="avatar bg-light-success mr-2">
                                                    <div class="avatar-content">
                                                        <i data-feather="bar-chart" class="avatar-icon"></i>
                                                    </div>
                                                </div>
                                                <div class="media-body my-auto">
                                                    <h4 class="font-weight-bolder mb-0">4</h4>
                                                    <p class="card-text font-small-3 mb-0">Total Options Calls</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Statistics Card -->
                    </div>

                    <div class="row">
                        <!-- Sessions Card -->
                        <div class="col-md-4 col-12">
                            <div class="card">
                                <div class="card-header d-flex justify-content-between align-items-end">
                                    <h4>Total Active Subscriptions</h4>
                                    {{-- <div class="dropdown chart-dropdown">
                                        <button class="btn btn-sm border-0 dropdown-toggle px-50" type="button" id="dropdownItem1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            Last 30 Days
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem1">
                                            <a class="dropdown-item" href="javascript:void(0);">Last 28 Days</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                        </div>
                                    </div> --}}
                                </div>
                                <div class="card-body">
                                    <div id="session-chart" class="my-1"></div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="monitor" class="font-medium-2 text-primary"></i>
                                            <span class="font-weight-bold ml-75 mr-25">Intraday</span>
                                        </div>
                                        <div>
                                            <span>41%</span>
                                            <i data-feather="trending-up" class="text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="tablet" class="font-medium-2 text-warning"></i>
                                            <span class="font-weight-bold ml-75 mr-25">Positional</span>
                                        </div>
                                        <div>
                                            <span>59%</span>
                                            <i data-feather="trending-up" class="text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="tablet" class="font-medium-2 text-warning"></i>
                                            <span class="font-weight-bold ml-75 mr-25">Delivery</span>
                                        </div>
                                        <div>
                                            <span>59%</span>
                                            <i data-feather="trending-up" class="text-success"></i>
                                        </div>
                                    </div>
                                    <div class="d-flex justify-content-between mb-1">
                                        <div class="d-flex align-items-center">
                                            <i data-feather="tablet" class="font-medium-2 text-warning"></i>
                                            <span class="font-weight-bold ml-75 mr-25">Options</span>
                                        </div>
                                        <div>
                                            <span>59%</span>
                                            <i data-feather="trending-up" class="text-success"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/ Sessions Card -->

                        <div class="col-lg-8 col-12">
                            <!-- Sales Line Chart Card -->

                                <div class="card">
                                    <div class="card-header align-items-start">
                                        <div>
                                            <h4 class="card-title mb-25">Sales</h4>
                                            <p class="card-text mb-0">Total Sales: 12890</p>
                                        </div>
                                        <button class="btn btn-sm border-0 dropdown-toggle px-50" type="button" id="dropdownItem1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <i data-feather="settings" class="font-medium-3 text-muted cursor-pointer"></i>
                                        </button>
                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownItem1">
                                            <a class="dropdown-item" href="javascript:void(0);">Last 7 Days</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Month</a>
                                            <a class="dropdown-item" href="javascript:void(0);">Last Year</a>
                                        </div>
                                    </div>
                                    <div class="card-body pb-0">
                                        <div id="sales-line-chart"></div>
                                    </div>
                                </div>

                            <!--/ Sales Line Chart Card -->
                        </div>
                    </div>
                </section>
                <!-- Dashboard Ecommerce ends -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
@endsection
@section('javascript')
<script src="{{  asset('app-assets/js/scripts/cards/card-analytics.js') }}"></script>
<script src="{{  asset('app-assets/js/scripts/cards/card-statistics.js') }}"></script>
@endsection
