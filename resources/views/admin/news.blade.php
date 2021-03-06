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
                        <h1 class="mb-0 pb-0 display-4">Input News</h1>
                    </div>
                </section>
                <section class="scroll-section" id="floatingLabel">
                    <h2 class="small-title">Floating Label</h2>
                    <div class="card mb-5">
                        <div class="card-body">
                            <form action="/add_news" method="post" enctype="multipart/form-data">
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
                                    <input type="text" name="judul" class="form-control" placeholder="judul_news" required>
                                    <label>Judul</label>
                                </div>
                                <label> Input FOTO</label>
                                <div class="mb-3 form-group files">
                                    <input type="file" class="form-control" name="foto" required>
                                </div>
                                <input type="text" name="slug" hidden>
                                <label class="mb-2">Isi Thumbnail ( Max 200 kata)</label>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Isi thumbnail Berita" rows="3"
                                        name="isi_thumbnail" required></textarea>
                                    <script>
                                        CKEDITOR.replace('isi_thumbnail');
                                    </script>
                                </div>
                                <label class="mb-2">Isi</label>
                                <div class="form-floating mb-3">
                                    <textarea class="form-control" placeholder="Isi Berita" rows="3"
                                        name="isi" required></textarea>
                                    <script>
                                        CKEDITOR.replace('isi');

                                    </script>
                                </div>
                                <?php
                                echo '<div class="col-12 col-sm-6 col-xl-4 mb-3">';
                                echo '<label class="form-label">Date</label>';
                                echo '<input type="date" name="waktu" class="form-control" id="datePickerValue" value="'. date('d-m-Y') .'" required></div>';
                                ?>
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <a class="btn btn-danger" href="listnews">Cancel</a>
                            </form>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection
