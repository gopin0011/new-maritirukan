@extends('layouts.app')

@section('css')

@endsection

@section('content')
<section class="promo">
    <div class="slider-wrap">
        <ul class="slider">
            <li>
                <img class="slide" src="{{ asset('assets/images/img-slide01.jpg') }}" alt="">
                <img class="slide-mask" src="{{ asset('assets/images/bg_slider-mask1.png') }}" alt="">
                <div class="slide-info">
                    <h1><a href="#">Mari Tirukan</a></h1>
                    <p>“Mari_Tirukan”, merupakan luaran riset tim peneliti dengan mendapat bantuan hibah Kemenristek Dikti. “Mari_Tirukan” dilengkapi oleh media pembelajaran by online tentang pembelajaran keterampilan sosial.</p>
                    <a class="btn red" href="about.html">About</a>
                </div>
            </li>
        </ul>
    </div>
</section>


<section id="main">
    
    <div class="widget-boxes">
        <div class="box">
                <div class="box-info about">
                    <h2>Panduan orangtua/guru</h2>
                    <p>1. Perencanaan pembelajaran</p>
                    <p>2. Strategi pembelajaran</p>
                    <p>3. Evaluasi pembelajaran</p>
                    <br><br><br>
                </div>
        </div>
        <div class="box">
                <div class="box-info experience">
                    <h2>Fasilitas kegiatan siswa</h2>
                    <p>1. Pengajaran dengan pendekatan Tematik <br>(Ayo tunjukkan, ayo lakukan , dan ayo jalan)</p>
                    <p>2. Tersedia Media pembelajaran <br> Film dan kartu gambar</p>
                    <p>3. Lembar kerja siswa yang bersifat interaktif</p>
                </div>
        </div>
        <div class="box">
                <div class="box-info fun">
                    <h2>Fitur tambahan</h2>
                        <div class="box-infoo">
                            <p>1. Tanya jawab</p>
                            <p>2. Survey riset terkait konten web</p>
                            <p>3. Kegiatan</p>
                            <p>4. Artikel hasil riset</p>
                            <br>
                        </div>
                </div>
        </div>
    </div>
    <div class="top-pink-border"></div>
    <div class="event-wrap" style="padding-bottom: 60px;">
        <div class="block-event">
            <div class="upcoming-event">
                <div class="event-description">
                    <h2 style="color: #fff;">Visi</h2>
                    <p>Pengembangan keterampilan sosial Anak Berkebutuhan Khusus berbasis Keluarga 
                        Dalam Mendukung Pendidikan Non Diskriminatif <br />(Pendidikan Untuk Semua).
                    </p>
                </div>
            </div>
            
            <div class="upcoming-event">

                <div class="event-description">
                    <h2 style="color: #fff;">Misi</h2>
                    <ul>
                        <li>1. Web “maritirukan” memiliki konten interaktif yang teruji secara ilmiah</li>
                        <li>2. Web “maritirukan” menyediakan fasilitas pembelajaran keterampilan sosial yang mudah difahami oleh orangtua di Indonesia</li>
                        <li>3. Dapat digunakannya Web “maritirukan.com” sesuai kebutuhan keluarga Indonesia</li>
                        <li>4. Teraksesnya web “maritirukan” secara meluas di seluruh Indonesia</li>
                        <li>5. Orangtua Indonesia dapat membantu mengembangkan keterampilan sosial putera puterinya dari rumah</li>
                        <li>6. Dapat digunakannya media pembelajaran keterampilan sosial “maritirukan” oleh para guru di sekolah di seluruh Indonesia</li>
                    </ul>
                </div>
                
            </div>
        </div>
        
    </div>
        
    <div class="bottom-pink-border"></div>
    
    <div class="widget-boxes news">
        <h2>INDIKATOR KEBERHASILAN</h2>
        <div class="container">
            <div class="widget-boxes">
                <div class="gallery">
                    <p>Model Pembelajaran keterampilan sosial berbasis keluarga, yang dapat di akses secara mandiri oleh orangtua di rumah.  Namun demikian, sebagai sebuah pendekatan belajar model ini dapat juga digunakan sebagai media belajar bagi para guru pendamping anak-anak 
                        dengan hambatan perkembangan di tingkat TK dan  SD/MI. Anak dengan hambatan perkembangan seperti :</p>
                    <p>ASD (Austism Spectrum Disorder) dan ADHD (Attention Deficit Hyperactive Disorder)</p><br>
                    <p>Model ini mudah di akses melalui jaringan internet oleh orangtua dan guru dimana saja dengan membuka WEB  alamat https://maritirukan.com/.</p>
                    <p>Model pembelajaran keterampilan sosial bertujuan mengembangkan sejumlah Keterampilan sosial anak yang dijabarkan dalam beberapa aspek yaitu :</p>
                    <p>Aspek Perhatian/konsentrasi, Aspek Ekspresi/Emosi, Komunikasi Efektif, dan Kemandirian.</p>
                </div>
            </div>
        </div>
        <div class="box">
            <a class="news-img">
                <img src="{{ asset('assets/images/img-news01.jpg') }}" alt="" />
                <div class="mask"></div>
            </a>
            <div class="box-info">
                <br>
                <h3>Tema Ayo Tunjukan</h3>
                <p>Mengenal ragam ekspresi</p>
            </div>
        </div>
        <div class="box">
            <a class="news-img">
                <img src="{{ asset('assets/images/img-news02.jpg') }}" alt="" />
                <div class="mask"></div>
            </a>
            <div class="box-info">
                <br>
                <h3>Tema Ayo Lakukan</h3>
                <p>Mengenal ragam interaksi sosial</p>
            </div>
        </div>
        <div class="box">
            <a class="news-img">
                <img src="{{ asset('assets/images/img-news03.jpg') }}" alt="" />
                <div class="mask"></div>
            </a>
            <div class="box-info">
                <br>
                <h3>Tema Ayo Jalan</h3>
                <p>Mengenalkan aturan di tempat umum</p>
            </div>
        </div>
    </div>
</section>
@endsection

@push('js')
<script>
</script>
@endpush