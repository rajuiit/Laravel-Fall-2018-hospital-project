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

    <link rel="stylesheet" href="{{ asset('adminlinks') }}/oldstyle/theme/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('adminlinks') }}/oldstyle/theme/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('adminlinks') }}/oldstyle/theme/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('adminlinks') }}/oldstyle/theme/bar/bar.css" type="text/css" media="screen" />
   <link rel="stylesheet" href="{{ asset('adminlinks') }}/oldstyle/css/nivo-slider.css" type="text/css" media="screen" />

    <link rel="stylesheet" href="{{ asset('adminlinks') }}/oldstyle/font/font.css">
    <link rel="stylesheet" href="{{ asset('adminlinks') }}/oldstyle/css/Doctor_Reservation.css">
    <link rel="stylesheet" href="{{ asset('adminlinks') }}/oldstyle/Responsive.css">

        <style>
        .dropdown:hover>.dropdown-menu{
           display: block;
       }
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
                    <h1 class="page-header">Make Apointment In Home</h1>
                    <h2>{{ Session::get('massage') }}</h2>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

 <!-- Slider Part ...............................-->

                   <div class="main_wrap section_bg">
                        <div class="wrap">
                            <section>
                               <div class="slider-wrapper theme-bar">
                                    <div id="slider" class="nivoSlider">
                                        <img src="{{ asset('adminlinks') }}/oldstyle/img/doctor_1.jpg" title="#afrin"/>
                                        <img src="{{ asset('adminlinks') }}/oldstyle/img/doctor_2.jpg" title="#karim"/>
                                        <img src="{{ asset('adminlinks') }}/oldstyle/img/doctor_3.jpg" title="#steve"/>
                                        <img src="{{ asset('adminlinks') }}/oldstyle/img/doctor_4.jpg" title="#hasan"/>
                                    </div>
                                    <div id="afrin" class="nivo-html-caption">
                                        <strong>Dr. Afrin</strong> <br>
                                        <strong>MBBS M.D. (MEDICINE)</strong> <br>
                                        <strong>Contact : 01########7</strong>
                                    </div>
                                    <div id="karim" class="nivo-html-caption">
                                        <strong>Dr. Karim</strong> <br>
                                        <strong>MBBS B.A.M.S., M.D.</strong> <br>
                                        <strong>Contact : 01........7</strong>
                                    </div>
                                    <div id="steve" class="nivo-html-caption">
                                        <strong>Dr. Steve</strong> <br>
                                        <strong>MBBS DVD, DNB(DERMATOLOGY), PGDMLS</strong> <br>
                                        <strong>Contact : 01--------7</strong>
                                   </div>
                                    <div id="hasan" class="nivo-html-caption">
                                        <strong>Dr. Hasan</strong> <br>
                                        <strong>MBBS M.D. (GENERAL MEDICINE), D.M. (NEPHROLOGY)</strong> <br>
                                        <strong>Contact : 01********7</strong>
                                    </div>
                                </div>
                            </section>
                        </div>
                    </div>


                <!-- Form Part...............................................  -->
                    {!! Form::open(['url'=>'/pathologies/inhome','method'=>'post']) !!}
                       
                        
                            <div class="appoinment_home left">
                                <div class="cata">
                            <span>Catagory : </span>
                            <select name="catagory" id="">
                                <option value="">Select Pathologiest Catagory</option>
                                <option value="blood_test">Blood Test</option>
                                <option value="pee_test">Pee Test</option>
                                <option value="urin_test">Urin Test</option>
                                <option value="dna_test">DNA Test<st/option>
                            </select><br>
                        </div>
                                <div class="appoinment_info">
                                    <span>Pathologys Name:</span><br>
                                    <select name="pathology_name" id="">
                                        <option selected>Select Pathologys Name</option>
                                        <option value="Rahim">Dr. Afrin</option>
                                        <option value="Karim">Dr. Karim</option>
                                        <option value="Steve">Dr. Steve</option>
                                        <option value="Hasan">Dr. Hasan</option>
                                    </select><br>

                                    <span>Time Slot : </span><br>
                                    <select name="time" id="">
                                        <option value="" selected>Select time for Treatment</option>
                                        <option value="07am - 08am">7am - 8am</option>
                                        <option value="12pm - 01pm">12pm - 1pm</option>
                                        <option value="8pm - 9pm">8pm - 9pm</option>
                                    </select><br>

                                    <span>Select Date : </span><br>
                                    <input type="date" name="date"><br>

                                    <span>Patient Name :</span> <br>
                                    <input type="text" name="patient_name"><br>

                                    <span>Age :</span> <br>
                                    <input type="text" name="age"><br>

                                    <span>Gender :</span> <br>
                                    <div class="gender">
                                        <input type="radio" name="gender" value="male" checked> Male<br>
  <input type="radio" name="gender" value="female"> Female<br>
  <input type="radio" name="gender" value="other"> Other
                                    </div> <br>

                                    <span>Street Address : </span><br>
                                    <input type="text" name="address" placeholder="Must be required"><br>

                                    <span>Patient Contact:</span> <br>
                                    <input type="text" name="number" placeholder="Must be required"><br>
                                    <div class="payment">
                            <span>Payment First : (at least 20%) </span><br>
                            <div class="payment">
                                <ul>
                                    <li><a href="#"><img src="{{ asset('adminlinks') }}/oldstyle/img/bkash.png" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('adminlinks') }}/oldstyle/img/DBBL.jpg" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('adminlinks') }}/oldstyle/img/Visa.png" alt=""></a></li>
                                    <li><a href="#"><img src="{{ asset('adminlinks') }}/oldstyle/img/master.png" alt=""></a></li>
                                </ul>
                            </div><br>
                            <input class="confirm_button" type="submit" value="Confirm">
                        </div>

                                </div>
                            </div>
                        </div>
                        
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

            
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!--old style js -->
    <script type="text/javascript" src="{{ asset('adminlinks') }}/oldstyle/js/jquery-1.9.0.min.js"></script>

    <script type="text/javascript" src="{{ asset('adminlinks') }}/oldstyle/js/jquery.nivo.slider.js"></script>
    <script type="text/javascript">
    $(window).load(function() {
        $('#slider').nivoSlider();
    });
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
