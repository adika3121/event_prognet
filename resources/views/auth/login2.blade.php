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
            <form method="POST" action="/login">
                {{ csrf_field() }}
                <div class="input-group custom input-group-lg">
                    <input type="email" class="form-control" placeholder="Email" name="email">
                    <div class="input-group-append custom">
                        <span class="input-group-text"><i class="fa fa-user" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="input-group custom input-group-lg">
                    <input type="password" class="form-control" placeholder="**********" name="password">
                    <div class="input-group-append custom">
                        <span class="input-group-text"><i class="fa fa-lock" aria-hidden="true"></i></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="input-group">
                            <button submit="submit" class="btn btn-outline-primary btn-lg btn-block">Sign In</button>
                        </div>
                    </div>
                    {{-- <div class="col-sm-6">
                        <div class="forgot-password padding-top-10"><a href="forgot-password.php">Forgot Password</a></div>
                    </div> --}}
                </div>
                <div class="row">
                    <p style="margin: 0 auto">Belum punya akun? <a class="text-primary" href="/register">Register disini</a></p>
                </div>
            </form>
        </div>
    </div>
      
    <script src="{{ asset('vendors/scripts/script.js') }}"></script>
    @yield('js')
</body>

</html>