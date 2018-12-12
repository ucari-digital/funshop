@extends($layout)
@section('çontent')
<div class="titanium-container">
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="header">
            <div class="banner">
                <img src="https://via.placeholder.com/1200x240" alt="">
            </div>
            <div class="profil">
                <img src="https://via.placeholder.com/420x420/ffeb3b" alt="">
                <div class="information">
                    <div class="left">
                        <div class="name">
                            Lotnok Official Store
                        </div>
                        <div class="hashtag">
                            #LotnokRakaKecil
                        </div>
                    </div>
                    <div class="right">
                        <div class="box">
                            <i class="far fa-clock"></i>
                            sekitar 1 jam yang lalu
                        </div>
                        <div class="box">
                            <i class="fas fa-map-marker-alt"></i>
                            Kota Batam
                        </div>
                        <div class="box">
                            <i class="fas fa-home"></i>
                            1 Toko Fisik
                        </div>
                        <div class="box">
                            <i class="fas fa-calendar-alt"></i>
                            March 2018
                        </div>
                    </div>
                </div>
                <div class="information-merchant">
                    <div class="left">
                        <div class="quotes">
                            <i class="fas fa-quote-left"></i>
                            Lorem ipsum dolor sit, amet consectetur adipisicing elit. In laborum illo
                        </div>
                    </div>
                    <div class="right">
                        <div class="box">
                            <div class="up">
                                <i class="fas fa-tachometer-alt"></i>
                            </div>
                            <div class="down">
                                Kecepatan Toko
                            </div>
                        </div>
                        <div class="box">
                            <div class="up">
                                <i class="far fa-star"></i>
                            </div>
                            <div class="down">
                                Reputasi
                            </div>
                        </div>
                        <div class="box">
                            <div class="up">
                                20,2Rb
                            </div>
                            <div class="down">
                                Produk Terjual
                            </div>
                        </div>
                        <div class="box">
                            <div class="up">
                                1rb
                            </div>
                            <div class="down">
                                Followers
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer">
                <div class="left">
                    <div class="sharelink">
                        <span class="label">
                            Bagikan :
                        </span>
                        <div class="shareblock">
                            <div class="addthis_inline_share_toolbox_93k6"></div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="content">
            @component('partial.body.content.product')
                @slot('custom_titanium')
                    <div class="tabs">
                        <div class="list active">
                            <a href="">Produk</a>
                        </div>
                        <div class="list">
                            <a href="">Diskusi Produk</a>
                        </div>
                    </div>
                @endslot
            @endcomponent
        </div>
    </div>
</div>
@endsection