@extends('dashboard.layout.app')

@section('body')

<!-- Main wrapper  -->
<div id="main-wrapper">
	<div class="unix-login">
		<div class="container-fluid">
			<div class="row justify-content-center">
				<div class="col-lg-6">
					<div class="login-content card">
						<div class="login-form">
							<h4 style="font-size: 25px">Register</h4>
							@include('dashboard.inc.notif')
							<form method="POST" action="/register">
								{{ csrf_field() }}
								<div class="form-group">
										<label>Nama</label>
										<input name="name" type="text" class="form-control">
								</div>
								<div class="form-group">
										<label>Tanggal Lahir</label>
										<input name="birthday" type="date" class="form-control">
								</div>
								<div class="form-group">
										<label>Jenis Kelamin</label>
										<select name="gender" class="form-control">
											<option value="1">Laki-laki</option>
											<option value="0">Perempuan</option>
										</select>
								</div>
								<div class="form-group">
										<label>Alamat</label>
										<textarea name="address" class="form-control" rows="3"></textarea>
								</div>
								<div class="form-group">
										<label>Email address</label>
										<input name="email" type="email" class="form-control">
								</div>
								<div class="form-group">
										<label>Password</label>
										<input name="password" type="password" class="form-control">
								</div>
								<button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign Up</button>
								<div class="register-link m-t-15 text-center">
										<p>Sudah punya akun ? <a href="/login"> Sign In</a></p>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection

{{-- CSS --}}
@section('css')
@endsection

{{-- JS --}}
@section('js')
@endsection