<!DOCTYPE html>
<html lang="en">
<head>
    <title>@yield('title', 'BlogByte | Bloggers Heaven')</title>

    @include('frontend.layouts.partials._meta')
    @include('frontend.layouts.partials._styles')

</head>
<body id="topPage" data-spy="scroll" data-target=".navbar" data-offset="100">

<!-- Page Loader
===================================== -->
<div id="pageloader" class="bg-grad-animation-1">
    <div class="loader-item">
        <img src="{{ asset('frontend/assets/img/other/oval.svg') }}" alt="page loader">
    </div>
</div>

<a href="#page-top" class="go-to-top">
    <i class="fa fa-long-arrow-up"></i>
</a>

@include('frontend.layouts.partials._navbar')
@include('frontend.layouts.partials._header')

<!-- Blog Area
===================================== -->
<div id="blog" class="pt20 pb50">
    <div class="container">

        <div class="row">
            <div class="col-md-9 mt25">
                @yield('page-content')

            </div>

            <!-- Blog Sidebar
            ===================================== -->
            <div id="sidebar" class="col-md-3 mt50 animated" data-animation="fadeInRight" data-animation-delay="250">
                @include('frontend.layouts.partials._sidebar')
            </div>
        </div>
    </div>
</div>

@include('frontend.layouts.partials._newsletter')
@include('frontend.layouts.partials._footer')


<!-- JQuery Core
=====================================-->
<script src="{{ asset('frontend/assets/js/core/jquery.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/core/bootstrap-3.3.7.min.js') }}"></script>

<!-- Magnific Popup
=====================================-->
<script src="{{ asset('frontend/assets/js/magnific-popup/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/magnific-popup/magnific-popup-zoom-gallery.js') }}"></script>

<!-- JQuery Main
=====================================-->
<script src="{{ asset('frontend/assets/js/main/jquery.appear.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main/isotope.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main/parallax.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main/jquery.sticky.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main/imagesloaded.pkgd.min.js') }}"></script>
<script src="{{ asset('frontend/assets/js/main/main.js') }}"></script>

</body>
</html>
