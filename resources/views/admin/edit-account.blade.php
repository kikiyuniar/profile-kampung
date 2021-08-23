@extends('master_admin.core')
@section('title','Dashboard')
@section('container2')
<main>
    <div class="container">
        <div class="row">
            <div class="col">
                <section class="scroll-section" id="title">
                    <div class="page-title-container">
                        <h1 class="mb-0 pb-0 display-4">List Accounts</h1>
                    </div>
                </section>
                <section class="scroll-section" id="floatingLabel">
                    <h2 class="small-title"></h2>
                    <div class="card mb-5">
                        <div class="card-body">
                            @foreach ($data as $item)
                            <form action="../action_edit_account" method="post" id="registerForm"
                                class="tooltip-end-bottom" novalidate>
                                @csrf
                                <input type="text" name="id" value="{{$item->id}}" hidden>
                                @if(session('errors'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    Something it's wrong:
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true">×</span>
                                    </button>
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                                <div class="mb-3 filled form-group tooltip-end-top">
                                    <i data-cs-icon="user"></i>
                                    <input class="form-control" placeholder="Name" name="name" value="{{$item->name}}">
                                </div>
                                <div class="mb-3 filled form-group tooltip-end-top">
                                    <i data-cs-icon="email"></i>
                                    <input class="form-control" placeholder="Email" name="email"
                                        value="{{$item->email}}">
                                </div>
                                <div class="mb-3 filled form-group tooltip-end-top">
                                    <i data-cs-icon="lock-off"></i>
                                    <input class="form-control form-password" name="password" type="password" placeholder="Password"
                                        value="{{$item->password}}">
                                    <input type="checkbox" class="form-checkbox"> Show password
                                </div>
                                <button type="submit" class="btn btn-lg btn-primary">Signup</button>
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
