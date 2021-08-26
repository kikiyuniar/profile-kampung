<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1">
    <title>Login</title>
    <meta name="description" content="Login Page">
    <link rel="preconnect" href="https://fonts.gstatic.com/">
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&amp;display=swap"
        rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="dashboard/font/CS-Interface/style.css">
    <link rel="stylesheet" href="dashboard/css/vendor/bootstrap.min.css">
    <link rel="stylesheet" href="dashboard/css/vendor/OverlayScrollbars.min.css">
    <link rel="stylesheet" href="dashboard/css/styles.css">
    <link rel="stylesheet" href="dashboard/css/main.css">
    <script src="dashboard/js/base/loader.js"></script>
</head>

<body class="h-100">
    <div id="root" class="h-100">
        <div class="fixed-background"></div>
        <div class="container-fluid p-0 h-100 position-relative">
            <div class="row g-0 h-100">
                <div class="offset-0 col-12 d-none d-lg-flex offset-md-1 col-lg h-lg-100">
                    <div class="min-h-100 d-flex align-items-center">
                        <div class="w-100 w-lg-75 w-xxl-50">
                            <div>
                                <div class="mb-5">
                                    <h1 class="display-3 text-white">Multiple Niches</h1>
                                    <h1 class="display-3 text-white">Ready for Your Project</h1>
                                </div>
                                <p class="h6 text-white lh-1-5 mb-5">
                                    Dynamically target high-payoff intellectual capital for customized technologies.
                                    Objectively integrate emerging core competencies before process-centric
                                    communities...
                                </p>
                                <div class="mb-5">
                                    <a class="btn btn-lg btn-outline-white" href="/">Back to Home</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-auto h-100 pb-4 px-4 pt-0 p-lg-0">
                    <div
                        class="sw-lg-70 min-h-100 bg-foreground d-flex justify-content-center align-items-center shadow-deep py-5 full-page-content-right-border">
                        <div class="sw-lg-50 px-5">
                            <div class="sh-11">
                                <a href=" ">
                                    <p id="myP" style="font:italic bold 30px Georgia,serif;">Login to Dashboard</p>
                                </a>
                            </div>
                            <div class="mb-5">
                                <h2 class="cta-1 mb-0 text-primary">Welcome,</h2>
                                <h2 class="cta-1 text-primary">let's get started!</h2>
                            </div>
                            <div>
                                @if ($message = Session::get('danger'))
                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                    <strong>{{ $message }}</strong>
                                </div>
                                @endif
                                <form action="/login" method="post" class="tooltip-end-bottom">
                                    @csrf

                                    {{-- @if(session('errors'))
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
                            @if (Session::has('success'))
                            <div class="alert alert-success">
                                {{ Session::get('success') }}
                            </div>
                            @endif
                            @if (Session::has('error'))
                            <div class="alert alert-danger">
                                {{ Session::get('error') }}
                            </div>
                            @endif --}}
                            <div class="mb-3 filled form-group tooltip-end-top">
                                <i data-cs-icon="email"></i>
                                <input class="form-control" placeholder="Email" name="email">
                            </div>
                            <div class="mb-3 filled form-group tooltip-end-top">
                                <i data-cs-icon="lock-off"></i>
                                <input class="form-control pe-7" name="password" type="password" placeholder="Password">
                            </div>
                            <button type="submit" class="btn btn-lg btn-primary">Login</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <script src="dashboard/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="dashboard/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="dashboard/js/vendor/OverlayScrollbars.min.js"></script>
    <script src="dashboard/js/vendor/autoComplete.min.js"></script>
    <script src="dashboard/js/vendor/clamp.min.js"></script>
    <script src="dashboard/js/vendor/jquery.validate/jquery.validate.min.js"></script>
    <script src="dashboard/js/vendor/jquery.validate/additional-methods.min.js"></script>
    <script src="dashboard/font/CS-Line/csicons.min.js"></script>
    <script src="dashboard/js/base/helpers.js"></script>
    <script src="dashboard/js/base/globals.js"></script>
    <script src="dashboard/js/base/nav.js"></script>
    <script src="dashboard/js/base/search.js"></script>
    <script src="dashboard/js/base/settings.js"></script>
    <script src="dashboard/js/base/init.js"></script>
    <script src="dashboard/js/pages/auth.login.js"></script>
    <script src="dashboard/js/common.js"></script>
    <script src="dashboard/js/scripts.js"></script>
    <script src="dashboard/js/cs/scrollspy.js"></script>
    <script>
        function myFunction() {
            console.log(document.getElementById("myP").style.font);
        }

    </script>

</body>

</html>
