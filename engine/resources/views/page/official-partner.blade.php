@extends($layout)
@section('çontent')
<div class="official-partner-container">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="header">
            <div class="banner">
                <img src="https://via.placeholder.com/1200x240" alt="">
            </div>
            <div class="profil">
                <img src="https://via.placeholder.com/420x420/ffeb3b" alt="">
                <div class="name">
                    Lotnok Official Store
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="content">
            @include('partial.body.content.product')
        </div>
    </div>
</div>
@endsection