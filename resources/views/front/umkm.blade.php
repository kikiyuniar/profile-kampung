@extends('master_front.core-news')
@section('title','News')
@section('container')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<section>
    <!-- FIRST BLOCK -->
    <div id="first-block">
        <div class="line">
            <h1>DATA UMKM </h1>
            <p>Kampung Lebak Jaya 5 Utara Merupakan Kampung yang bersinergitas tinggi dan penerapan dalam <br>sebuah
                kemajuan bersama dalam warga dan untuk Indonesia.</p>
        </div>
    </div>

    <!-- LATEST NEWS -->
    <div id="latest-news">
        <div class="container">
            <div class="row">
                @foreach ($data as $item)
                <h3>{{$item->judul}}</h3>
                <div class="col-4">
                    <div class="">

                        <div class="card-body">
                            <img style="width: 100%;"
                                src="{{asset('/img_umkm/'.$item->foto)}}" class="img-fluid rounded mb-5"
                                alt="Responsive image">
                            </div>
                            
                        </div>
                    </div>
                    <div class="col-8">
                        {!! nl2br($item->keterangan)!!}
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endsection
