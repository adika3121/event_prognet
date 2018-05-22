@extends('admin.dashboard.layout.app')

@section('body')

<!-- Main wrapper  -->
<div id="main-wrapper">
  @include('admin.dashboard.inc.header')
  @include('admin.dashboard.inc.sidebar')
  <!-- End Left Sidebar  -->
  <!-- Page wrapper  -->
  <div class="page-wrapper">
  <!-- Bread crumb -->
      <div class="row page-titles">
      <div class="col-md-5 align-self-center">
        <h3 class="text-primary">Event</h3> </div>
        <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Event</li>
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
                  <h4 class="card-title">Tabel Event</h4>
                  <h6 class="card-subtitle">Daftar Semua Event</h6>
                </div>
              </div>
              <div class="table-responsive m-t-10">
                <table id="myTable" class="table">
                  <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Tanggal</th>
                        <th>Tiket</th>
                        <th>Operasi</th>
                      </tr>
                  </thead>
                  <tbody>
                    @if(count($events) > 0)
                      @foreach($events as $i => $row)
                        <tr>
                            <td>{{ $i + 1 }}</td>
                            <td><a href="/events/{{ $row->id }}" class="text-primary">{{ $row->name }}</a></td>
                            <td>{{ $row->event_type->name }}</td>
                            <td>{{ $row->start_date }}</td>
                            <td>
                              {{ count($row->tickets) }}/
                              <b> {{ $row->max_ticket }}</b>
                            </td>
                            <td>
                              <div class="btn-group">
                                  <a href="/events/{{$row->id}}/edit" class="btn btn-info">
                                    <span class="fa fa-cog"></span>
                                  </a>
                                  <a href="#" class="btn btn-danger" onclick="event.preventDefault();
                                      document.getElementById('destroy').submit();">
                                    <span class="fa fa-trash"></span>
                                  </a>
                              </div>
                              <form id="destroy" action="/admin/events/{{ $row->id }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                                  {{ method_field("DELETE") }}
                              </form>
                            </td>
                        </tr>
                      @endforeach
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
  <script src="{{asset('dashboard/js/lib/datatables/datatables.min.js')}}"></script>
  <script src="{{asset('dashboard/js/lib/datatables/datatables-init.js')}}"></script>
@endsection