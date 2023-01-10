@extends('partials.template')

@section('content')
    <!--end-->
    <div id="myCarousel1" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->

        <ol class="carousel-indicators">
            <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel1" data-slide-to="1"></li>
            <li data-target="#myCarousel1" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="item active"> <img src="images/carousel1.jpg" style="width:100%; height: 500px" alt="First slide">
            </div>
            <div class="item"> <img src="images/carousel2.jpg" style="width:100%; height: 500px" alt="Second slide">
            </div>
            <div class="item"> <img src="images/carousel3.jpg" style="width:100%; height: 500px" alt="Third slide">
            </div>
        </div>
        <!-- <a class="left carousel-control" href="#myCarousel1" data-slide="prev"> <img src="images/icons/left-arrow.png" onmouseover="this.src = 'images/icons/left-arrow-hover.png'" onmouseout="this.src = 'images/icons/left-arrow.png'" alt="left"></a>
                    <a class="right carousel-control" href="#myCarousel1" data-slide="next"><img src="images/icons/right-arrow.png" onmouseover="this.src = 'images/icons/right-arrow-hover.png'" onmouseout="this.src = 'images/icons/right-arrow.png'" alt="left"></a> -->
    </div>
    <div class="clearfix"></div>

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

    <!-----blog slider----->
    <!--blog trainer block-->
    <section class="blog-block-slider">
        <div class="blog-block-slider-fix-image">
            <div id="myCarousel2" class="carousel slide" data-ride="carousel">
                <div class="container">
                    <!-- Wrapper for slides -->
                    <ol class="carousel-indicators">
                        <li data-target="#myCarousel2" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel2" data-slide-to="1"></li>
                        <li data-target="#myCarousel2" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" role="listbox">
                        <div class="item active">
                            <div class="blog-box">
                                <p>DoFun ini adalah taman rekreasi yang sangat besar dan mempunyai wahana yang banyak serta menantang. Terdapat wahana-wahana 
                                    yang sangat aman untuk anak-anak. Ini adalah tempat yang asik karena tempatnya luas namun jarak antar wahananya 
                                    tidak terlalu jauh sehingga tidak lelah untuk berjalan dari wahana ke wahana lainnya. Fasilitasnya yang lengkap menunjang 
                                    taman rekreasi ini menjadi salah satu tempat yang wajib dikunjungi.</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/client1.png" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Walter Hucko</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box">
                                <p>Taman impian yang memorable sejak masih kecil, dengan lagu yang iconic. Sampai saat ini terus berbenah dengan 
                                    wahana-wahana baru, sehingga sampai saat ini masih terus ramai.</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/client2.png" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Jules Boutin</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="blog-box">
                                <p>Wajib dikunjungi bersama anak anak dan keluarga karena disini kita dapat bermain wahana permainan, 
                                    sangat cocok untuk menguji adrenalin.</p>
                            </div>
                            <div class="blog-view-box">
                                <div class="media">
                                    <div class="media-left">
                                        <img src="images/client3.png" class="media-object">
                                    </div>
                                    <div class="media-body">
                                        <h3 class="media-heading blog-title">Attilio Marzi</h3>
                                        <h5 class="blog-rev">Satisfied Customer</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
    </section>
@endsection
