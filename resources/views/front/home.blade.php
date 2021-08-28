@extends('master_front.core')
@section('title','Lebak Jaya 5A Utara')
@section('container')

<section>
    <!-- CAROUSEL -->
    <div id="carousel">
        <div id="owl-demo" class="owl-carousel owl-theme">
            <div class="item">
                <img src="{{URL::asset('front')}}/img/2.jpg" alt="">
                <div class="line">
                    <div class="text hide-s">
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{URL::asset('front')}}/img/1.jpg" alt="">
                <div class="line">
                    <div class="text hide-s">
                    </div>
                </div>
            </div>
            <div class="item">
                <img src="{{URL::asset('front')}}/img/3.jpg" alt="">
                <div class="line">
                    <div class="text hide-s">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FIRST BLOCK -->
    <div id="first-block">
        <div class="line">
            <h1>Kampung Lebak Jaya 5A Utara</h1>
            <p>Merupakan Kampung yang bersinergitas tinggi dan penerapan dalam sebuah kemajuan bersama dalam warga dan
                untuk Indonesia.</p>
            <div class="s-12 m-4 l-2 center"><a class="white-btn" href="#contact">Contact Us</a></div>
        </div>
    </div>
    <!-- Visi Misi -->
    <div id="features">
        <div class="line">
            <div class="margin">
                <div class="col padding">
                    <div class="container row justify-content-around">
                        <div class="col-md-4">
                            <div class="s-12 m-6 l-3 margin-bottom">
                                <i class="icon-star icon3x"></i>
                                <h2>Visi</h2>
                                <p>
                                    Terwujudnya Usaha Kecil Menengah yang Maju dan Mandiri . <br>
                                    Transparansi administrasi menuju tata kelola desa yang baik dan efisien.
                                </p>
                            </div>
                            <div class="s-12 m-6 l-3 margin-bottom">
                                <i class="icon-star icon3x"></i>
                                <h2>Misi</h2>
                                <p>
                                    Meningkatkan sumber daya manusia. <br>
                                    Menjaga ketentraman & ketertiban untuk mewujudkan desa yang aman dan makmur. <br>
                                    Meningkatkan partisipasi masyarakat dengan membuka komunikasi yang baik.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-4 offset-md-4">
                            <a href="{{url('struktur_org')}}" target="_blank" rel="noopener noreferrer">
                                <div class="s-12 m-6 l-3 margin-bottom">
                                    <i class="icon-tablet icon3x"></i>
                                    <h2>Struktur Organisasi</h2>
                                    <p>Struktur organisasi didefinisikan sebagai “sistem yang digunakan untuk
                                        mendefinisikan
                                        hierarki dalam suatu organisasi. Ini mengidentifikasi setiap pekerjaan,
                                        fungsinya dan ke mana ia melapor ke dalam organisasi.</p>
                                    </div>
                                </a>
                                <a href="{{url('umkm')}}" target="_blank" rel="noopener noreferrer">
                                    <div class="s-12 m-6 l-3 margin-bottom">
                                        <i class="icon-tablet icon3x"></i>
                                        <h2>Data UMKM</h2>
                                        <p>Data profil UMKM menyajikan data informasi pengusaha (nama perusahaan, lama
                                            usaha, alamat, dll)
                                            serta data usaha yang antara lain mencakup
                                            informasi kegiatan usaha, tingkat persaingan usaha.</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    <!-- ABOUT US -->
    <div id="about-us">
        <div class="s-12 m-12 l-8 media-container">
            <img src="{{URL::asset('front')}}/img/FULL.png" alt="">
        </div>
        <article class="s-12 m-12 l-4">
            <h2>About Us<br> Lebak Jaya 5A Utara<br></h2>
            <p>Website ini berisi tentang segala aspek informasi yang terdiri dari UMKM, Berita,
                Transparansi Keuangan, dan Struktur Organisasi. Website ini dapat memudahkan para
                masyarakat untuk mengakses informasi kampung Lebak Jaya 5 A Utara serta memberi kesempatan
                terhadap kampung ini untuk mengenalkan jati diri kampung terhadap kalayak luar di Era
                Digitalisasi.
            </p>

            <div class="about-us-icons">
                <i class="icon-paperplane_ico"></i> <i class="icon-trophy"></i> <i class="icon-clock"></i>
            </div>
        </article>
    </div>
    <!-- SERVICES -->
    <div id="services">
        <div class="line">
            <h2 class="section-title">Transparansi Keuangan</h2>
            <div class="margin">
                <div class="s-12 m-6 l-4 margin-bottom">
                    <i class="icon-vector"></i>
                    <div class="service-text">
                        <h3>Kas Kampung</h3>
                        <p>Kas Kampung adalah tempat menyimpan uang Pemerintah Kampung yang menampung seluruh penerimaan Kampung dan digunakan untuk membayar seluruh penerimaan Kampung dan digunakan untuk membayar seluruh pengeluaran Kampung.</p>
                    </div>
                </div>
                <div class="s-12 m-6 l-4 margin-bottom">
                    <i class="icon-eye"></i>
                    <div class="service-text">
                        <h3>Pendapatan Perbulan</h3>
                        <p>Pendapatan adalah semua pemerintah Kampung dalam 1 (satu) tahun anggaran yang menjadi hak Kampung dan tidak perlu dikembalikan oleh Kampung.</p>
                    </div>
                </div>
                <div class="s-12 m-12 l-4 margin-bottom">
                    <i class="icon-random"></i>
                    <div class="service-text">
                        <h3>Pengeluaran Perbulan</h3>
                        <p>Pengeluaran Kampung adalah uang yang keluar dari rekening kas Kampung.</p>
                    </div>
                </div>
            </div>
            <div class="margin">
                <div class="s-12 m-12 l-2 center transke">
                    <a href="download">
                        <i style="width: 200px;" class="icon-download">
                            <d style="font-family: Open Sans,Arial,sans-serif;">Download</d>
                        </i>
                    </a>
                    <div class="service-text">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- LATEST NEWS -->
    <div id="latest-news">
        <div class="line">
            <h2 class="section-title">Latest News</h2>
            <div class="margin">
                @foreach ($data as $item)
                <div class="s-12 m-12 l-6">
                    <div class="s-12 l-2">
                        <div class="news-date">
                            <p class="day">{{ date("d", strtotime($item->waktu)) }}</p>
                            <p class="month">{{ date("F", strtotime($item->waktu)) }}</p>
                            <p class="year">{{ date("Y", strtotime($item->waktu)) }}</p>
                        </div>
                    </div>
                    <div class="s-12 l-10">
                        <div class="news-text">
                            <a href="{{('baca/'.$item->slug)}}" rel="noopener noreferrer">
                                <h4>{{$item->judul}}</h4>
                            </a>
                            <p>{!! nl2br($item->isi_thumbnail)!!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="s-12 m-6 l-12">
                    <br>
                    <a style="position: relative;" href="news_front">More News ...</a>
                </div>
            </div>
        </div>
    </div>
    <!-- CONTACT -->
    <div id="contact">
        <div class="line">
            <h2 class="section-title">Contact Us</h2>
            <div class="margin">
                <div class="s-12 m-12 l-3 hide-m hide-s margin-bottom right-align">
                    <img src="{{URL::asset('front')}}/img/FULL.png" alt="">
                </div>
                <div class="s-12 m-12 l-4 margin-bottom right-align">
                    <h3>LEBAK JAYA 5 UTARA</h3>
                    <address>
                        <p><strong>Kecamatan:</strong> Tambaksari</p>
                        <p><strong>Kelurahan:</strong> Dukuh Setro</p>
                        <p><strong>Kode Pos:</strong> 60134</p>
                        <p><strong>E-mail:</strong><a href="mailto:lebakjayau@gmail.com"> lebakjayau@gmail.com</p></a>
                    </address>
                    <br />
                    <h3>Social</h3>
                    <p><i class="fab fa-youtube"></i> <a
                            href="https://www.youtube.com/channel/UCL-9Y5CYeiMmB5dvjzr7RpQ">btv tambaksari04</a>
                    </p>
                    <p><i class="fab fa-instagram"></i> <a
                            href="https://instagram.com/kkn_tambaksari_4?utm_medium=copy_link">kkn_tambaksari_4</a></p>
                    <p class="margin-bottom"><i class="fab fa-whatsapp"></i> <a
                            href="https://api.whatsapp.com/send/?phone=62881026187475">(+62)8810-2618-7475</a></p>
                </div>
                <div class="s-12 m-12 l-5">
                    <h3>Contact form</h3>
                    <form class="customform" action="{{('add_contact')}}" method="POST">
                        @csrf
                        @if(session('errors'))
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            Something it's wrong:
                            <ul>
                                @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                        @endif
                        <div class="s-12"><input name="email" placeholder="Your e-mail" title="Your e-mail" type="text"
                                required />
                        </div>
                        <div class="s-12"><input name="name" placeholder="Your name" title="Your name" type="text"
                                required />
                        </div>
                        <div class="s-12"><textarea placeholder="Your massage" name="pesan" rows="5"
                                required></textarea></div>
                        <div class="s-12 m-12 l-4"><button class="color-btn" type="submit">Submit</button></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- MAP -->
    <div id="map-block">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501.9467704404049!2d112.77962124106715!3d-7.240383641009546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9b97c464fd9%3A0xc5d41ec213db5e71!2sJl.%20Lb.%20Jaya%20V%20Utara%2C%20Gading%2C%20Kec.%20Tambaksari%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060134!5e0!3m2!1sen!2sid!4v1627942000916!5m2!1sen!2sid"
            width="100%" height="450" frameborder="0" style="border:0"></iframe>
    </div>
</section>
@endsection
