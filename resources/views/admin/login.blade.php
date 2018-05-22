@extends('dashboard.layout.app')

@section('body')

<!-- Main wrapper  -->
<div id="main-wrapper">
    <div class="unix-login">
        <div class="container-fluid">
            <div class="row justify-content-center">
                <div class="col-lg-4">
                    <div class="login-content card">
                        <div class="login-form">
                            <h4 style="font-size: 25px">Admin Login</h4>
                            @include('dashboard.inc.notif')
                            <form method="POST" action="{{ route('admin.login') }}">
                              {{ csrf_field() }}
                                <div class="form-group">
                                    <label>Email address</label>
                                    <input name="email" type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <label>Password</label>
                                    <input name="password" type="password" class="form-control" placeholder="Password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                      <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                                  {{-- <label class="pull-right">
                                      <a href="#">Forgotten Password?</a>
                                    </label> --}}
                                </div>
                                <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Sign in</button>
                                {{-- <div class="register-link m-t-15 text-center">
                                    <p>Belum punya akun ? <a href="/register"> Sign Up</a></p>
                                </div> --}}
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