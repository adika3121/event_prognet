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
                    <div class="col-sm-8">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Edit Profile</h4>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-group">
                                        <label>Nama</label>
                                        <input type="text" class="form-control" placeholder="Nama" value="{{Auth::user()->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Email</label>
                                        <input type="email" class="form-control" placeholder="Email" value="{{Auth::user()->email}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Tanggal lahir</label>
                                        <input type="date" class="form-control" value="{{Auth::user()->birthday}}">
                                    </div>
                                    <div class="form-group">
                                        <label>Jenis Kelamin</label>
                                        <select class="form-control">
                                            @if(Auth::user()->gender)
                                                <option value="1" selected>Laki-laki</option>
                                                <option value="0">Perempuan</option>
                                            @else
                                                <option value="1">Laki-laki</option>
                                                <option value="0" selected>Perempuan</option>
                                            @endif
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Alamat</label>
                                        <input type="text" class="form-control" value="{{Auth::user()->address}}">
                                    </div>
                                    
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="card card-user">
                            <div class="image">
                            </div>
                            <div class="card-body">
                                <div class="author">
                                    <a href="#">
                                        <img class="avatar border-gray" src="/images/img_profile/{{ Auth::user()->img_profile }}" alt="...">
                                        <h5 class="title">{{Auth::user()->name}}</h5>
                                    </a>
                                    <p class="description">
                                        {{Auth::user()->email}}
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection