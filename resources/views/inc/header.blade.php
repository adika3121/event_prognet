<!-- Navbar Start-->
<header class="nav-holder make-sticky">
  <div id="navbar" role="navigation" class="navbar navbar-expand-lg">
    <div class="container">
      <a href="index.html" class="navbar-brand home">
        <img src="{{ asset('page/img/logo.png') }}" alt="Universal logo" class="d-none d-md-inline-block">
        <img src="{{ asset('page/img/logo-small.png') }}" class="d-inline-block d-md-none">
      </a>
      <button type="button" data-toggle="collapse" data-target="#navigation" class="navbar-toggler btn-template-outlined"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
      <div id="navigation" class="navbar-collapse collapse">
        <ul class="nav navbar-nav mr-auto">
          <form class="form-inline my-2 my-lg-0" id="search">
            <input class="form-control mr-sm-2" type="search" placeholder="Cari Event.." aria-label="Search">
            <select class="form-control">
              <option>Pesta</option>
              <option>Olahraga</option>
            </select>
            <button class="btn btn-template-main my-2 my-sm-0" type="submit">
              <span class="fa fa-search"></span> Search
            </button>
          </form>
        </ul>
        <ul class="nav navbar-nav ml-auto">
          <li><a href="/events/create">BUAT EVENT</a></li>
        @if(Auth::guest())
          <li><a href="/login">SIGN IN</a></li>
        @else
          <!-- ========== Contact dropdown ==================-->
          <li class="nav-item dropdown"><a href="javascript: void(0)" data-toggle="dropdown" class="dropdown-toggle">{{ Auth::user()->name }} <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li class="dropdown-item"><a href="/home" class="nav-link">Dashboard</a></li>
              <li class="dropdown-item"><a href="contact3.html" class="nav-link">Log out</a></li>
            </ul>
          </li>
        @endif
          <!-- ========== Contact dropdown end ==================-->
        </ul>
      </div>
      <div id="search" class="collapse clearfix">
        <form role="search" class="navbar-form">
          <div class="input-group">
            <input type="text" placeholder="Search" class="form-control"><span class="input-group-btn">
              <button type="submit" class="btn btn-template-main"><i class="fa fa-search"></i></button></span>
          </div>
        </form>
      </div>
    </div>
  </div>
</header>
<!-- Navbar End-->