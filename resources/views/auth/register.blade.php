<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>
    
    
    <div class="limiter">
        <div class="container-login100" style="background-image: url('images/bg-01.jpg');">
            <div class="wrap-login100 p-l-55 p-r-55 p-t-65 p-b-54">
                <form class="login100-form validate-form" method="POST" action="/register">
                    {{ csrf_field() }}
                    <span class="login100-form-title p-b-49">
                        Register
                    </span>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Nama depan harus diisi">
                        <span class="label-input100">Nama Lengkap</span>
                        <input class="input100" type="text" name="name" placeholder="Masukan nama depan ">
                        <span class="focus-input100" data-symbol="&#xf205;"></span>
                    </div>

                    <div class="validate-input m-b-23" data-validate = "Jenis Kelamin harus diisi">
                        <span class="label-input10">Jenis Kelamin</span>
                        <br><br><label ><input type="radio" name="gender" value="1"> Laki-laki</label>
                        <label class="radio-inline"><input type="radio" name="gender" value="0"> Perempuan</label>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Tanggal lahir perlu dimasukan">
                        <span class="label-input100">Tanggal Lahir</span>
                        <br><br><input class="datepicker" type="text" name="birthday" placeholder="Masukan tanggal lahir ">
                    </div>
                    <br>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Alamat harus diisi">
                        <span class="label-input100">Alamat</span>
                        <input class="input100" type="text" name="address" placeholder="Masukan alamat">
                        <span class="focus-input100" data-symbol="&#xf201;"></span>
                    </div>

                    <div class="wrap-input100 validate-input m-b-23" data-validate = "Email harus diisi">
                        <span class="label-input100">Email</span>
                        <input class="input100" type="email" name="email" placeholder="Masukan email anda">
                        <span class="focus-input100" data-symbol="&#xf206;"></span>
                    </div>

                    <div class="wrap-input100 validate-input" data-validate="Password is required">
                        <span class="label-input100">Password</span>
                        <input class="input100" type="password" name="password" placeholder="Type your password">
                        <span class="focus-input100" data-symbol="&#xf190;"></span>
                    </div>

                    <br>
                    <br>
                    <div class="container-login100-form-btn">
                        <div class="wrap-login100-form-btn">
                            <div class="login100-form-bgbtn"></div>
                            <button class="login100-form-btn">
                                Register
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div id="dropDownSelect1"></div>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/animsition/js/animsition.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script src="vendor/daterangepicker/moment.min.js"></script>
    <script src="vendor/daterangepicker/daterangepicker.js"></script>
    <script src="vendor/countdowntime/countdowntime.js"></script>
    <script src="js/main.js"></script>

</body>
</html>