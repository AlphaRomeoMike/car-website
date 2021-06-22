<!doctype html>
<html class="no-js" lang="zxx">

@include('shared.head')

<body>

<!-- Body main wrapper start -->
<div class="body-wrapper">

    @include('shared.404.header-4')
    
    @include('shared.404.cart-menu-header')

    @include('shared.404.utilize-menu-header')

    <div class="ltn__utilize-overlay"></div>

    @include('shared.404.breadcrumbs-area')

    <!-- 404 area start -->
    <div class="ltn__404-area ltn__404-area-1 mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="error-404-inner text-center">
                        <h1 class="error-404-title">404</h1>
                        <h2>Page Not Found! Page Not Found!</h2>
                        <!-- <h3>Oops! Looks like something going rong</h3> -->
                        <p>Oops! The page you are looking for does not exist. It might have been moved or deleted.</p>
                        <div class="btn-wrapper">
                            <a href="index.html" class="btn btn-transparent"><i class="fas fa-long-arrow-alt-left"></i> BACK TO HOME</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- 404 area end -->
    @include('shared.footer-main')

</div>
<!-- Body main wrapper end -->
@include('shared.scripts')
  
</body>
</html>
