@extends('layouts/main')
@section('mainpage')
<script src="https://api.mapbox.com/mapbox-gl-js/v2.6.0/mapbox-gl.js"></script>
<div class="page contact-page">
    <div class="wrap">
        <div class="wrap_float">
            <div class="breadcrumbs">
                <a href="/">Home</a> - <a href="/contact" class="current">Kontak</a>
            </div>
            <div class="title-block">
                <h1 class="title">Kontak</h1>
            </div>
            <div class="page_content">
                <div class="map-block">
                    <div class="map" id="map">
                        <script src="/js/map-contact.js"></script>
                    </div>
                </div>
                <div class="info">
                    <div class="contact-blocks">
                        <div class="block">
                            <h3 class="_title">Kontak</h3>
                            <div class="_text">
                                <a href="#" class="tel">+62 822-4524-7958</a>
                                <a href="mailto:bayhaqi.18051@mhs.its.ac.id">bayhaqi.18051@mhs.its.ac.id</a>
                            </div>
                        </div>
                        <div class="block">
                            <h3 class="_title">Alamat</h3>
                            <div class="_text">
                                Jl Ketintang 28, Surabaya,<br>Jawa Timur, Indonesia
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection