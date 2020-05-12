<!DOCTYPE html>
<html lang="en">

<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>@yield('title')</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{ asset('adminlinks') }}/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="{{ asset('adminlinks') }}/vendor/metisMenu/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="{{ asset('adminlinks') }}/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="{{ asset('adminlinks') }}/vendor/morrisjs/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="{{ asset('adminlinks') }}/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">


</head>

<body>

    <div id="soft-all-wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
            @include('backend.include.header')
            <!-- /.navbar-top-links -->

            @include('backend.include.leftmanu')

            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">@yield('content-heading')</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            @yield('maincontent')
            
            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="{{ asset('adminlinks') }}/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="{{ asset('adminlinks') }}/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="{{ asset('adminlinks') }}/vendor/metisMenu/metisMenu.min.js"></script>

    <!-- Morris Charts JavaScript -->
    <script src="{{ asset('adminlinks') }}/vendor/raphael/raphael.min.js"></script>
    <script src="{{ asset('adminlinks') }}/vendor/morrisjs/morris.min.js"></script>
    <script src="{{ asset('adminlinks') }}/data/morris-data.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="{{ asset('adminlinks') }}/dist/js/sb-admin-2.js"></script>

</body>

</html>
