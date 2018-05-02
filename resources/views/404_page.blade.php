@extends('layout.app')

@section('body')

<div id="all">
  @include('inc.header');
  {{-- Content --}}
  
  <div id="content">
    <div class="container">
      <div id="error-page" class="col-md-8 mx-auto text-center">
        <div class="box">
          <h3>Maaf, Halamain ini tidak ditemukan</h3>
          <h4 class="text-muted">Error 404 - Page not found</h4>
          <p class="buttons"><a href="/" class="btn btn-template-outlined"> Kembali ke Homepage</a>
          @if(!Auth::guest())
            <a href="/home" class="btn btn-template-main"> Kembali ke Dashboard</a>
          @endif
          </p>
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