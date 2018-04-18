<div class="sidebar" data-color="orange">
    <div class="logo">
        <a href="http://www.creative-tim.com" class="simple-text logo-normal">
            Event Bagus
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::path() == 'home' ? 'active' : '' }}">
                <a href="/home">
                    <i class="now-ui-icons design_app"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="{{ Request::path() == 'kelola_event' ? 'active' : '' }}">
                <a href="/kelola_event">
                    <i class="now-ui-icons education_atom"></i>
                    <p>Kelola Event</p>
                </a>
            </li>
            <li class="{{ Request::path() == 'kelola_tiket' ? 'active' : '' }}">
                <a href="/kelola_tiket">
                    <i class="now-ui-icons location_map-big"></i>
                    <p>Kelola Tiket</p>
                </a>
            </li>
            <li class="{{ Request::path() == 'kelola_akun' ? 'active' : '' }}">
                <a href="/kelola_akun">
                    <i class="now-ui-icons ui-1_bell-53"></i>
                    <p>Kelola Akun</p>
                </a>
            </li>
            <li>
                <a href="../examples/user.html">
                    <i class="now-ui-icons users_single-02"></i>
                    <p>Tiket Event</p>
                </a>
            </li>
           
        </ul>
    </div>
</div>