@extends('dashboard.layout.app')

@section('body')

<!-- Main wrapper  -->
<div id="main-wrapper">
  @include('dashboard.inc.header')
  @include('dashboard.inc.sidebar')
  <!-- End Left Sidebar  -->
  <!-- Page wrapper  -->
  <div class="page-wrapper">
  <!-- Bread crumb -->
      <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Pemberitahuan</h3> </div>
        <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Pemberitahuan</li>
        </ol>
      </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
      <!-- Start Page Content -->
      <div class="row">
        <div class="col-sm-12">
          @include('dashboard.inc.notif')
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12 col-md-10">
                  <h4 class="card-title">Pemberitahuan</h4>
                  <h6 class="card-subtitle">Daftar Pemberitahuan</h6>
                </div>
                <div class="col-sm-12 col-md-2">
                    <form method="POST" action="/notif/clear">
                        {{ csrf_field() }}
                        <button type="submit" class="btn btn-primary">
                            <span class="fa fa-trash"></span> Bersihkan
                        </button>
                    </form>
                </div>
              </div>
              <div class="table-responsive m-t-10">
                <table class="table">
                  <thead>
                      <tr>
                        <th>Pemberitahuan</th>
                        <th>Waktu</th>
                      </tr>
                  </thead>
                  <tbody>
                    @if(count($all_notifs) > 0)
                        @foreach($all_notifs as $row)
                            <tr>
                                <td>{!! $row->content !!}</td>
                                <td>{{  $row->created_at->format('l, d M Y h:i A') }}</td>
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td style="text-align: left">Kosong</td>
                        </tr>
                    @endif
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  <!-- End Page wrapper  -->
</div>
<!-- End Wrapper -->

@endsection

{{-- CSS --}}
@section('css')
@endsection

{{-- JS --}}
@section('js')
@endsection