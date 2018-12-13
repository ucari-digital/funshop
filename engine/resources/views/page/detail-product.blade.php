@extends($layout)
@section('çontent')

    <div class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-inner">
                <ul class="list-inline list-unstyled">
                    <li><a href="#">Home</a></li>
                    <li><a href="#">Clothing</a></li>
                    <li class='active'>Floral Print Buttoned</li>
                </ul>
            </div>
        </div>
    </div>

    <div class="body-content outer-top-xs">
        <div class='container'>
            <div class='row single-product'>

                <div class='col-md-3 sidebar'>
                    <div class="sidebar-module-container">

                        <div class="home-banner outer-top-n outer-bottom-xs">
                            <img src="assets/images/banners/LHS-banner.jpg" alt="Image">
                        </div>

                        @include('partial.body.sidebar.hot-deals')
                        @include('partial.body.sidebar.newsletters')
                        @include('partial.body.sidebar.testimonial')

                    </div>
                </div>

                <div class='col-md-9'>
                    @include('partial.body.content._detail')
                    @include('partial.body.content._detail-upsell-product')
                </div>
                <div class="clearfix"></div>

            </div>
            <!-- ============================================== BRANDS CAROUSEL ============================================== -->
            @include('partial.body.content.brand')
            <!-- ============================================== BRANDS CAROUSEL : END ============================================== -->	</div><!-- /.container -->
    </div><!-- /.body-content -->

@endsection