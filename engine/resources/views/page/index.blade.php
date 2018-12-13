@extends($layout)
@section('çontent')
<div class="col-xs-12 col-sm-12 col-md-3 sidebar">
    @include('partial.body.sidebar.top-navigation')

    <div class="home-banner outer-bottom-xs">
        <img src="assets/images/banners/LHS-banner.jpg" alt="Image">
    </div>
    
    @include('partial.body.sidebar.hot-deals')
    @include('partial.body.sidebar.special-deals')
    @include('partial.body.sidebar.testimonial')
</div>
<div class="col-xs-12 col-sm-12 col-md-9 homebanner-holder">
    @include('partial.body.content.banner')
    @include('partial.body.content.official-partner')
    @include('partial.body.content.product')
</div>
@endsection