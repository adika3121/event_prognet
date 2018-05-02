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
        <h3 class="text-primary">Tiket</h3> </div>
        <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item active">Tiket</li>
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
                  <h4 class="card-title">Tabel Tiket</h4>
                  <h6 class="card-subtitle">Daftar tiket yang dipesan</h6>
                </div>
              </div>
              <div class="table-responsive m-t-10">
                <table id="myTable" class="table">
                  <thead>
                      <tr>
                        <th>No</th>
                        <th>Nama Event</th>
                        <th>Tanggal Memesan</th>
                        <th>Operasi</th>
                      </tr>
                  </thead>
                  <tbody>
                  @if(count($tickets) > 0)
                    @foreach($tickets as $i => $row)
                      <tr>
                          <td>{{ $i + 1 }}</td>
                          <td><a href="/events/{{ $row->id }}" class="text-primary">{{ $row->event->name }}</a></td>
                          <td>{{ $row->created_at }}</td>
                          <td>
                            <div class="btn-group">
                              <button class="btn btn-info" onclick="kode('{{$row->code}}')">
                                <span class="fa fa-eye"></span>
                              </button>
                              <a href="#" class="btn btn-danger" onclick="event.preventDefault();
                                  document.getElementById('destroy').submit();">
                                <span class="fa fa-trash"></span>
                              </a>
                            </div>
                            <form id="destroy" action="/tickets/{{ $row->id }}" method="POST" style="display: none;">
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
  <link href="{{asset('dashboard/css/lib/sweetalert/sweetalert.css')}}" rel="stylesheet">
@endsection

{{-- JS --}}
@section('js')
  <script src="{{asset('dashboard/js/lib/sweetalert/sweetalert.min.js')}}"></script>
  <script src="{{asset('dashboard/js/lib/datatables/datatables.min.js')}}"></script>
  <script src="{{asset('dashboard/js/lib/datatables/datatables-init.js')}}"></script>
  <script type="text/javascript">
      
    function kode(code){
      swal({
        'title': 'Kode Tiket',
        'text': code,
        'type': 'info'
      });
    }

  </script>
@endsection