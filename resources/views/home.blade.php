@extends('layouts/main')

@section('mainpage')
<div class="main_slider">
    <div class="slider" id="main-slider">
        <div class="slide" style="background-color: #F5FCFE">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="slide_left">
                        <div class="slide_content">
                            <div class="category"><a href="#">Kemudahan</a></div>
                            <h2 class="title">
                                Cari biaya ongkir, lebih mudah.
                            </h2>
                        </div>
                    </div>
                    <div class="slide_right" data-slide="img/bg_depan1jpg">
                        <div class="slide-img" style="background-image: url(img/bg_depan1.jpg)"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="slide" style="background-color: #FCEFEF">
            <div class="wrap">
                <div class="wrap_float">
                    <div class="slide_left">
                        <div class="slide_content">
                            <div class="category"><a href="#">Terbaru</a></div>
                            <h2 class="title">
                                Estimasi harga yang selalu mengikuti harga terupdate.
                            </h2>
                        </div>
                    </div>
                    <div class="slide_right" data-slide="img/bg_depan2.jpg">
                        <div class="slide-img" style="background-image: url(img/bg_depan2.jpg)"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="controls">
        <div class="arrows">
            <div class="arrow prev"></div>
            <div class="arrow next"></div>
        </div>
        <div class="count">
            <span class="current">01</span> <span class="all">03</span>
        </div>
    </div>
    <div class="next-slides" id="next-slides"></div>
</div>

@endsection