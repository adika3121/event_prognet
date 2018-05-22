<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{ asset('vendors/styles/style.css') }}">
    @yield('css')
</head>

<body>
   <div class="login-wrap customscroll d-flex align-items-center flex-wrap justify-content-center pd-20">
        <div class="login-box bg-white box-shadow pd-30 border-radius-5">
            @include('inc.notif')
            <img src="vendors/images/login-img.png" alt="login" class="login-img">
            <h2 class="text-center mb-30">Login</h2>
            <form method="POST" action="/register">
                {{ csrf_field() }}
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nama" name="name">
                </div>
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                </div>
                <div class="form-group">
                    <div class="form-group">
                        <label>Gender</label>
                        <div class="d-flex">
                        <div class="custom-control custom-radio mb-5 mr-20">
                            <input type="radio" id="customRadio4" name="gender" value="1" class="custom-control-input">
                            <label class="custom-control-label weight-400" for="customRadio4">Male</label>
                        </div>
                        <div class="custom-control custom-radio mb-5">
                            <input type="radio" id="customRadio5" name="gender" value="0" class="custom-control-input">
                            <label class="custom-control-label weight-400" for="customRadio5">Female</label>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Tanggal Lahir</label>
                    <input name="birthday" class="form-control" type="date">
                </div>
                <div class="form-group">
                    <label>Alamat</label>
                    <textarea name="address" class="form-control" style="max-height: 80px"></textarea>
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password" name="password">
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group">
                            <button submit="submit" class="btn btn-outline-primary btn-lg btn-block">Sign Up</button>
                        </div>
                    </div>
                    {{-- <div class="col-sm-6">
                        <div class="forgot-password padding-top-10"><a href="forgot-password.php">Forgot Password</a></div>
                    </div> --}}
                </div>
                <div class="row">
                    <p style="margin: 0 auto">Sudah punya akun? <a class="text-primary" href="/login">Login disini</a></p>
                </div>
            </form>
        </div>
    </div>
      
    <script src="{{ asset('vendors/scripts/script.js') }}"></script>
    @yield('js')
</body>

</html>