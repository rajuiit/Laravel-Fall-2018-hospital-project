<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pathology Apointment</title>

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
    <!-- Bootstrap -->
    <!-- Ico Fonts -->
    <link href="{{ asset('styles') }}/css/icofont.css" rel="stylesheet">
    <!-- Animate -->
    <link href="{{ asset('styles') }}/css/animate.css" rel="stylesheet">
    <!-- Slicknav -->
    <link href="{{ asset('styles') }}/css/slicknav.css" rel="stylesheet">
     <!-- Owl Carousel -->
    <link href="{{ asset('styles') }}/css/owl.carousel.min.css" rel="stylesheet">
    <link href="{{ asset('styles') }}/css/owl.theme.default.css" rel="stylesheet">
    <!-- Magnific Popup -->
    <link href="{{ asset('styles') }}/css/magnific-popup.css" rel="stylesheet">
    <!-- Datepicker -->
    <link href="{{ asset('styles') }}/css/datepicker.css" rel="stylesheet">
    <!-- Main Style -->
    <link href="{{ asset('styles') }}/css/style.css" rel="stylesheet">
    <!-- Responsive -->
    <link href="{{ asset('styles') }}/css/responsive.css" rel="stylesheet">

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
                    <h1 class="page-header">Make Apointment In Hospital</h1>
                    <h2>{{ Session::get('massage') }}
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
    <!-- =========================
          Appoinment SECTION
    ========================= -->
    <section class="appoinment_section" id="appoinment">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="appoinment_bg">
              <div class="appoinment_header">
                <h1>{{ Session::get('massage') }}</h1>
                <h2>make an appoinment in Pathologist</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alt</p>
                <p></p>
              </div><!-- /.appoinment_header -->
              <div class="appoinment-from">
                {!! Form::open(['url'=>'/pathologies/inhospital','method'=>'post']) !!}
                  <div class="row">
                     <div class="col-md-6 col-sm-6 appoinment_group">
                      <input type="text" class="form-controls" name="patient_name" placeholder="patient name">
                    </div>

                    <div class="col-md-6 col-sm-6 appoinment_group">
                      <input type="text" class="datepicker form-controls" name="date" placeholder="appoinment-date" required="" />
                    </div>

                    <div class="col-md-6 col-sm-6 appoinment_group">
                      <div class="select_box">
                          <select name="pathologist_name">
                            <option>Pathologist Name</option>
                            <option>Shamim</option>
                            <option>Ani</option>
                            <option>Ferdous</option>
                          </select>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-6 appoinment_group">
                      <div class="select_box">
                          <select name='time'>
                            <option>Time</option>
                            <option>10.00am-12.00am</option>
                            <option>02.00pm-04.00pm</option>
                            <option>06.00pm-08.00pm</option>
                          </select>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12 col-xs-12 text-right">
                      <button type="submit">send</button>
                    </div>
                  </div><!-- /.row -->
                   
                {!! Form::close() !!}
              </div><!-- /.appoinment-from -->
            </div><!-- /.appoinment_bg -->
          </div><!-- /.col-md-7 -->
          <div class="col-md-5">
            <div class="appoinment_thumbnail">
              <img src="{{ asset('styles') }}/images/welcome-doctor.png" alt="img">
            </div><!-- /.appoinment_thumbnail -->
          </div><!-- /.col-md-5 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.appoinment_section -->
            
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
