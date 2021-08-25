@extends('master_admin.core')
@section('title','Dashboard')
@section('container2')
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">Transparan Keuangan</h1>
                    </div>
                </section>
                <section class="scroll-section" id="floatingLabel">
                    <h2 class="small-title">Floating Label</h2>
                    <div class="card mb-5">
                        <div class="card-body">
                            <form action="/update_transparan" method="post">
                                @csrf
                                @if ($message = Session::get('success'))
                                <div style="text-align: center" class="alert alert-success alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                </div>
                                @endif
                                @foreach ($data as $tampilkan)
                                <input type="id" name="id" value="{{$tampilkan->id}}" hidden>
                                <div class="form-floating mb-3">
                                    <input type="judul" name="judul" class="form-control" placeholder="judul" value="{{$tampilkan->judul}}">
                                    <label>Judul</label>
                                </div>
                                <div class="form-floating mb-3">
                                    <input type="text" name="embed" class="form-control" placeholder="embed" value="{{$tampilkan->embed}}">
                                    <label>Embed</label>
                                </div>
                                <label> Address</label>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Address" rows="3" name="isi">{{$tampilkan->isi}}</textarea>
                                    <script>
                                        CKEDITOR.replace('isi');
                                    </script>
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