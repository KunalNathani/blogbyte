<!-- Navigation Area
===================================== -->
<nav class="navbar navbar-pasific navbar-mp megamenu navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand page-scroll" href="{{ route('home') }}">
                <img src="{{ asset('frontend/assets/img/logo/logo-default.png') }}" alt="logo">
                BlogByte
            </a>
        </div>

        <div class="navbar-collapse collapse navbar-main-collapse">
            <ul class="nav navbar-nav">
                <li>
                    <a href="{{ route('home') }}" data-toggle="dropdown" class="dropdown-toggle color-light">Home </a>
                </li>
            </ul>

        </div>
    </div>
</nav>
