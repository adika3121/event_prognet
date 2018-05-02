<!-- Left Sidebar  -->
<div class="left-sidebar">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                <li class="nav-devider"></li>
                <li class="nav-label">Home</li>
                <li>
                    <a href="/home" aria-expanded="false">
                        <i class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span>
                    </a>
                </li>
                <li class="nav-devider"></li>
                <li class="nav-label">Kelola</li>
                <li>
                    <a href="/events" aria-expanded="false">
                        <i class="fa fa-calendar"></i><span class="hide-menu">Event</span>
                    </a>
                </li>
                 <li>
                    <a href="/tickets" aria-expanded="false">
                        <i class="fa fa-ticket"></i><span class="hide-menu">Tiket</span>
                    </a>
                </li>
                <li class="nav-devider"></li>
                <li class="nav-label">Informasi</li>
                <li>
                    <a href="/notif" aria-expanded="false" style="position: relative;">
                        <i class="fa fa-bell"></i>
                        <span class="hide-menu">
                            Pemberitahuan
                        {{-- @if($num_notif > 0)
                            <span class="label label-rouded label-success pull-right">{{ $num_notif }}</span>
                        @endif --}}
                        </span>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</div>