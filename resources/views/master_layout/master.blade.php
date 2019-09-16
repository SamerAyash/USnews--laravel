<!DOCTYPE html>
<html dir="ltr" lang="en">
<head>
    @includeIf('master_layout.header.meta_header')
</head>

<body>

<!-- Preloader Start -->
<div id="preloader">
    <div class="preloader bg--color-1--b" data-preloader="1">
        <div class="preloader--inner"></div>
    </div>
</div>
<!-- Preloader End -->

<!-- Wrapper Start -->
<div class="wrapper">
@includeIf('master_layout.header.header')

@yield('content')

<!-- Footer Section End -->
</div>
<!-- Wrapper End -->
@includeIf('master_layout.footer.footer')

    <div id="backToTop">
        <a href="#"><i class="fa fa-angle-double-up"></i></a>
    </div>
    <!-- Back To Top Button End -->
@includeIf('master_layout.footer.meta_footer')

</body>
</html>
