@extends('layout.app')

@section('body')

<div id="all">
  @include('inc.header');
  <section style="background: url({{ asset('page/img/fixed-background-2.jpg') }}) center top no-repeat; background-size: cover;" class="bar no-mb color-white text-center bg-fixed relative-positioned">
    <div class="dark-mask"></div>
    <div class="container">
      <div class="icon icon-outlined icon-lg"><i class="fa fa-calendar-check-o"></i></div>
      <h3 class="text-uppercase">Selamat Datang di Event Bagus</h3>
      <p class="lead">Tempat dimana kamu dapat mencari dan berbagi event-event menarik dan menyenangkan</p>
    </div>
  </section>
  <section class="bg-white bar">
    <div class="container">
      <div class="heading text-center">
        <h2>Event Terbaru</h2>
      </div>
      @php
        $jumlah = 0;
      @endphp
      @foreach($events as $event)
        @if($jumlah == 0)
          <div class="row">
        @endif
        <div class="col-lg-4">
          <div class="home-blog-post">
            <div class="image" style="background-image: url({{asset('img/events/'.$event->image)}})">
              <div class="overlay d-flex align-items-center justify-content-center"><a href="/events/{{ $event->id }}" class="btn btn-template-outlined-white"><i class="fa fa-chain"> </i> Read More</a></div>
            </div>
<<<<<<< HEAD
            <div class="text">
              <h4><a href="/events/{{ $event->id }}">{{ $event->name }}</a></h4>
              <p class="author-category">By <a href="#">{{ $event->user->name }}</a>  {{-- in <a href="blog.html">Webdesign</a></p> --}}
              <p class="intro">
                {{ $event->description }}
              </p>
              <div class="detail">
                <span class="badge badge-primary">{{ $event->event_type->name }}</span>
                <span class="badge badge-success">Akan Datang</span>
                <span class="badge badge-info">Tiket {{ $event->tickets->count() }}/{{$event->max_ticket}}</span>
              </div>
            </div>
          </div>
=======

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
							<!-- Isi Dari Navigation Bar kiri -->
              <ul class="nav navbar-nav">
                <li class="active"><a href="#kategori_event" class="scroll">Kategori Event</a></li>
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
                    <li><a href="/register">Register</a></li>

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

>>>>>>> a4e45990bf434a1a4d43e943fb2583614b2484ec
        </div>
        @php
          $jumlah++;
        @endphp
        @if($jumlah >= 3)
          @php
            $jumlah = 0;
          @endphp
            </div>
<<<<<<< HEAD
        @endif
      @endforeach
      </div>
      <div class="pages">
        <p class="loadMore text-center"><a href="#" class="btn btn-template-outlined"><i class="fa fa-chevron-down"></i> Load more</a></p>
        <!-- <nav aria-label="Page navigation example" class="d-flex justify-content-center">
          <ul class="pagination">
            <li class="page-item"><a href="#" class="page-link"> <i class="fa fa-angle-double-left"></i></a></li>
            <li class="page-item active"><a href="#" class="page-link">1</a></li>
            <li class="page-item"><a href="#" class="page-link">2</a></li>
            <li class="page-item"><a href="#" class="page-link">3</a></li>
            <li class="page-item"><a href="#" class="page-link">4</a></li>
            <li class="page-item"><a href="#" class="page-link">5</a></li>
            <li class="page-item"><a href="#" class="page-link"><i class="fa fa-angle-double-right"></i></a></li>
          </ul>
        </nav> -->
      </div>
    </div>
  </section>
  <!-- FOOTER -->
  @include('inc.footer')

</div>

@endsection

{{-- CSS --}}
@section('css')
@endsection

{{-- JS --}}
@section('js')
@endsection
=======
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
>>>>>>> a4e45990bf434a1a4d43e943fb2583614b2484ec
