@extends('layouts.app')

@section('css')
<style>
    
</style>
@endsection

@section('content')
<div class="container">
    <section class="gallery">
        <center>
        <h1>Gallery Foto Maritirukan Aku Bisa</h1>
        </center>
        <div class="tabs">
            <ul class="filter-controls">
                <li><a href="#" data-filter="*" data-currently-viewing="all" class="selected">Show All</a></li>
                <li><a href="#" data-filter=".kids">Ayo Jalan</a></li>
                <li><a href="#" data-filter=".meeting">Ayo Lakukan</a></li>
                <li><a href="#" data-filter=".parties">Ayo Bisa</a></li>
                <li><a href="#" data-filter=".print">Ayo Tunjukan</a></li>
            </ul>
        </div>
        
        <ul class="slider sortable-grid">
            <li>
                <ul>
                <li class="grid-item parties">
                    <a href="{{ asset('assets/images/img-01.JPG') }}" class="popup-link"><img src="{{ asset('assets/images/img-01.JPG') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item kids">
                    <a href="{{ asset('assets/images/img-02.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-02.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item kids">
                    <a href="{{ asset('assets/images/img-03.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-03.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item parties">
                    <a href="{{ asset('assets/images/img-04.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-04.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item kids">
                    <a href="{{ asset('assets/images/img-05.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-05.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item kids">
                    <a href="{{ asset('assets/images/img-06.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-06.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item meeting">
                    <a href="{{ asset('assets/images/img-07.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-07.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item kids">
                    <a href="{{ asset('assets/images/img-08.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-08.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item meeting">
                    <a href="{{ asset('assets/images/img-09.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-09.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item parties print">
                    <a href="{{ asset('assets/images/img-10.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-10.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item meeting">
                    <a href="{{ asset('assets/images/img-11.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-11.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item meeting">
                    <a href="{{ asset('assets/images/img-12.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-12.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item kids">
                    <a href="{{ asset('assets/images/img-01.JPG') }}" class="popup-link"><img src="{{ asset('assets/images/img-01.JPG') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item meeting">
                    <a href="{{ asset('assets/images/img-02.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-02.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item parties">
                    <a href="{{ asset('assets/images/img-03.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-03.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item parties">
                    <a href="{{ asset('assets/images/img-04.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-04.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item meeting">
                    <a href="{{ asset('assets/images/img-05.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-05.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item meeting print">
                    <a href="{{ asset('assets/images/img-06.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-06.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item kids">
                    <a href="{{ asset('assets/images/img-07.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-07.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item kids">
                    <a href="{{ asset('assets/images/img-08.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-08.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item meeting print">
                    <a href="{{ asset('assets/images/img-09.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-09.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item parties print">
                    <a href="{{ asset('assets/images/img-10.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-10.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item kids">
                    <a href="{{ asset('assets/images/img-11.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-11.jpg') }}" alt="" />
                    <div class="mask"></div></a>
                <li class="grid-item kids print">
                    <a href="{{ asset('assets/images/img-12.jpg') }}" class="popup-link"><img src="{{ asset('assets/images/img-12.jpg') }}" alt="" />
                    <div class="mask"></div></a>
            </li>
        </ul>
    </section>
</div>
@endsection

@section('js')
<script>
    (function() {
        $('.popup-link').magnificPopup({type:'image'});
    })();
</script>
@endsection