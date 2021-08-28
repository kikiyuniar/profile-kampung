@extends('master_front.core-news')
@section('title','News')
@section('container')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<section>

    <!-- LATEST NEWS -->
    <div id="latest-news">
        <div class="container">
            <h2 class="section-title">Latest News
            </h2>
            <div class="row">
                @foreach ($data as $item)
                {{-- <img class="card-img-top" src="..." alt="Card image cap"> --}}
                <div class="col-sm-12 mb-5">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{$item->judul}}</h5>
                            <p class="card-text"><small
                                class="text-muted">{{ date("l, d F Y", strtotime($item->waktu)) }}</small></p>
                                <img style="display:block;margin-left: auto;margin-right: auto;width: 400px;" src="{{URL::asset('img_news/'.$item->foto)}}" class="card-img-top" alt="...">
                                <p class="card-text">{!! nl2br($item->isi)!!}</p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <a href="{{url('news_front')}}" type="button" class="btn btn-outline-primary    ">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                    class="bi bi-arrow-left-square" viewBox="0 0 16 16">
                    <path fill-rule="evenodd"
                        d="M15 2a1 1 0 0 0-1-1H2a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2zM0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2zm11.5 5.5a.5.5 0 0 1 0 1H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5z">
                    </path>
                </svg>
                Back
            <a>
        </div>
    </div>

    <div id="map-block">
        <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d501.9467704404049!2d112.77962124106715!3d-7.240383641009546!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7f9b97c464fd9%3A0xc5d41ec213db5e71!2sJl.%20Lb.%20Jaya%20V%20Utara%2C%20Gading%2C%20Kec.%20Tambaksari%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060134!5e0!3m2!1sen!2sid!4v1627942000916!5m2!1sen!2sid"
            width="100%" height="450" frameborder="0" style="border:0"></iframe>
    </div>
</section>
@endsection
