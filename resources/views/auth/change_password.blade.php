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
					{{-- Edit Profile --}}
					<div class="col-sm-12">
						<div class="card">
							<div class="card-body">
								@include('dashboard.inc.notif')
								<form action="/users/change_password" method="POST" enctype="multipart/form-data">
									@csrf
									{{-- Nama --}}
									<div class="form-group row">
										<div class="col-sm-3"><label>Password Lama</label></div>
										<div class="col-sm-8">
											<input type="password" class="form-control" name="old_password">
										</div>	
									</div>
									<div class="form-group row">
										<div class="col-sm-3"><label>Password Baru</label></div>
										<div class="col-sm-8">
											<input type="password" class="form-control" name="new_password">
										</div>	
									</div>
									<div class="form-group row">
										<div class="col-sm-3"></div>
										<div class="col-sm-6">
											<button type="submit" class="btn btn-primary">Ganti Password</button>
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