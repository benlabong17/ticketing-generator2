<div class="left side-menu">
    <div class="sidebar-inner slimscrollleft">
        <div class="user-details">
            <div class="text-center">
                <img src="{{ asset('images/users/avatar-1.jpg') }}" alt="" class="img-circle">
            </div>
            <div class="user-info">
                <div class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">{{ Auth::user()->name }}</a>
                    <ul class="dropdown-menu">
                        <!-- <li><a href="javascript:void(0)"> Profile</a></li> -->
                        <!-- <li><a href="javascript:void(0)"> Settings</a></li> -->
                        <!-- <li><a href="javascript:void(0)"> Lock screen</a></li> -->
                        <!-- <li class="divider"></li> -->
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();"> Logout </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </div>

                <p class="text-muted m-0"><i class="fa fa-dot-circle-o text-success"></i> Online</p>
            </div>
        </div>
        <!--- Divider -->
        <div id="sidebar-menu">
            <ul>
                <li>
                    <a href="index.html" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span></a>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-write"></i><span> Forms </span><span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="{{ route('form-pelaporan-index') }}">Pelaporan</a></li>
                        <li><a href="#">Approval</a></li>
                        <li><a href="#">Engineer</a></li>
                    </ul>
                </li>

                <li class="has_sub">
                    <a href="javascript:void(0);" class="waves-effect"><i class="ti-agenda"></i> <span> Laporan </span> <span class="pull-right"><i class="mdi mdi-plus"></i></span></a>
                    <ul class="list-unstyled">
                        <li><a href="#">Pelaporan</a></li>
                        <li><a href="#">Approval</a></li>
                        <li><a href="#">Engineer</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#" class="waves-effect"><i class="ti-calendar"></i><span> Schedule </span></a>
                </li>

                <li>
                    <a href="#" class="waves-effect"><i class="ti-ruler-pencil"></i><span> Admin Panel </span></a>
                </li>

            </ul>
        </div>
        <div class="clearfix"></div>
    </div> <!-- end sidebarinner -->
</div>