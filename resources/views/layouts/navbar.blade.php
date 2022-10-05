<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-white navbar-light border-bottom">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#"><i class="fa fa-bars"></i></a>
        </li>
        <li class="nav-item d-none d-sm-inline-block">
            <a {{-- href="{{route('dashboard')}}" --}} class="nav-link"><img class="float-right p-2" src="{{asset('/images/LogoCV.jpeg')}}" width="150px" alt=""></a>
        </li>
    </ul>

    <ul class="ml-auto mt-2">
        <a class="text-dark" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();"><i class="fa-solid fa-circle-xmark"></i>
            {{ __('Logout') }}
        </a>
    </ul>
    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
        <a class="dropdown-item" href="{{ route('logout') }}"
           onclick="event.preventDefault();
                         document.getElementById('logout-form').submit();">
            {{ __('Logout') }}
        </a>

        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
    </div>
    {{-- <ul class="navbar-nav mr-lg-2">
          <li class="nav-item nav-search d-none d-lg-block">
            <div class="input-group" style="margin-left:800px;">
              <div class="input-group-prepend hover-cursor" id="navbar-search-icon" style="border:1px solid #7497c6; border-radius:20px;">
                <span class="input-group-text" style="background-color:transparent; border-color:transparent;" id="search">
                  <i class="fa fa-search" style="color:#5276a2;"></i>
                </span>
                <input style="background-color:transparent; border-color:transparent;" type="text" class="form-control" id="navbar-search-input" placeholder="Search now" aria-label="search" aria-describedby="search">
              </div>
            </div>
          </li>
        </ul> --}}

    {{-- <!-- SEARCH FORM -->
    <form class="form-inline ml-3">
        <div class="input-group input-group-sm">
            <input class="form-control form-control-navbar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-navbar" type="submit">
                    <i class="fa fa-search"></i>
                </button>
            </div>
        </div>
    </form> --}}

    {{-- <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="#">
                <i class="fa fa-cog"></i>
            </a>
            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                <a href="#" class="dropdown-item">Settings</a>
                <div class="dropdown-divider"></div>
                <a href="#" class="dropdown-item">Logout</a>
            </div>
        </li>
    </ul> --}}
</nav>
<!-- /.navbar -->
