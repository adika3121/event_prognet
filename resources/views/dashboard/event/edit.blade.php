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
        <h3 class="text-primary">Edit Event</h3> </div>
        <div class="col-md-7 align-self-center">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="/home">Home</a></li>
          <li class="breadcrumb-item"><a href="/events">Event</a></li>
          <li class="breadcrumb-item active">{{ $event->name }}</li>
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
                  <h4 class="card-title">Edit Event</h4>
                  <h6 class="card-subtitle">Isi form edit event</h6>
                </div>
              </div>
              @include('dashboard.inc.notif')
              <form method="POST" action="/events/{{ $event->id }}" enctype="multipart/form-data">
                {{ method_field('PUT') }}
                {{ csrf_field() }}
                <div class="form-group row">
                  <label class="col-sm-2">Nama</label>
                  <input type="text" name="name" class="form-control col-sm-8" value="{{ $event->name }}">
                </div>
                <div class="form-group row">
                  <label class="col-sm-2">Jenis Event</label>
                  <select name="event_type_id" class="form-control col-sm-4">
                  @if(count($event_types) > 0)
                    @foreach($event_types as $row)
                      <option value="{{$row->id}}"
                        @if($event->event_type_id == $row->id)
                            selected
                        @endif 
                        >{{ $row->name }}</option>
                    @endforeach
                  @endif
                  </select>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2">Tanggal</label>
                  <input type="date" name="start_date" class="form-control col-md-4" value="{{ date('Y-m-d', strtotime($event->start_date)) }}">
                </div>
                <div class="form-group row">
                  <label class="col-sm-2">Deskripsi</label>
                  <textarea style="height: 80px" name="description" class="form-control col-sm-8">{{ $event->description }}</textarea>
                </div>
                <div class="form-group row">
                  <label class="col-sm-2">Lokasi</label>
                  <input type="text" name="location" class="form-control col-sm-8" value="{{ $event->description }}">
                </div>
                <div class="form-group row">
                  <label class="col-sm-2">Jumlah Tiket</label>
                  <input type="number" name="max_ticket" class="form-control col-sm-2" value="{{ $event->max_ticket }}">
                </div>
                <div class="form-group row">

                  <label class="col-sm-2">Gambar Event</label>
                  <div class="col-sm-4">
                    <div class="event-image" style="background-image: url({{ asset('img/events/'.$event->image)  }}); margin-bottom: 10px"></div>
                    <input type="file" name="image" class="form-control">
                  </div>
                  
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