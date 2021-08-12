@extends('master_admin.core')
@section('title','Dashboard')
@section('container2')
<main>
    <div class="container">
        <div class="page-title-container">
            <div class="row">
                <div class="col-12 col-md-7">
                    <h1 class="mb-0 pb-0 display-4" id="title">Dashboards</h1>
                    <nav class="breadcrumb-container d-inline-block" aria-label="breadcrumb">
                        <ul class="breadcrumb pt-0">
                            <li class="breadcrumb-item"><a href="Dashboards.Default.html">Home</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
        <div class="card mb-2">
            <div class="card-body h-100">
                Selamat datang di halaman Dashboard Website pengelolaan Transparansi Kampung Lebak Jaya 5 Utara Surabaya.
            </div>
        </div>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-xl-3 g-2">
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="board-1" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="Dashboards.Default.html" class="heading stretched-link d-block">Default</a>
                            <div class="text-muted">Home screen that contains stats, charts, call to action buttons and various listing elements.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="board-3" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="Dashboards.Visual.html" class="heading stretched-link d-block">Visual</a>
                            <div class="text-muted">A dashboard implementation that mainly has visual items such as banners, call to action buttons and stats.</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <div class="card-body row gx-4">
                        <div class="col-auto">
                            <i data-cs-icon="board-2" class="text-primary"></i>
                        </div>
                        <div class="col">
                            <a href="Dashboards.Analytic.html" class="heading stretched-link d-block">Analytic</a>
                            <div class="text-muted">Another dashboard alternative that focused on data, listing and charts.</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection