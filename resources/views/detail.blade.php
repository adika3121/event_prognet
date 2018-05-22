@extends('layout.app')

@section('body')

<div id="all">
	@include('inc.header');
	{{-- Content --}}
	
	<div id="content">
		<div class="container">
			<section class="bar no-padding-bottom">
				<div class="row">
					<div class="col-md-12">
						<div class="heading">
							<h3>{{ $event->name }}</h3>
						</div>
					</div>
				</div>
			</section>
			<section class="bar">
				<div class="row portfolio-project">
					<div class="col-sm-8">
						<div class="event-image" style="background-image: url({{ asset('img/events/'.$event->image)  }});"></div>
						<div class="heading" style="margin-top: 20px">
							<h4>Deskripsi</h4>
						</div>
						<p style="text-align: justify; font-size: 17px">
							{{ $event->description }}
						</p>
					</div>
					<div class="col-sm-4">
						<div class="project-more" style="margin-top: 10px">
							<h4><span class="fa fa-chain"></span> Jenis Event</h4>
							<p>{{ $event->event_type->name }}</p>
							<h4><span class="fa fa-map-marker"></span> Lokasi</h4>
							<p>{{ $event->location }}</p>
							<h4><span class="fa fa-calendar-check-o"></span> Tanggal</h4>
							<p>{{ $event->start_date }}</p>
							<h4><span class="fa fa-ticket"></span> Jumlah Tiket</h4>
							<p style="font-size: 23px">{{ $event->tickets->count() }}/<b>{{ $event->max_ticket }}</b></p>
						</div>
						@if(!Auth::guest())
							@if($ordered)
								<button style="margin: 10px 0" class="btn btn-template-main">
									<span class="fa fa-check"></span> SUDAH DIPESAN
									</button>
							@elseif($event->user_id == Auth::user()->id)
								@if($event->user->id == Auth::user()->id)
									<a href="/events/{{$event->id}}/edit" class="btn btn-primary">
										<span class="fa fa-cog"></span> Edit Event
									</a>
									<a href="/events/{{$event->id}}/ticket" class="btn btn-info">
										<span class="fa fa-ticket"></span> Daftar Tiket
									</a>
								@endif
							@else
								<form method="POST" action="/tickets">
									{{ csrf_field() }}
									<input type="hidden" name="event_id" value="{{$event->id}}">
									<button type="submit" style="margin: 10px 0" class="btn btn-template-main">
										<span class="fa fa-tag"></span> PESAN TIKET
									</button>
								</form>
							@endif
						@else
							<form method="POST" action="/tickets">
								{{ csrf_field() }}
								<input type="hidden" name="event_id" value="{{$event->id}}">
								<button type="submit" style="margin: 10px 0" class="btn btn-template-main">
									<span class="fa fa-tag"></span> PESAN TIKET
								</button>
							</form>
						@endif
					</div>
				</div>
			</section>
		</div>
	</div>
	
	@include('inc.footer')	

</div>

@endsection

{{-- CSS --}}
@section('css')
@endsection

{{-- JS --}}
@section('js')
	@if(session('success'))
		swal({
			title: "Sukses",
			text: "Tiket Berhasil Dipesan",
			icon: "success",
			button: false,
			timer: 1200
		})
	@endif
@endsection