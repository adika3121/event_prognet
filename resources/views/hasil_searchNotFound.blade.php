<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
  	<link rel="apple-touch-icon" sizes="76x76" href="assets/img/apple-icon.png">
  	<link rel="icon" type="image/png" href="assets/img/favicon.png">

  	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  	<title>Search "keyword"</title>

  	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <link href="bootstrap3/css/bootstrap.css" rel="stylesheet" />
  	<link href="assets/css/gsdk.css" rel="stylesheet" />
    <link href="assets/css/card.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/demo.css" rel="stylesheet" />
  	<link href="assets/css/style.css" rel="stylesheet" />

      <!--     Font Awesome     -->
      <link href="bootstrap3/css/font-awesome.css" rel="stylesheet">
  		<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
      <link href='http://fonts.googleapis.com/css?family=Grand+Hotel' rel='stylesheet' type='text/css'>
  </head>
  <body>
    <div id="navbar-full">
      <div class="container">
          <nav class="navbar orange navbar-fixed-top" role="navigation">

  					<div class="container">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand white" href="#gsdk">Event Bagus</a> <!-- Nama website-nya -->
              </div>

              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
  							<!-- Isi Dari Navigation Bar kiri -->
                <ul class="nav navbar-nav">
                  <li class="active"><a href="#kategori_event" class="scroll white">Kategori Event</a></li>
                  <li>
                    <a href="javascript:void(0);" data-toggle="search" class="hidden-xs"><i class="fa fa-search white"></i></a>
                </li>
              </ul>
               <form class="navbar-form navbar-left navbar-search-form" role="search">
                 <div class="form-group">
                      <input type="text" value="" class="form-control" placeholder="Search...">
                 </div>
              </form>

  							<!-- Isi Dari Navigation Bar kanan -->
                <ul class="nav navbar-nav navbar-right">
                      <li><a href="#" class="white">Register</a></li>

                      <li><button href="#" class="btn btn-round btn-default white">Sign in</button></li>
                 </ul>

              </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
          </nav>
      </div><!--  end container-->
    </div> <!-- akhir navbar -->

    <div class="main mt-90">
      <div class="container">
        <!-- Header dari hasil search -->
        <div class="row">
          <div class="col-md-12">
           <h4 class="tengah">Pencarian Untuk "Keyword" Tidak Ditemukan</h4>
           <li class="ikon-murung"><i class="fa fa-frown-o ukuran-besar"></i></li>

           <h5 class="tengah mt-110 mb-30">Tidak Menemukan yang Anda Cari ? Lihat Event Terdekat Ini </h5>

           <!--Tampilkan event terdekat berdasarkan waktu-->
           <div class="row">
             <div class="col-md-12">
               <div class="blog-card">
                  <div class="photo photo1"></div>
                  <ul class="details">
                      <li class="author"><a href="#">Himpunan Mahasiswa Teknologi Informasi</a></li>
                      <li class="date">Aug. 24, 2015</li>
                      <li class="tags">
                          <ul>
                              <li><a href="#">Learn</a></li>
                              <li><a href="#">Code</a></li>
                              <li><a href="#">HTML</a></li>
                              <li><a href="#">CSS</a></li>
                          </ul>
                      </li>
                  </ul>
                  <div class="description">
                    <div class="tgl">
                      <span class="day">12</span>
                      <span class="month">Aug</span>
                      <span class="year">2016</span>
                    </div>
                      <h3>Seminar Nasional Teknologi Informasi</h1>
                      <h5>Internet Of Thing</h2>
                      <p class="#"> quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                      <br>
                      <a href="#">Read More</a>
                  </div>
              </div>
             </div>
             <div class="row">
               <div class="blog-card">
                  <div class="photo photo1"></div>
                  <ul class="details">
                      <li class="author"><a href="#">John Doe</a></li>
                      <li class="date">Aug. 24, 2015</li>
                      <li class="tags">
                          <ul>
                              <li><a href="#">Learn</a></li>
                              <li><a href="#">Code</a></li>
                              <li><a href="#">HTML</a></li>
                              <li><a href="#">CSS</a></li>
                          </ul>
                      </li>
                  </ul>
                  <div class="description">
                    <div class="tgl">
                      <span class="day">12</span>
                      <span class="month">Aug</span>
                      <span class="year">2016</span>
                    </div>
                      <h3>Learning to Code</h1>
                      <h5>Opening a door to the future</h2>
                      <p class="#"> quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                      <br>
                      <a href="#">Read More</a>
                  </div>
              </div>
           </div>

          </div>
        </div>

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
      </div> <!--Akhir container -->
    </div><!-- Akhir Main -->
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
