
@if(session('success'))
	<div class="alert alert-success alert-dismissible fade show">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	    {{ session('success') }}
	</div>
@endif

@if(session('error'))
	<div class="alert alert-danger alert-dismissible fade show">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	    {{ session('error') }}
	</div>
@endif

@if(count($errors) > 0)
	<div class="alert alert-danger alert-dismissible fade show">
	    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
	    {{ $errors->first() }}
	</div>
@endif