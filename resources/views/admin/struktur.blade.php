@extends('master_admin.core')
@section('title','Dashboard')
@section('container2')
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">Struktur Organisasi</h1>
                    </div>
                </section>
                <section class="scroll-section" id="floatingLabel">
                    <h2 class="small-title"></h2>
                    <div class="card mb-5">
                        <div class="card-body">
                            <form action="/update_struktur" method="post">
                                @csrf
                                @if ($message = Session::get('success'))
                                <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                @foreach ($data as $tampilkan)
                                <input type="id" name="id" value="{{$tampilkan->id}}" hidden>
                                <label> Isi Gambar Struktur Organisasi</label>
                                <div class="form-floating mb-3">
                                    <input class="form-control" type="text" name="isi" value="{{$tampilkan->isi}}" required>
                                    {{-- <textarea class="form-control" placeholder="Address" rows="3" name="isi">{{$tampilkan->isi}}</textarea>
                                    <script>
                                        CKEDITOR.replace('isi');
                                    </script> --}}
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                                @endforeach
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection