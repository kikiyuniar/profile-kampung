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
                    
                    {{-- <div class="card mb-5">
                        <div class="card-body">
                            <form action="/post_struktur" method="post" enctype="multipart/form-data">
                                @csrf
                                @if ($message = Session::get('success'))
                                <div style="text-align: center" class="alert alert-success alert-dismissible fade show"
                                    role="alert">
                                    <strong>{{ $message }}</strong>
                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                        aria-label="Close"></button>
                                </div>
                                @endif
                                <label> Isi Gambar Struktur Organisasi</label>
                                <div class="mb-3 form-group files">
                                    <input type="file" class="form-control" name="foto">
                                </div>
                                <button class="btn btn-primary" type="submit">Submit</button>
                            </form>
                        </div>
                    </div> --}}
                    <div class="card mb-5">
                        
                        <div class="card-body">
                            <section class="scroll-section" id="responsive">
                                <h2 class="small-title">Responsive</h2>
                                <div class="row">
                                    <div class="col">
                                        <button class="btn btn-info" type="submit">Update</button>
                                        <div class="card mb-5">
                                            @foreach ($data as $item)
                                                
                                            <div class="shadow card-body">
                                                <img style="display:block;margin-left: auto;margin-right: auto;" src="{{asset('/dashboard/img_post/'.$item->foto)}}" class="img-fluid rounded"
                                                alt="Responsive image">
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
