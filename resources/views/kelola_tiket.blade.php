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
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Daftar Tiket</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table">
                                        <thead class="text-primary">
                                            <tr>
                                                <th>No</th>
                                                <th>Nama Event</th>
                                                <th>Tanggal Memesan</th>
                                                <th>Status</th>
                                                <th>Operasi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="#">Seminar Nasional ILS</a>
                                                </td>
                                                <td>Jumat, 21 Juni 2016</td>
                                                <td>Dikonfirmasi</td>
                                                <td>
                                                    <button class="btn btn-info">Lihat</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>1</td>
                                                <td>
                                                    <a href="#">Seminar Nasional ILS</a>
                                                </td>
                                                <td>Jumat, 21 Juni 2016</td>
                                                <td>Dikonfirmasi</td>
                                                <td>
                                                    <button class="btn btn-info">Lihat</button>
                                                    <button class="btn btn-danger">Hapus</button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection