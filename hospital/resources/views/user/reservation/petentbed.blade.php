<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Bed For Petent</title>

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


  <!-- Custom stlylesheet -->
  <link type="text/css" rel="stylesheet" href="{{ asset('reservation')}}/css/style.css" />

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
                    <h1 class="page-header">Bed For Patent</h1>
                    <h2>{{ Session::get('massage') }}</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div id="booking" class="section">
    <div class="section-center">
      <div class="container">
        <div class="">
          
          <div class="col-md-6 col-md-offset-1">
            <div class="booking-form">
              {!! Form::open(['url'=>'/reservation/patentbed','method'=>'post']) !!}
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="text" name="name">
                      <span class="form-label">Name</span>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="email"name="email">
                      <span class="form-label">Email</span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="tel" name="number">
                      <span class="form-label">Phone</span>
                    </div>
                  </div>
                  
                  <div class="col-md-3 col-sm-6">
                    <div class="form-group">
                      <span class="form-label">Beds</span>
                      <select class="form-control" name="beds">
                        <option value="1">1 Bed</option>
                        <option value="2">2 Beds</option>
                        <option value="3">3 Beds</option>
                        <option value="4">4 Beds</option>
                      </select>
                      <span class="select-arrow"></span>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <div class="form-group">
                      <input class="form-control" type="date" name="indate" required>
                      <span class="form-label">Check In</span>
                    </div>
                  </div>
                </div>
                <div class="form-btn">
                  <button class="submit-btn">Book Now</button>
                </div>
              {!! Form::close() !!}
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
       <script src="{{ asset('reservation')}}/js/jquery.min.js"></script>
  <script>
    $('.form-control').each(function () {
      floatedLabel($(this));
    });

    $('.form-control').on('input', function () {
      floatedLabel($(this));
    });

    function floatedLabel(input) {
      var $field = input.closest('.form-group');
      if (input.val()) {
        $field.addClass('input-not-empty');
      } else {
        $field.removeClass('input-not-empty');
      }
    }
  </script>

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
