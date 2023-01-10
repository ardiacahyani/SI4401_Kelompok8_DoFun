@extends('partials.template')

@section('content')
    <!-- promo -->
    <section class="promo-offer-block">
        <div class="promo-offer-bgbanner">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6 col-xs-12">
                        <div class="promo-offer-details">
                            <h1>Promo Spesial</h1>
                            <!-- <h4>Lorem ipsum dolor sit amet, conse ctetuer adipiscing elit.</h4> -->
                            <button type="button" class="btn btn-default">Lihat Promo</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--End-->

    <!----wahana-overview--->
    <section class="resort-overview-block">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                    <div class="side-A">
                        <div class="product-thumb">
                            <div class="image">
                                <a><img src="images/bianglala.jpg" class="img-responsive" alt="image"></a>
                            </div>
                        </div>
                    </div>
                    <div class="side-B">
                        <div class="product-desc-side">
                            <h3><a>Bianglala</a></h3>
                            <p>Bianglala merupakan sebuah kincir besar yang siap membawa Anda ke ketinggian ± 30 meter dpl. Dengan kapasitas 
                                180 orang, wahana ini tentunya lebih tepat untuk dinikmati bersama keluarga, teman, dan kerabat.</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                    <div class="side-A">
                        <div class="product-thumb">
                            <div class="image">
                                <a><img alt="image" class="img-responsive" src="images/roller coaster.jpeg"></a>
                            </div>
                        </div>
                    </div>
                    <div class="side-B">
                        <div class="product-desc-side">
                            <h3><a>Roller Coaster</a></h3>
                            <p>Roller Coaster merupakan wahana favorit dan ekstrim di DoFun. Dengan kapasitas 24 orang, Wahana ini mampu 
                                menguji adrenalin Anda dengan merasakan seluncuran dengan loop 360° dan juga lintasan turunan dan tanjakan yang tinggi dan cukup menikung.</p>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-right">
                    <div class="side-A">
                        <div class="product-desc-side">
                            <h3><a>Tornado</a></h3>
                            <p>Tornado merupakan wahana paling atraktif yang ada di DoFun. Dengan kapasitas sebesar 40 orang, 
                                Anda akan diajak berputar secara bebas dan duduk terbalik secara tiba-tiba.</p>
                        </div>
                    </div>

                    <div class="side-B">
                        <div class="product-thumb">
                            <div class="image txt-rgt">
                                <a class="arrow-left"><img src="images/tornado.jpg" class="img-responsive"
                                        alt="imaga"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clear"></div>
                <div class="col-md-6 col-sm-12 col-xs-12 remove-padd-left">
                    <div class="side-A">
                        <div class="product-desc-side">
                            <h3><a>Kicir-Kicir</a></h3>
                            <p>Kicir-kicir merupakan wahana baru yang unik yang ada dI DoFun. Ketinggian wahana ini mencapai 30 m yang akan 
                                menguncang adrenalin pengunjung dengan ayunan dan putaran ride 360 derajat.</p>
                        </div>
                    </div>

                    <div class="side-B">
                        <div class="product-thumb txt-rgt">
                            <div class="image">
                                <a class="arrow-left"><img src="images/kicirkicir.jpg" class="img-responsive"
                                        alt="imaga"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </section>
@endsection