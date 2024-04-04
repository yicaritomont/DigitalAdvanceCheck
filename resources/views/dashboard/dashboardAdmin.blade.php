@extends('layouts.master')

@push('plugin-styles')
  <!-- {!! Html::style('/assets/plugins/plugin.css') !!} -->
@endpush

@section('content')
    <div class="row">
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
            <div class="card-body">
                <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
                <div class="float-left">
                    <i class="mdi mdi-cube text-danger icon-lg"></i>
                </div>
                <div class="float-right">
                    <p class="mb-0 text-right">Total Usuarios registrados</p>
                    <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">1234 usuarios</h3>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
            <div class="card-body">
                <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
                <div class="float-left">
                    <i class="mdi mdi-receipt text-warning icon-lg"></i>
                </div>
                <div class="float-right">
                    <p class="mb-0 text-right">Mediciones de madurez terminadas</p>
                    <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">3455</h3>
                    </div>
                </div>
                </div>
                <p class="text-muted mt-3 mb-0 text-left text-md-center text-xl-left">
                <i class="mdi mdi-bookmark-outline mr-1" aria-hidden="true"></i>Completadas </p>
            </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 grid-margin stretch-card">
            <div class="card card-statistics">
            <div class="card-body">
                <div class="d-flex flex-md-column flex-xl-row flex-wrap justify-content-between align-items-md-center justify-content-xl-between">
                <div class="float-left">
                    <i class="mdi mdi-poll-box text-success icon-lg"></i>
                </div>
                <div class="float-right">
                    <p class="mb-0 text-right">Mediciones de madurez sin terminar</p>
                    <div class="fluid-container">
                    <h3 class="font-weight-medium text-right mb-0">93</h3>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12 grid-margin">
            <div class="card">
                <div class="card-body">
                    <div class="d-sm-flex justify-content-between align-items-center mb-4">
                    <h2 class="card-title mb-0">Mediciones terminadas Vs Incompletas</h2>
                    <div class="wrapper d-flex">
                        <div class="d-flex align-items-center mr-3">
                            <span class="dot-indicator bg-success"></span>
                            <p class="mb-0 ml-2 text-muted">Terminadas</p>
                        </div>
                        <div class="d-flex align-items-center">
                            <span class="dot-indicator bg-primary"></span>
                            <p class="mb-0 ml-2 text-muted">Incompletas</p>
                        </div>
                    </div>
                    </div>
                    <div class="chart-container">
                    <canvas id="dashboard-area-chart" height="80"></canvas>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-sm-6 col-md-6 col-lg-6 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                    <div class="col-md-5 d-flex align-items-center">
                        <canvas id="UsersDoughnutChart" class="400x160 mb-4 mb-md-0" height="200"></canvas>
                    </div>
                    <div class="col-md-7">
                        <h4 class="card-title font-weight-medium mb-0 d-none d-md-block">Usuarios Activos</h4>
                        <div class="wrapper mt-4">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                            <p class="mb-0 font-weight-medium">67,550</p>
                            <small class="text-muted ml-2">Email account</small>
                            </div>
                            <p class="mb-0 font-weight-medium">80%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-primary" role="progressbar" style="width: 88%" aria-valuenow="88" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                        <div class="wrapper mt-4">
                        <div class="d-flex justify-content-between mb-2">
                            <div class="d-flex align-items-center">
                            <p class="mb-0 font-weight-medium">21,435</p>
                            <small class="text-muted ml-2">Requests</small>
                            </div>
                            <p class="mb-0 font-weight-medium">34%</p>
                        </div>
                        <div class="progress">
                            <div class="progress-bar bg-success" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 col-lg-6 grid-margin stretch-card">
            <div class="card">
            <div class="card-body">
                <div class="row">
                <div class="col-md-7">
                    <h4 class="card-title font-weight-medium mb-3">Amount Due</h4>
                    <h1 class="font-weight-medium mb-0">$5998</h1>
                    <p class="text-muted">Milestone Completed</p>
                    <p class="mb-0">Payment for next week</p>
                </div>
                <div class="col-md-5 d-flex align-items-end mt-4 mt-md-0">
                    <canvas id="conversionBarChart" height="150"></canvas>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection

@push('plugin-scripts')
  {!! Html::script('/assets/plugins/chartjs/chart.min.js') !!}
  {!! Html::script('/assets/plugins/jquery-sparkline/jquery.sparkline.min.js') !!}
@endpush

@push('custom-scripts')
  {!! Html::script('/assets/js/dashboard.js') !!}
@endpush