@extends('master_admin.core')
@section('title','Dashboard')
@section('container2')
<link rel="stylesheet" href="{{URL::asset('front')}}/css/drop-file.css">
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">Input UMKM</h1>
                    </div>
                </section>
                <section class="scroll-section" id="floatingLabel">
                    <h2 class="small-title"></h2>
                    <div class="card mb-5">
                        <div class="card-body">
                            <form action="/post_umkm" method="post" enctype="multipart/form-data">
                                @csrf
                                @if ($message = Session::get('success'))
                                <div style="text-align: center" class="alert alert-success alert-dismissible fade show"
                                    role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                                <div class="form-floating mb-3">
                                    <input type="text" name="judul" class="form-control" placeholder="judul">
                                    <label>Judul</label>
                                </div>
                                <label> Input UMKM</label>
                                <div class="mb-3 form-group files">
                                    <input type="file" class="form-control" name="foto">
                                </div>
                                <label>Keterangan</label>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Isi thumbnail Berita" rows="3"
                                        name="keterangan" required></textarea>
                                    <script>
                                        CKEDITOR.replace('keterangan');

                                    </script>
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div>
                    <div class="card mb-5">
                        <div class="card-body">
                            <section class="scroll-section" id="responsive">
                                <h2 class="small-title">List UMKM</h2>
                                <div class="row">
                                    <div class="col">
                                        @foreach ($data as $item)
                                        <h3>{{$item->judul}}</h3>
                                        <div class="card mb-5">

                                            <form action="/del-umkm" method="GET">
                                            <div class="shadow card-body">
                                                {{-- <a class="btn btn-outline-danger mb-1" href="del-umkm"> --}}
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                        </path>
                                                    </svg>
                                                    <button type="submit">hapus</button>
                                                {{-- </a> --}}
                                                </form>
                                                <a class="btn btn-outline-success mb-1" href="#">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                                        </path>
                                                        <path fill-rule="evenodd"
                                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                                        </path>
                                                    </svg>
                                                    Edit
                                                </a>
                                                <img style="display:block;margin-left: auto;margin-right: auto;width: 500px;"
                                                src="{{asset('/img_umkm/'.$item->foto)}}"
                                                class="img-fluid rounded mb-5" alt="Responsive image">
                                                <div class="">
                                                    {!! nl2br($item->keterangan)!!}
                                                </div>
                                            </div>

                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection
