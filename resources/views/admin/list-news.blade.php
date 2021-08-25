@extends('master_admin.core')
@section('title','Dashboard')
@section('container2')


<main>
    <div class="page-title-container">
        <div class="row">
            <div class="col-12 col-md-7">

            </div>
            <div class="col-12 d-flex align-items-start">
                <a href="news" class="btn btn-outline-primary btn-icon btn-icon-start">
                    <i data-cs-icon="plus"></i>
                    <span>Add New</span>
                </a>
            </div>

        </div>
    </div>
    <section class="scroll-section" id="hover">
        <h2 class="small-title">List News</h2>
        <div class="card mb-5">
            <div class="card-body">
                <div class="row">
                    @if ($message = Session::get('danger'))
                    <div style="text-align: center" class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                    @if ($message = Session::get('success'))
                    <div style="text-align: center" class="alert alert-success alert-dismissible fade show"
                        role="alert">
                        <strong>{{ $message }}</strong>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                    @endif
                </div>
                <div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%; height: 620px;">
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th style="width: 20%" class="text-muted text-small text-uppercase" data-sorting_type="asc"
                                data-column_name="id" style="cursor: pointer">Judul <span id="id_icon"></span></th>
                            <th style="width: 20%" class="text-muted text-small text-uppercase">Waktu</th>
                            <th style="width: 40%" class="text-muted text-small text-uppercase" data-sorting_type="asc"
                                data-column_name="post_title" style="cursor: pointer">Thumbnail <span
                                    id="post_title_icon"></span></th>
                            <th style="width: 15%" class="text-muted text-small text-uppercase">Action</th>
                        </tr>
                    </thead>
                    @foreach ($data_news as $item)
                    <tbody>
                        <tr>
                            <td>{{$item->judul}}</td>
                            <td class="text-alternate">{{ date("l, d F Y", strtotime($item->waktu)) }}</td>
                            <td class="text-alternate">{!! nl2br($item->isi_thumbnail)!!}</td>
                            <td class="text-alternate">
                                <a class="btn btn-outline-success mb-1" href="/{{ $item->id }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-journal-text" viewBox="0 0 16 16">
                                        <path
                                            d="M5 10.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z" />
                                        <path
                                            d="M3 0h10a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2v-1h1v1a1 1 0 0 0 1 1h10a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v1H1V2a2 2 0 0 1 2-2z" />
                                        <path
                                            d="M1 5v-.5a.5.5 0 0 1 1 0V5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0V8h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1zm0 3v-.5a.5.5 0 0 1 1 0v.5h.5a.5.5 0 0 1 0 1h-2a.5.5 0 0 1 0-1H1z" />
                                    </svg>
                                    Detail
                                </a>
                                <a class="btn btn-outline-danger mb-1" href="hapus/{{$item->id}}">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                        class="bi bi-trash" viewBox="0 0 16 16">
                                        <path
                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z">
                                        </path>
                                        <path fill-rule="evenodd"
                                            d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z">
                                        </path>
                                    </svg>
                                    Hapus
                                </a>
                            </td>
                        </tr>
                    </tbody>
                    @endforeach
                </table>
                </div>
                {!! $data_news->links('vendor.pagination.bootstrap-4') !!}
            </div>
        </div>
    </section>
</main>
@endsection
