@extends('layouts.template')

@section('title')
Halaman Dashboard
@endsection

@section('content')
<link rel="stylesheet" href="{{ asset('chartjs/Chart.min.css') }}" />
<script src="{{ asset('chartjs/Chart.min.js') }}"></script>
<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-primary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                        Paket</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">25</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-tag fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-secondary shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-secondary text-uppercase mb-1">
                        Pelanggan</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">30</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-list fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-warning shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-warning text-uppercase mb-1">
                        Outlet</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Null</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-shopping-cart fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="col-xl-3 col-md-6 mb-4">
    <div class="card border-left-danger shadow h-100 py-2">
        <div class="card-body">
            <div class="row no-gutters align-items-center">
                <div class="col mr-2">
                    <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                        Pendapatan</div>
                    <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 20.000</div>
                </div>
                <div class="col-auto">
                    <i class="fas fa-dollar fa-2x text-gray-300"></i>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="col-xl-12 col-lg-2 ">
    <div class="card shadow mb-12 border-left-info">
        <div class="card-body">
            <div class="box-body">
                <h4>Grafik Laporan Laundry</h4>
                
                <canvas id="myChart" width="585" height="320" class="chartjs-render-monitor" style="display: block; width: 585px; height: 320px;"></canvas>
            </div>
        </div>
    </div>
</div>
@endsection
