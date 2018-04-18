@extends('layouts.dashboard')

@section('content')
    <div class="wrapper ">
        <!--  Sidebar-->
        @include('inc.sidebar')
        <div class="main-panel">
            <!-- Navbar -->
            @include('inc.navbar')
            <!-- End Navbar -->
            <div class="panel-header panel-header-sm"></div>
            <div class="content">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card card-chart">
                            <div class="card-header">
                                <h5 class="card-category">Jumlah Peserta Event</h5>
                                <h4 class="card-title">Sepanjang Masa</h4>
                            </div>
                            <div class="card-body">
                                <div class="chart-area">
                                    <canvas id="lineChartExample"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection