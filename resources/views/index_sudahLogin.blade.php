<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="assets/img/favicon.png">

	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<!-- Ini judul website -->
	<title>Event Bagus</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />

	<link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
	<link href="assets/css/gsdk.css" rel="stylesheet" />
	<link href="assets/css/demo.css" rel="stylesheet" />
	<link href="assets/css/style.css" rel="stylesheet" />

	<!--     Font Awesome     -->
	<link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
	<link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- Navbar full -->
<div id="navbar-full">
    <div class="container">
        <nav class="navbar navbar-ct-orange navbar-transparent navbar-fixed-top" role="navigation">

			<div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#gsdk">Event Bagus</a> <!-- Nama website-nya -->
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<!-- Isi Dari Navigation Bar kiri -->
              <ul class="nav navbar-nav">
                <li class="active"><a href="#kategori_event" class="scroll">Kategori Event</a></li>
                <li>
                    <a href="javascript:void(0);" data-toggle="search" class="hidden-xs"><i class="fa fa-search"></i></a>
                </li>
              </ul>
               <form class="navbar-form navbar-left navbar-search-form" role="search">
                 <div class="form-group">
                      <input type="text" value="" class="form-control" placeholder="Search...">
                 </div>
              </form>
			<!-- Isi Dari Navigation Bar kanan -->
              <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown">
											<a class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <img class="img-circle img-responsive img_akun"src="assets/img/dulau.jpg" alt=""> </img>
                        <p class="float-right">
                            Account
                        </p>
												<span class="caret clear"></span>
											</a>
											<ul class="dropdown-menu">
												<li> <a href="#">Lihat Dashboard</a> </li>
												<li> <a href="#">Keluar</a> </li>
											</ul>
										</li>

                     <li><a href="/login" class="btn btn-round btn-default">Sign in</a></li>
               </ul>

            </div><!-- /.navbar-collapse -->
          </div><!-- /.container-fluid -->
        </nav>
    </div><!--  end container-->

		<!-- Membuat Tampilan awal parallax -->
    <div class='blurred-container'>
        <div class="motto">
            <div>Event</div>
            <div class="border">Bagus</div>

        </div>
        <div class="img-src" style="background-image: url('assets/img/Roman-Baths-Sunset-Wedding-06.jpg')"></div>
        <div class='img-src blur' style="background-image: url('assets/img/Roman-Baths-Sunset-Wedding-06_blur.png')"></div>
    </div> <!-- Akhir parallax -->

</div> <!-- Akhir navbar -->

<div class="main">
    <div class="container tim-container">
			<!-- Judul awal -->
			<div class="tim-title judul">
					<h2>Event Terkini</h2>
			</div>
			<hr/>
			<!--- row pertama deretan event -->
			<div class="row">
				<!--- kolom pertama event -->
				<div class="col-md-4">
					<div class="card">
						<div class="content">
							<div class="row">
								<div class="col-md-12 ">
									<img class="img-responsive card-img-top" src="assets/img/event_header.jpg" alt="">
									<div class="card-block">
										<h3 class="card-title">Seminar Nasional TI</h3>
										<p class="card-text">Membahas seputar topik IOT</p>
										<a href="detail_event" class="btn btn-success">Lihat Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>	<!--- Akhir Kolom -->

				<!--- Awal kolom kedua event -->
				<div class="col-md-4">
					<div class="card">
						<div class="content">
							<div class="row">
								<div class="col-md-12">
									<img class="img-responsive card-img-top" src="assets/img/event_header.jpg" alt="">
									<div class="card-block">
										<h3 class="card-title">Seminar Nasional TI</h3>
										<p class="card-text">Membahas seputar topik IOT</p>
										<a href="#" class="btn btn-success">Lihat Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Akhir kolom kedua -->

				<!--- Awal kolom ketiga event -->
				<div class="col-md-4">
					<div class="card">
						<div class="content">
							<div class="row">
								<div class="col-md-12">
									<img class="img-responsive card-img-top" src="assets/img/event_header.jpg" alt="">
									<div class="card-block">
										<h3 class="card-title">Seminar Nasional TI</h3>
										<p class="card-text">Membahas seputar topik IOT</p>
										<a href="detail_event" class="btn btn-success">Lihat Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!--- Akhir Kolom -->
			</div> <!--- Akhir row pertama event -->

			<!-- Bagian Kategori Event -->
			<section id='kategori_event'>
				<div class="tim-title judul2">
						<h2>Kategori Event</h2>
				</div>
				<hr/>
				<!--- Row Pertama dari blok-blok kategori event -->
				<div class="row mb-10">
					<div class="col-md-7">
						<div class="blok_kategori">
							<img src="assets/img/celebration-party-03.jpg" alt="">
							<h2>Pesta</h2>
							<h3>Pesta Casual, Perayaan Sepanjang Malam, Dunia Malam</h3>
						</div>
					</div> <!-- Akhir Blok satu -->
					<div class="col-md-5">
						<div class="blok_kategori ">
							<img src="assets/img/AA18-show-shots-05-1300x520.jpg" alt="">
							<h2>Seni</h2>
							<h3>Stand Up Comedy, Pameran Seni, Festival Film</h3>
						</div>
					</div> <!-- Akhir Blok dua -->
				</div> <!-- Akhir Row Pertama -->

				<!-- Row Kedua blok kategori event -->
				<div class="row mb-10">
					<div class="col-md-4">
						<div class="blok_kategori">
							<img src="assets/img/impro03_small.jpg" alt="">
							<h2>Kelas Interaktif</h2>
							<h3>Seminar, Workshop, Sertifikasi</h3>
						</div>
					</div>	<!-- Akhir blok pertama -->

					<div class="col-md-4">
						<div class="blok_kategori">
							<img src="assets/img/download.jpg" alt="">
							<h2>Makanan dan Minuman</h2>
							<h3>Festival Rakyat, Wisata Kuliner</h3>
						</div>
					</div>	<!--- Akhir blok kedua -->

					<div class="col-md-4">
						<div class="blok_kategori">
							<img src="assets/img/Live-Music3-1024x512.jpg" alt="">
							<h2>Musik</h2>
							<h3>Konser Musik,Festival Musik Besar </h3>
						</div>
					</div><!-- Akhir blok ketiga -->
				</div> <!--- - - - Akhir Row Kedua -->

				<!--- Row ketiga blok kategori event -->
				<div class="row mb-10">
					<div class="col-md-5">
						<div class="blok_kategori">
							<img src="assets/img/yogaclass101whattoexpect2.jpg" alt="">
							<h2>Olahraga</h2>
							<h3>Balap Rintangan, Kelas Yoga, Event olahraga</h3>
						</div>
					</div><!-- Akhir blok pertama -->

					<div class="col-md-7">
						<div class="blok_kategori">
							<img src="assets/img/startup-networking-for-web.jpg" alt="">
							<h2>Rupa-rupa</h2>
							<h3>Pertemuan Penggemar Hobi, Pertemuan Bisnis, Panel Diskusi</h3>
						</div>
					</div><!-- Akhir blok kedua -->
				</div> <!-- Akhir row ketiga -->
			</section><!-- akhir bagian kategori event -->

			<!-- Bagian Footer -->
			<footer class="footer">
				<div class="container-fluid">
                <nav class="pull-left">
									<ul>
											<li>
													<a href="#">
															Kelompok 4
													</a>
											</li>
											<li>
													<a href="#">
														 Pratikum Pemrograman Internet
													</a>
											</li>
											<li>
													<a href="#">
															Teknologi Informasi Universitas Udayana
													</a>
											</li>
									</ul>
                </nav>
                <div class="copyright pull-right">
                    &copy; <script>document.write(new Date().getFullYear())</script>, made by Kelompok 4
                </div>
            </div>
			</footer> <!-- Akhir Bagian Footer -->

    </div> <!-- Akhir class container -->

</div><!-- Akhir class main -->

</body>

  <script src="jquery/jquery-1.10.2.js" type="text/javascript">
	</script>
	<script src="assets/js/jquery-ui-1.10.4.custom.min.js" type="text/javascript"></script>

	<script src="bootstrap3/js/bootstrap.js" type="text/javascript"></script>
	<script src="assets/js/gsdk-checkbox.js"></script>
	<script src="assets/js/gsdk-radio.js"></script>
	<script src="assets/js/gsdk-bootstrapswitch.js"></script>
	<script src="assets/js/get-shit-done.js"></script>
    <script src="assets/js/custom.js"></script>

<script type="text/javascript">

		$(document).on('click', 'a[href^="#"]', function (event) {
				event.preventDefault();
				//melakukan smoth scrolling
				$('html, body').animate({
						scrollTop: $($.attr(this, 'href')).offset().top
				}, 500);
		});

		$('.btn-tooltip').tooltip();
    $('.label-tooltip').tooltip();
    $('.pick-class-label').click(function(){
        var new_class = $(this).attr('new-class');
        var old_class = $('#display-buttons').attr('data-class');
        var display_div = $('#display-buttons');
        if(display_div.length) {
        var display_buttons = display_div.find('.btn');
        display_buttons.removeClass(old_class);
        display_buttons.addClass(new_class);
        display_div.attr('data-class', new_class);
        }
    });
    $( "#slider-range" ).slider({
		range: true,
		min: 0,
		max: 500,
		values: [ 75, 300 ],
	});
	$( "#slider-default" ).slider({
			value: 70,
			orientation: "horizontal",
			range: "min",
			animate: true
	});
	$('.carousel').carousel({
      interval: 4000
    });


</script>
</html>
