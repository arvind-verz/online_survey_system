<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>{{ config('app.name', 'Laravel') }}</title>
        <link href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet"/>
        <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" />
        <script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}">
        </script>
        <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}">
        </script>
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,600" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div id="app container">
            <main class="py-4 col-lg-12">
                <!-- Content Wrapper. Contains page content -->
                <div class="content-wrapper text-center">
                    <!-- Content Header (Page header) -->
                    <section class="content-header text-success">
                        <p><i class="fa fa-check-circle fa-5x" aria-hidden="true"></i> </p>
                        <h1>
                        {{ $page_title }}!
                        </h1>
                        <h2>You Account has been verified!</h2>
                    </section>
                    <!-- Main content -->
                    <section class="content">
                        <!-- Small boxes (Stat box) -->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="box">
                                    <div class="box-body">
                                        <a href="{{ $login_url }}" class="btn btn-primary btn-lg">Continue to Login</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.row (main row) -->
                    </section>
                    <!-- /.content -->
                </div>
                <!-- /.content-wrapper -->
            </main>
        </div>
    </body>
</html>