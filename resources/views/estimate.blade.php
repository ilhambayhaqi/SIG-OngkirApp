@extends('layouts.main')

@section('mainpage')
    <script src="https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js"></script>
    <script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
    <link rel="stylesheet"
        href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css"
        type="text/css" />
    <div class="page catalog-item product-page">
        <div class="wrap">
            <div class="wrap_float">
                <div class="breadcrumbs">
                    <a href="#">Home</a> - <a href="#" class="current">Cek Ongkir</a>
                </div>
                <div class="product-info">
                    <div class="product-info--left">
                        <div class="map-block">
                            <div class="map" id="map"></div>
                            <style>
                                .coordinates {
                                    background: rgba(0, 0, 0, 0.5);
                                    color: #fff;
                                    position: absolute;
                                    bottom: 40px;
                                    left: 10px;
                                    padding: 5px 10px;
                                    margin: 0;
                                    font-size: 11px;
                                    line-height: 18px;
                                    border-radius: 3px;
                                    display: none;
                                }

                            </style>
                            <pre id="coordinates" class="coordinates"></pre>
                        </div>
                    </div>
                    <div class="product-info--right">
                        <div class="title" style="color: #3FB1CE">Kota Asal</div>
                        <div class="fields">
                            <div class="geocoder" id="kota-asal"></div>
                            <div class="title" style="color: #eb3737">Kota Tujuan</div>
                            <div class="geocoder" id="kota-tujuan"></div>
                            <div class="title"><br>Berat Paket</div>
                            <div class="subtitle">
                                Berat barang dalam satuan kg
                            </div>
                        </div>
                        <div class="_line">
                            <div class="number_wrap">
                                <button class="minus"></button>
                                <input type="number" class="num js_number" value="1" max="100" min="1" data-maxlength="3"
                                    id='weight'>
                                <button class="plus"></button>
                            </div>
                            <button id='submit' class="btn-to-cart">Perkirakan Biaya</button>
                        </div>
                    </div>
                </div>
            </div>
            <div id="result" class="result">
                <div class="table">
                    <div class="thead">
                        <div class="td product-td">Layanan Kurir</div>
                        <div class="td quantity-td">Estimasi Pengiriman</div>
                        <div class="td cost-td">Estimasi Biaya</div>
                    </div>
                    <div class="tbody" id="pengiriman">
                        {{-- <div class="tr">
                            <div class="td product-td">
                                <a href="#">
                                    <div class="img ie-img">
                                        <img src="img/demo-bg.jpg" alt="">
                                    </div>
                                    <h3 class="_title">JNE YES</h3>
                                    <div class="_cost">Yakin Esok Sampai</div>
                                </a>
                            </div>
                            <div class="td quantity-td">3-5 Hari</div>
                            <div class="td cost-td">Rp 5000</div>
                        </div> --}}
                    </div>
                </div>
            </div>
        </div>
        <script src="/js/map-estimate.js"></script>
        <link rel="stylesheet" href="css/style.css">
    @endsection
