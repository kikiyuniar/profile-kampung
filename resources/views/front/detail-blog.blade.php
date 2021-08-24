@extends('master_front.core-news')
@section('title','News')
@section('container')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<section>
    <!-- FIRST BLOCK -->
    <div id="first-block">
        <div class="line">
            @foreach ($data as $item)

            <h1>News</h1>
            <p>Kampung Lebak Jaya 5 Utara Merupakan Kampung yang bersinergitas tinggi dan penerapan dalam <br>sebuah
                kemajuan bersama dalam warga dan untuk Indonesia.</p>
            @endforeach
        </div>
    </div>

    <!-- LATEST NEWS -->
    <div id="latest-news">
        <div class="container">
            <h2 class="section-title">Latest News
            </h2>
            <div class="row">
                @foreach ($data as $item)

                @endforeach
            </div>
            <a href="#" style="color: white" class="btn btn-primary">Go Back</a>
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
