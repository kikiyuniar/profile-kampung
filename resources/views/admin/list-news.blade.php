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
                    <div class="col-12 col-sm-5 col-lg-3 col-xxl-2 mb-1">
                        <div
                            class="d-inline-block float-md-start me-1 mb-1 search-input-container w-100 border border-separator bg-foreground search-sm">
                            <input name="search" id="search" class="form-control form-control-sm datatable-search"
                                placeholder="Search" data-datatable="#datatableHover">
                            <span class="search-magnifier-icon">
                                <i data-cs-icon="search"></i>
                            </span>
                            <span class="search-delete-icon d-none">
                                <i data-cs-icon="close"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-12 col-sm-7 col-lg-9 col-xxl-10 text-end mb-1">
                        <div class="d-inline-block">
                            <button class="btn btn-icon btn-icon-only btn-outline-muted btn-sm datatable-print"
                                type="button" data-datatable="#datatableHover">
                                <i data-cs-icon="print"></i>
                            </button>
                            <div class="d-inline-block datatable-export" data-datatable="#datatableHover">
                                <button class="btn btn-icon btn-icon-only btn-outline-muted btn-sm dropdown"
                                    data-bs-toggle="dropdown" type="button" data-bs-offset="0,3">
                                    <i data-cs-icon="download"></i>
                                </button>
                                <div class="dropdown-menu dropdown-menu-sm dropdown-menu-end">
                                    <button class="dropdown-item export-copy" type="button">Copy</button>
                                    <button class="dropdown-item export-excel" type="button">Excel</button>
                                    <button class="dropdown-item export-cvs" type="button">Cvs</button>
                                </div>
                            </div>
                        </div>
                    </div>
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
                <table class="table table-stripped">
                    <thead>
                        <tr>
                            <th style="width: 20%" class="text-muted text-small text-uppercase" data-sorting_type="asc" data-column_name="id" style="cursor: pointer">Judul <span id="id_icon"></span></th>
                            <th style="width: 20%" class="text-muted text-small text-uppercase">Waktu</th>
                            <th class="text-muted text-small text-uppercase" data-sorting_type="asc" data-column_name="post_title" style="cursor: pointer">Thumbnail <span id="post_title_icon"></span></th>
                            <th class="text-muted text-small text-uppercase">Action</th>
                        </tr>
                    </thead>
                    @foreach ($data as $item)
                    <tbody>
                        <tr>
                            <td>{{$item->judul}}</td>
                            <td class="text-alternate">{{ date("l, d F Y", strtotime($item->waktu)) }}</td>
                            <td class="text-alternate">{!! nl2br($item->isi_thumbnail)!!}</td>
                            <td class="text-alternate">
                                <button type="button" class="btn btn-outline-success">
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
                                </button>
                                <a class="btn btn-outline-danger" href="/del/{{ $item->id}}">
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
                {!! $data->links('vendor.pagination.bootstrap-4') !!}
            </div>
        </div>
    </section>
</main>


@endsection
