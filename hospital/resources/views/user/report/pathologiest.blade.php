<!DOCTYPE html>
<html>
<head>
<style>
#customers {
  font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

#customers td, #customers th {
  border: 1px solid #ddd;
  padding: 20px;
  text-align: center;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: cyan;}

#customers th {
  padding-top: 12px;
  padding-bottom: 12px;
  text-align: left;
  background-color: #4CAF50;
  color: white;
  text-align: center;

}
</style>
</head>
<body>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dcotor Prescription</title>

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

        <style>
          div.gallery {
  margin: 5px;
  border: 1px solid #ccc;
  float: left;
  width: 180px;
}

div.gallery:hover {
  border: 1px solid #777;
}

div.gallery img {
  width: 100%;
  height: auto;
}

div.desc {
  padding: 15px;
  text-align: center;
}

    </style>

</head>

<body>

    <div id="soft-all-wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            
            @include('admin.include.header')
            <!-- /.navbar-top-links -->

            @include('admin.include.leftmanu')

            <!-- /.navbar-static-side -->
        </nav>

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">History</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

<div class="gallery">
  <a target="_blank" href="{{ asset('prescription_img') }}/prescription.jpg">
    <img src="{{ asset('prescription_img') }}/prescription.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Date:10-10-19</div>
</div>

<div class="gallery">
  <a target="_blank" href="{{ asset('prescription_img') }}/prescription.jpg">
    <img src="{{ asset('prescription_img') }}/prescription.jpg" alt="Northern Lights" width="600" height="400">
  </a>
  <div class="desc">Date:10-10-19</div>
</div>

<div class="gallery">
  <a target="_blank" href="{{ asset('prescription_img') }}/prescription.jpg">
    <img src="{{ asset('prescription_img') }}/prescription.jpg" alt="Mountains" width="600" height="400">
  </a>
  <div class="desc">Date:10-10-19</div>
</div>

            
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


</body>
</html>
