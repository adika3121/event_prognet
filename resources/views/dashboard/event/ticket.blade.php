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
        <h3 class="text-primary">{{ $event->name }}</h3> </div>
        <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item"><a href="/events">Event</a></li>
          <li class="breadcrumb-item active">{{$event->name}}</li>
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
                <div class="col-sm-12">
                  <h4 class="card-title">Tabel Tiket Event</h4>
                  <h6 class="card-subtitle">Daftar Semua tiket event {{$event->name}}</h6>
                  {{-- <form class="form-inline">
                    <div class="form-group">
                      <input type="text" name="code" placeholder="Kode Tiket" class="form-control">
                    </div>
                    <button type="submit" style="margin-left: 10px;" class="btn btn-primary">Konfrimasi</button>
                    <button type="submit" style="margin-left: 10px;" class="btn btn-info">Reset</button>
                  </form> --}}
                </div>
              </div>
              <div style="margin-top: 20px" class="table-responsive m-t-10">
                <table id="myTable" class="table">
                  <thead>
                      <tr>
                        <th>No</th>
                        <th>User</th>
                        <th>Kode Tiket</th>
                        <th>Tanggal Memesan</th>
                        <th>Status Konfirmasi</th>
                        <th>Operasi</th>
                      </tr>
                  </thead>
                  <tbody>
                  @if(count($tickets) > 0)
                    @foreach($tickets as $i => $row)
                      <tr>
                          <td>{{ $i + 1 }}</td>
                          <td><a href="/user/{{ $row->id }}" class="text-primary">{{ $row->user->name }}</a></td>
                          <td>{{ $row->code }}</td>
                          <td>{{ $row->created_at }}</td>
                          <td>
                            <form action="/tickets/{{$row->id}}/confirm" method="POST">
                              {{ csrf_field() }}
                              @if(!$row->confirmed)
                                <button type="submit" class="btn btn-warning"><span class="fa fa-times"></span> Belum</button>
                              @else
                                <button type="submit" class="btn btn-success"><span class="fa fa-check"></span> Sudah</button>
                              @endif
                            </form>
                          </td>
                          <td>
                            <form action="/tickets/{{$row->id}}" method="POST">
                              {{ csrf_field() }}
                              {{ method_field('DELETE') }}
                              <button type="submit" class="btn btn-danger">
                                <span class="fa fa-trash"></span>
                              </button>
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