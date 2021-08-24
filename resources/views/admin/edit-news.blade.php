@extends('master_admin.core')
@section('title','Dashboard')
@section('container2')
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">Input News</h1>
                    </div>
                </section>
                <section class="scroll-section" id="floatingLabel">
                    <h2 class="small-title">Floating Label</h2>
                    <div class="card mb-5">
                        <div class="card-body">
                            @foreach ($data as $item)     
                            <form action="/action_edit_news" method="post">
                                @csrf
                                @if ($message = Session::get('success'))
                                <div style="text-align: center" class="alert alert-success alert-dismissible fade show"
                                    role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                                <input type="text" name="id" value="{{$item->id}}" hidden>                               
                                <div class="form-floating mb-3">
                                    <input type="text" name="judul" class="form-control" placeholder="judul_news" value="{{$item->judul}}" required>
                                    <label>Judul</label>
                                </div>
                                <input type="text" name="slug" hidden>
                                <label>Isi Thumbnail</label>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Isi thumbnail Berita" rows="3"
                                        name="isi_thumbnail" required>{{$item->isi_thumbnail}}</textarea>
                                    <script>
                                        CKEDITOR.replace('isi_thumbnail');
                                    </script>
                                </div>
                                <label>Isi</label>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Isi Berita" rows="3"
                                        name="isi" required>{{$item->isi}}</textarea>
                                    <script>
                                        CKEDITOR.replace('isi');
                                    </script>
                                </div>
                                <button class="btn btn-primary" type="submit">Update</button>
                                <a class="btn btn-danger" href="list_news">Back</a>
                            </form>
                            @endforeach                                                            
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection
