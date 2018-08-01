<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8"/>
        <meta content="IE=edge" http-equiv="X-UA-Compatible"/>
        <title>
            AdminLTE 2 | Dashboard
        </title>
        <!-- Tell the browser to be responsive to screen width -->
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport"/>
        <!-- Bootstrap 3.3.7 -->
        <link href="{{ asset('plugins/bootstrap/dist/css/bootstrap.min.css') }}" rel="stylesheet"/>
        <!-- Font Awesome -->
        <link href="{{ asset('plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet"/>
        <!-- Ionicons -->
        <link href="{{ asset('plugins/Ionicons/css/ionicons.min.css') }}" rel="stylesheet"/>
        <!-- Theme style -->
        <link href="{{ asset('dist/css/AdminLTE.min.css') }}" rel="stylesheet"/>
        <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
        <link href="{{ asset('dist/css/skins/_all-skins.min.css') }}" rel="stylesheet"/>
        <!-- Morris chart -->
        <link href="{{ asset('plugins/morris.js/morris.css') }}" rel="stylesheet"/>
        <!-- jvectormap -->
        <link href="{{ asset('plugins/jvectormap/jquery-jvectormap.css') }}" rel="stylesheet"/>
        <!-- Date Picker -->
        <link href="{{ asset('plugins/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css') }}" rel="stylesheet"/>
        <!-- Daterange picker -->
        <link href="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet"/>
        <!-- bootstrap wysihtml5 - text editor -->
        <link href="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css') }}" rel="stylesheet"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic" rel="stylesheet"/>
    </head>
    <body class="hold-transition skin-blue sidebar-mini">


        <div class="wrapper">

        </div>

        
        <!-- jQuery 3 -->
        <script src="{{ asset('plugins/jquery/dist/jquery.min.js') }}">
        </script>
        <!-- jQuery UI 1.11.4 -->
        <script src="{{ asset('plugins/jquery-ui/jquery-ui.min.js') }}">
        </script>
        <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
        <script>
            $.widget.bridge('uibutton', $.ui.button);
        </script>
        <!-- Bootstrap 3.3.7 -->
        <script src="{{ asset('plugins/bootstrap/dist/js/bootstrap.min.js') }}">
        </script>
        <!-- Morris.js charts -->
        <script src="{{ asset('plugins/raphael/raphael.min.js') }}">
        </script>
        <script src="{{ asset('plugins/morris.js/morris.min.js') }}">
        </script>
        <!-- Sparkline -->
        <script src="{{ asset('plugins/jquery-sparkline/dist/jquery.sparkline.min.js') }}">
        </script>
        <!-- jvectormap -->
        <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-1.2.2.min.js') }}">
        </script>
        <script src="{{ asset('plugins/jvectormap/jquery-jvectormap-world-mill-en.js') }}">
        </script>
        <!-- jQuery Knob Chart -->
        <script src="{{ asset('plugins/jquery-knob/dist/jquery.knob.min.js') }}">
        </script>
        <!-- daterangepicker -->
        <script src="{{ asset('plugins/moment/min/moment.min.js') }}">
        </script>
        <script src="{{ asset('plugins/bootstrap-daterangepicker/daterangepicker.js') }}">
        </script>
        <!-- datepicker -->
        <script src="{{ asset('plugins/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js') }}">
        </script>
        <!-- Bootstrap WYSIHTML5 -->
        <script src="{{ asset('plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js') }}">
        </script>
        <!-- Slimscroll -->
        <script src="{{ asset('plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}">
        </script>
        <!-- FastClick -->
        <script src="{{ asset('plugins/fastclick/lib/fastclick.js') }}">
        </script>
        <!-- AdminLTE App -->
        <script src="{{ asset('dist/js/adminlte.min.js') }}">
        </script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="{{ asset('dist/js/pages/dashboard.js') }}">
        </script>
        <!-- AdminLTE for demo purposes -->
        <script src="{{ asset('dist/js/demo.js') }}">
        </script>
    </body>
</html>