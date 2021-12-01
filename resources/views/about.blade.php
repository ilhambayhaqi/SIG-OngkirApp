@extends('layouts/main')

@section('mainpage')
<div class="page about-us">
    <div class="wrap">
        <div class="wrap_float">
            <div class="breadcrumbs">
                <a href="/">Home</a> - <a href="/about" class="current">Tentang Kami</a>
            </div>
            <div class="title-block">
                <h1 class="title">Tentang Kami</h1>
                <p class="description">
                    Ongkir App adalah sebuah platform yang memungkinkan kamu untuk mencari harga ongkir dengan mudah. 
                    Data Ongkir yang kami miliki diambil dari API Raja Ongkir sehingga kamu dapat melakukan estimasi biaya ongkirmu. 
                    Di Ongkir App, kamu bisa menghitung estimasi biaya ongkir langsung dengan memilih alamat pada peta yang tersedia.
                </p>
            </div>
            <div class="slider-wrap">
                <div class="slider" id="about-us-slider">
                    <div class="slide ie-img">
                        <img src="img/demo-bg.jpg" alt="">
                    </div>
                    <div class="slide ie-img">
                        <img src="img/demo-bg.jpg" alt="">
                    </div>
                    <div class="slide ie-img">
                        <img src="img/demo-bg.jpg" alt="">
                    </div>
                </div>
                <div class="arrows">
                    <div class="arrow prev"></div>
                    <div class="arrow next"></div>
                </div>
            </div>
            
            <div class="faq_block">
                <h2 class="title">
                    Apa aja sih yang kita tawarkan?
                </h2>
                <div class="section_content">
                    <div class="faq_item">
                        <h3 class="faq_item-question">
                            <span>Kemudahan memilih lokasi</span>
                        </h3>
                        <div class="faq_item-answer">
                            <p>
                                Tinggal klik pada peta, dan kami langsung akan carikan harga ongkir yang ada.
                            </p>
                        </div>
                    </div>
                    <div class="faq_item">
                        <h3 class="faq_item-question">
                            <span>Estimasi biaya ongkir yang update</span>
                        </h3>
                        <div class="faq_item-answer">
                            <p>
                                Dengan menggunakan API Raja Ongkir, kami     
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="wrap team-wrap">
        <div class="wrap_float">
            <h2 class="title">Tim Kami</h2>
            <div class="subtitle">
                Siapa aja sih kami itu?
                <br>Meskipun namanya kami, tapi cuma ada 1 orang saja yang mengembangkan platform Ongkir App ini.
                <br>huehue ... 
            </div>
            <div class="section_content">
                <div class="item">
                    <div class="photo ie-img">
                        <img src="img/Ilham.png" alt="">
                    </div>
                    <div class="name">Muhammad Ilham Bayhaqi</div>
                    <div class="position">Author Ongkir App</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
