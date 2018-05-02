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
        <h3 class="text-primary">Event Baru</h3> </div>
        <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item"><a href="/events">Event</a></li>
          <li class="breadcrumb-item active">Event Baru</li>
        </ol>
      </div>
    </div>
    <!-- End Bread crumb -->
    <!-- Container fluid  -->
    <div class="container-fluid">
      <!-- Start Page Content -->
      <div class="row">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-sm-12">
                  <h4 class="card-title">Event Baru</h4>
                  <h6 class="card-subtitle">Isi form event baru</h6>
                </div>
              </div>
              @include('dashboard.inc.notif')
              <form method="POST" action="/events" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group row">
                  <label class="col-sm-2">Nama</label>
                  <input type="text" name="name" class="form-control col-sm-8">
                </div>
                <div class="form-group row">
                  <label class="col-sm-2">Jenis Event</label>
                  <select name="event_type_id" class="form-control col-sm-4">
                  @if(count($event_types) > 0)
                    @foreach($event_types as $row)
                      <option value="{{$row->id}}">{{ $row->name }}</option>
                    @endforeach
                  @endif
                  </select>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2">Tanggal</label>
                  <input type="date" name="start_date" class="form-control col-md-4">
                </div>
                <div class="form-group row">
                  <label class="col-sm-2">Deskripsi</label>
                  <textarea style="height: 80px" name="description" class="form-control col-sm-8"></textarea>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2">Lokasi</label>
                  <input type="text" name="location" class="form-control col-sm-8">
                </div>
                <div class="form-group row">
                  <label class="col-sm-2">Jumlah Tiket</label>
                  <input type="number" name="max_ticket" class="form-control col-sm-2">
                </div>
                <div class="form-group row">
                  <label class="col-sm-2">Gambar Event</label>
                  <input type="file" name="image" class="form-control col-sm-4">
                </div>
                <center>
                  <button style="margin: 20px 0 40px" type="submit" class="btn btn-lg btn-primary">
                    <span class="fa fa-save"></span> Simpan
                  </button>
                </center>
              </form>
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