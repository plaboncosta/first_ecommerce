<!-- NAVBAR -->
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="brand">
        <a href="{{ route('admin.dashboard.index') }}"><img src="{{ asset('assets/backend') }}/img/logo-dark.png" alt="Klorofil Logo" class="img-responsive logo"></a>
    </div>
    <div class="container-fluid">
        <div class="navbar-btn">
            <button type="button" class="btn-toggle-fullwidth"><i class="lnr lnr-arrow-left-circle"></i></button>
        </div>
        <form class="navbar-form navbar-left">
            <div class="input-group">
                <input type="text" value="" class="form-control" placeholder="Search dashboard...">
                <span class="input-group-btn"><button type="button" class="btn btn-primary">Go</button></span>
            </div>
        </form>
        <div id="navbar-menu">
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        @if(Auth::user()->isOnline())
                        <span class="text-success useronline">
                           <i class="fas fa-circle"></i> Online
                        </span>
                        @else
                            <span class="text-muted useronline">
                               <i class="fas fa-circle"></i> Offline
                            </span>
                        @endif

                        <img src="{{ asset('assets/backend') }}/img/user.png" class="img-circle"
                            alt="Avatar"> <span>{{ Auth::user()->username }}</span> <i class="icon-submenu lnr lnr-chevron-down"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="#"><i class="lnr lnr-user"></i> <span>My Profile</span></a></li>
                        <li><a href="#"><i class="lnr lnr-cog"></i> <span>Settings</span></a></li>
                        <li>
                            <a href="{{ route('logout') }}" onclick="
                                event.preventDefault();
                                document.getElementById('logout-form').submit();
                            ">
                                <i class="lnr lnr-exit"></i> <span>Logout</span>
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>
<!-- END NAVBAR -->
<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
            <li><a href="{{ route('admin.dashboard.index') }}" class="{{ Request::is('admin/dashboard') ? 'active' : '' }}"><i class="fa fa-calendar"></i> <span>Dashboard</span></a></li>
                <li>
                    <a href="{{ route('admin.slider.index') }}" class="{{ Request::is('admin/slider*') ? 'active' : '' }}">
                        <i class="fa fa-sliders"></i>
                        <span>Slider</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.category.index') }}" class="{{ Request::is('admin/category*') ? 'active' : '' }}">
                        <i class="fa fa-list-alt"></i>
                        <span>Category</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.product.index') }}" class="{{ Request::is('admin/product*') ? 'active' : '' }}">
                        <i class="fa fa-object-group"></i>
                        <span>Product</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.specification.index') }}" class="{{ Request::is('admin/specification*') ? 'active' : '' }}">
                        <i class="fa fa-info-circle "></i>
                        <span>Specification</span>
                    </a>
                </li>
                <li><a href="{{ route('welcome') }}" class="" target="_blank"><i class="lnr lnr-home"></i> <span>Home</span></a></li>
                <li>
                    <a href="{{ route('logout') }}" onclick="$
                        event.preventDefault();
                        document.getElementById('logout-form').submit();
                    ">
                        <i class="lnr lnr-exit"></i>
                        <span>Logout</span>
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                    </form>
                </li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->
