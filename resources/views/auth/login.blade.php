<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-41035904-17"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-41035904-17');
    </script>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="QuillPro is multipurpose Bootstrap 4 Admin Dashboard Template that allows you build and launch your projects in the quickest time possible.">
    <meta name="author" content="Base5Builder">
    <link rel="icon" href="assets/img/favicon.png">

    <title>Admin Login</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,700&amp;subset=latin-ext" rel="stylesheet">

    <!-- CSS - REQUIRED - START -->
    <!-- Batch Icons -->
    <link rel="stylesheet" href="{{URL::to('admin/assets/fonts/batch-icons/css/batch-icons.css')}}">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{URL::to('admin/assets/css/bootstrap/bootstrap.min.css')}}">
    <!-- Material Design Bootstrap -->
    <link rel="stylesheet" href="{{URL::to('admin/assets/css/bootstrap/mdb.min.css')}}">
    <!-- Custom Scrollbar -->
    <link rel="stylesheet" href="{{URL::to('admin/assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.min.css')}}">
    <!-- Hamburger Menu -->
    <link rel="stylesheet" href="{{URL::to('admin/assets/css/hamburgers/hamburgers.css')}}">

    <!-- CSS - REQUIRED - END -->
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{URL::to('admin/assets/fonts/font-awesome/css/font-awesome.min.css')}}">

    <!-- CSS - DEMO - START -->
    <link rel="stylesheet" href="{{URL::to('admin/assets/demo/css/ui-icons-batch-icons.css')}}">
    <!-- CSS - DEMO - END -->

    <!-- QuillPro Styles -->
    <link rel="stylesheet" href="{{URL::to('backend')}}">
</head>

<body>

    <div class="container-fluid">
        <div class="row">
            <div class="right-column sisu">
                <div class="row mx-0">
                    <div class="col-md-7 order-md-1 signin-right-column px-5 bg-dark" style='background-image: url("{{URL::to("/admin/assets/img/bg-image-1.jpg")}}");'>

                        <a class="signin-logo d-sm-block d-md-none" href="#">
                            <img src="{{URL::to('admin/assets/img/logo-white.png')}}" width="145" height="32.3" alt="QuillPro">
                        </a>
                        <h1 class="display-4">Sign In To get Started</h1>
                        <p class="lead mb-5">
                            Big data latte SpaceTeam unicorn cortado hacker physical computing paradigm.
                        </p>
                    </div>
                    <div class="col-md-5 order-md-2 signin-left-column bg-white px-5">
                        <a class="signin-logo d-sm-none d-md-block" href="#">
                            <img src="{{URL::to('admin/assets/img/logo-dark.png')}}" width="145" height="32.3" alt="QuillPro">
                        </a>
                        <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                            {{ csrf_field() }}

                            <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                                <label for="exampleInputEmail1">Email address</label>

                                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif

                                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                            </div>

                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" name="password" class="form-control" id="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif

                            </div>

                            <div class="form-check">
                                <label class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input">
                                    <span class="custom-control-indicator"></span>
                                    <span class="custom-control-description" {{ old('remember') ? 'checked' : '' }}> Keep Me Signed In</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-gradient btn-block">
                                <i class="batch-icon batch-icon-key"></i>
                                Sign In
                            </button>
                            <hr>
                            <p class="text-center">
                                Don't Have An Account? <a href="#">Sign Up here</a>
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SCRIPTS - REQUIRED START -->
    <!-- Placed at the end of the document so the pages load faster -->
    <!-- Bootstrap core JavaScript -->
    <!-- JQuery -->
    <script type="text/javascript" src="{{URL::to('admin/assets/js/jquery/jquery-3.1.1.min.js')}}"></script>
    <!-- Popper.js - Bootstrap tooltips -->
    <script type="text/javascript" src="{{URL::to('admin/assets/js/bootstrap/popper.min.js')}}"></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="{{URL::to('admin/assets/js/bootstrap/bootstrap.min.js')}}"></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src="{{URL::to('admin/assets/js/bootstrap/mdb.min.js')}}"></script>
    <!-- Velocity -->
    <script type="text/javascript" src="{{URL::to('admin/assets/plugins/velocity/velocity.min.js')}}"></script>
    <script type="text/javascript" src="{{URL::to('admin/assets/plugins/velocity/velocity.ui.min.js')}}"></script>
    <!-- Custom Scrollbar -->
    <script type="text/javascript" src="{{URL::to('admin/assets/plugins/custom-scrollbar/jquery.mCustomScrollbar.concat.min.js')}}"></script>
    <!-- jQuery Visible -->
    <script type="text/javascript" src="{{URL::to('admin/assets/plugins/jquery_visible/jquery.visible.min.js')}}"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script type="text/javascript" src="{{URL::to('admin/assets/js/misc/ie10-viewport-bug-workaround.js')}}"></script>

    <!-- SCRIPTS - REQUIRED END -->

    <!-- SCRIPTS - OPTIONAL START -->
    <!-- Image Placeholder -->
    <script type="text/javascript" src="{{URL::to('admin/assets/js/misc/holder.min.js')}}"></script>
    <!-- SCRIPTS - OPTIONAL END -->

    <!-- QuillPro Scripts -->
    <script type="text/javascript" src="{{URL::to('admin/assets/js/scripts.js')}}"></script>
</body>

</html>
