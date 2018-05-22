@extends('layout.app')

@section('body')

<div id="all">
	@include('inc.header')
	
	{{-- Header --}}
	<div id="heading-breadcrumbs" class="border-top-0 border-bottom-0">
		<div class="container">
			<div class="row d-flex align-items-center flex-wrap">
				<div class="col-md-7">
				<h1 class="h2">Hasil Pencarian: {{$name}}</h1>
				</div>
			</div>
		</div>
	</div>

	{{-- Daftar Event --}}
	<div id="content">
			<div class="container">
				<div class="row bar">
					<div id="blog-listing-medium" class="col-md-9">
					@if(count($events) > 0)
						@foreach($events as $event)
							<section class="post">
								<div class="row">
									<div class="col-md-4">
										<a href="/events/{{ $event->id }}" style="display:block">
											<div class="image" style="background-image: url({{asset('img/events/'.$event->image)}})"></div>
										</a>
									</div>
									<div class="col-md-8">
										<h2 class="h3 mt-0"><a href="/events/{{ $event->id }}">{{ $event->name }}</a></h2>
										<div class="d-flex flex-wrap justify-content-start text-xs">
											<p class="author-category">By <a href="#">{{ $event->user->name }}</a></p>
											<p class="date-comments">
												<a href="#">
													<i class="fa fa-calendar-o"></i> {{ $event->start_date->format('l, d M Y h:i A') }}
												</a>
											</p>
										</div>
										<p class="intro">{{ $event->description }}</p>
										<div class="detail">
											<span class="badge badge-primary">{{ $event->event_type->name }}</span>
											<span class="badge badge-success">Akan Datang</span>
											<span class="badge badge-info">
												<i class="fa fa-ticket"></i>
												{{ $event->tickets->count() }}/{{ $event->max_ticket }}
											</span>
										</div>
									</div>
								</div>
							</section>
						@endforeach
					@else
						<h3 style="color: #555; text-align: center;">Tidak Ditemukan</h3>
					@endif
						{{-- Pagination --}}
						{{-- <ul class="pager d-flex align-items-center justify-content-between list-unstyled">
							<li class="previous"><a href="#" class="btn btn-template-outlined">← Older</a></li>
							<li class="next disabled"><a href="#" class="btn btn-template-outlined">Newer →</a></li>
						</ul> --}}
					</div>
					<div class="col-md-3">
						<div class="panel panel-default sidebar-menu">
							<div class="panel-heading">
								<h3 class="h4 panel-title">Filter</h3>
							</div>
							<div class="panel-body">
								<form role="search">
									<div class="form-group">
										<label>Kata kunci</label>
										<input type="text" name="name" class="form-control" placeholder="Cari" @if(isset($name)) value="{{ $name }}" @endif>
									</div>
									<div class="form-group">
										<label>Jenis Event</label>
										<select name="event_type_id" class="form-control">
											<option value="" @if(isset($event_type_id)) selected @endif>Semua Jenis</option>
											@foreach($event_types as $row)
												<option value="{{ $row->id }}"
													@if(isset($event_type_id))
														@if($event_type_id == $row->id) selected @endif
													@endif>
													{{ $row->name }}
												</option>
											@endforeach
										</select>
									</div>
									<div class="form-group">
										<label>Kapan</label>
										<select name="when" class="form-control">
												<option value="1">Minggu ini</option>
												<option value="2">Bulan ini</option>
												<option value="3">Tahun ini</option>
											</select>
									</div>
									<button type="submit" class="btn btn-block btn-template-main">
										<i class="fa fa-search"></i> CARI
									</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

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