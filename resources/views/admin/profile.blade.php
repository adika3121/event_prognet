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
							<h3 class="text-primary">Profile</h3> </div>
					<div class="col-md-7 align-self-center">
							<ol class="breadcrumb">
									<li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
									<li class="breadcrumb-item active">Profile</li>
							</ol>
					</div>
			</div>
      <!-- End Bread crumb -->
			<div class="container-fluid">
				<!-- Start Page Content -->
				<div class="row">
					<div class="col-sm-12 col-md-4">
						<div class="card user">
							<div class="img-profile" style="background-image: url({{ asset('img/user/'.Auth::user()->img_profile)  }});"></div>
							<p>{{ Auth::user()->name }}</p>
							<span>{{ Auth::user()->email }}</span>
							{{-- <span class="birthday">{{ Auth::user()->birthday->format('l, d M Y') }}</span>
							<p class="address">
								{{ Auth::user()->address }}
							</p> --}}
						</div>
					</div>
					{{-- Edit Profile --}}
					<div class="col-sm-12 col-md-8">
						<div class="card">
							<div class="card-body">
								@include('dashboard.inc.notif')
								<form action="/users/update" method="POST" enctype="multipart/form-data">
									@csrf
									{{ method_field('PUT') }}
									{{-- Nama --}}
									<div class="form-group row">
										<div class="col-sm-3"><label>Nama</label></div>
										<div class="col-sm-8">
											<input type="text" class="form-control" name="name" value="{{ Auth::user()->name }}">
										</div>	
									</div>
									{{-- Email --}}
									<div class="form-group row">
										<div class="col-sm-3"><label>Email</label></div>
										<div class="col-sm-8">
											<input type="email" class="form-control" name="email" value="{{ Auth::user()->email }}">
										</div>	
									</div>
									{{-- Kelamin --}}
									<div class="form-group row">
										<div class="col-sm-3"><label>Jenis Kelamin</label></div>
										<div class="col-sm-4">
											<select name="gender" class="form-control">
												<option value="1">Laki-laki</option>
												<option value="0">Perempuan</option>
											</select>
										</div>	
									</div>
									{{-- Tanggal lahir --}}
									<div class="form-group row">
										<div class="col-sm-3"><label>Tanggal Lahir</label></div>
										<div class="col-sm-4">
											<input type="date" class="form-control" name="birthday" value="{{ Auth::user()->birthday->format('Y-m-d') }}">
										</div>	
									</div>
									{{-- Alamat --}}
									<div class="form-group row">
										<div class="col-sm-3"><label>Alamat</label></div>
										<div class="col-sm-8">
											<textarea class="form-control" name="address">{{ Auth::user()->address }}</textarea>
										</div>	
									</div>
									{{-- Foto profile --}}
									<div class="form-group row">
										<div class="col-sm-3"><label>Foto Profile</label></div>
										<div class="col-sm-6">
											<input type="file" class="form-control" name="img_profile">
										</div>	
									</div>
									<div class="form-group row">
										<div class="col-sm-3"></div>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-primary">Update Profile</button>
										</div>	
									</div>
								</form>
							</div>
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