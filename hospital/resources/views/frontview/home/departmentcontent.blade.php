<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Digital Smart Healthcare System - Responsive Template">
    <meta name="keywords" content="theme, best htm5 template, bootstrap, template, wordpress theme, best premium template, premium theme, best medical template, best medical theme, medical template, medical theme clinic template,clinic theme, best clinic theme, premium clinic theme">
    <meta name="author" content="Soft-Theme">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Department</title>
    @include('frontview.home.link')
    
  </head>
  <body>
    <!-- =========================
            Header SECTION
    ========================= -->
    <header>
      @include('frontview.include.topmanu')

      @include('frontview.include.middlemanu')

      @include('frontview.include.mainmanu') 
    </header>

    <!-- =========================
            Banner SECTION
    ========================= -->
    <section class="banner-section" style="background: url('{{ asset('styles') }}/images/department_bg.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; height: 277px;">
      <div class="container">
      	<div class="row">
      		<div class="col-md-12">
      			<div class="banner_header">
      				<h2>department</h2>
      				<ul>
                <li><a href="#">home</a></li>
                <li><a href="#">department</a></li>
              </ul>
      			</div><!-- /.banner_header -->
      		</div><!-- /.col-md-12 -->
      	</div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.banner-section -->
    <!-- =========================
          Department SECTION
    ========================= -->
    <section class="deprartment_page_section sec_padding">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-9">
            <div class="doctor_collapse">
             <div class="panel-group" id="accordion" role="tablist"  aria-multiselectable="true">
                <div class="panel">
                   <div class="panel-heading active" role="tab" id="headingOne">
                      <h4 class="panel-title">
                         <a data-toggle="collapse" role="button" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                         <span class="panel_title_heading">surgery clinic</span>
                         </a>
                      </h4>
                   </div>
                   <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                      <div class="panel-body">
                       <div class="row">
                         <div class="col-md-12">
                            <ul  class="nav nav-pills nav-justified">
                              <li class="active"><a  href="#1a" data-toggle="tab">treatment</a></li>
                              <li><a href="#2a" data-toggle="tab">doctor list</a></li>
                              <li><a href="#3a" data-toggle="tab">investigation</a></li>
                              <li><a href="#4a" data-toggle="tab">timetable</a></li>
                            </ul>
                         </div><!-- /.col-md-12 -->
                       </div><!-- /.row -->

                        <div class="tab-content">
                          <!-- Tab Pane 1 -->
                          <div class="tab-pane  fade in active" id="1a">
                            <div class="test_list_section">
                              <ul>
                                <li>treatment name<span>$250</span></li>
                                <li>treatment name<span>$250</span></li>
                                <li>treatment name<span>$250</span></li>
                                <li>treatment name<span>$250</span></li>
                                <li>treatment name<span>$250</span></li>
                              </ul>
                              <a href="#" class="btn btn-default btn-more">all view</a>
                            </div><!-- /.test_list_section -->
                          </div><!-- /.tab-pane One -->

                          <!-- Tab Pane 2 -->
                          <div class="tab-pane fade" id="2a">
                            <div class="doctor_list">
                              <div class="row">
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-1.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="profile.html" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Williamson</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-2.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. kristiana</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                   <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-3.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Asako Ayami</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-4.jpg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Kualpreet Singh</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-1.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Kristiana</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-2.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Williamson</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                              </div><!-- /.row -->
                            </div><!-- /.doctor_list -->
                          </div><!-- /.tab-pane Two -->

                          <!-- Tab Pane 3 -->
                          <div class="tab-pane fade" id="3a">
                             <div class="test_list_section">
                                <ul>
                                  <li>investigation name<span>$250</span></li>
                                  <li>investigation name<span>$250</span></li>
                                  <li>investigation name<span>$250</span></li>
                                  <li>investigation name<span>$250</span></li>
                                  <li>investigation name<span>$250</span></li>
                                </ul>
                                <a href="#" class="btn btn-default btn-more">all view</a>
                            </div><!-- /.test_list_section -->
                          </div><!-- /.tab-pane Three -->

                          <!-- Tab Pane 4 -->
                          <div class="tab-pane fade" id="4a">
                            <div class="time_table table-responsive">
                              <table class="table table-condensed table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>time</th>
                                    <th>monday</th>
                                    <th>tuesday</th>
                                    <th>wednessday</th>
                                    <th>thusday</th>
                                    <th>friday</th>
                                    <th>saturday</th>
                                    <th>sunday</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td>09.00 - 10.00</td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. steven smith</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. steven elliot</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. adam jhon</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. marce hilton</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. williamson</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. asako ayami</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. kristiana</a></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>10.00 - 11.00 </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. steven smith</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. steven elliot</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. adam jhon</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. marce hilton</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. williamson</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. asako ayami</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. kristiana</a></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>15.00 - 16.00 </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. steven smith</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. steven elliot</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. adam jhon</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. marce hilton</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. williamson</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. asako ayami</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. kristiana</a></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>16.00 - 17.00 </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. steven smith</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. steven elliot</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. adam jhon</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. marce hilton</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. williamson</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. asako ayami</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>surgery clinic</h6>
                                      <span><a href="#">dr. kristiana</a></span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div><!-- /.time_table -->
                          </div><!-- /.tab-pane Four -->
                        </div><!-- Tab-Content -->
                      </div><!-- /.panel-body 1 -->
                   </div><!-- /.panel-collapse 1 -->
                </div><!-- /.panel/panel-default 1 -->

                <div class="panel">
                   <div class="panel-heading" role="tab" id="c">
                      <h4 class="panel-title">
                         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#m" aria-expanded="false" aria-controls="m">
                         <span class="panel_title_heading">medicine clinic</span>
                         </a>
                      </h4>
                   </div>
                   <div id="m" class="panel-collapse collapse" role="tabpanel" aria-labelledby="c">
                      <div class="panel-body">
                        <div class="row">
                         <div class="col-md-12">
                            <ul  class="nav nav-pills nav-justified">
                              <li class="active"><a  href="#5a" data-toggle="tab">treatment</a></li>
                              <li><a href="#6a" data-toggle="tab">doctor list</a></li>
                              <li><a href="#7a" data-toggle="tab">investigation</a></li>
                              <li><a href="#8a" data-toggle="tab">timetable</a></li>
                            </ul>
                         </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                         <div class="tab-content">
                          <!-- Tab Pane 1 -->
                          <div class="tab-pane  fade in active" id="5a">
                            <div class="test_list_section">
                              <ul>
                                <li>treatment name<span>$250</span></li>
                                <li>treatment name<span>$250</span></li>
                                <li>treatment name<span>$250</span></li>
                                <li>treatment name<span>$250</span></li>
                                <li>treatment name<span>$250</span></li>
                              </ul>
                              <a href="#" class="btn btn-default btn-more">all view</a>
                            </div><!-- /.test_list_section -->
                          </div><!-- /.tab-pane One -->

                          <!-- Tab Pane 2 -->
                          <div class="tab-pane fade" id="6a">
                            <div class="doctor_list">
                              <div class="row">
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-1.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Williamson</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-2.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. kristiana</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                   <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-3.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Asako Ayami</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-4.jpg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Kualpreet Singh</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-1.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Kristiana</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-2.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Williamson</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                              </div><!-- /.row -->
                            </div><!-- /.doctor_list -->
                          </div><!-- /.tab-pane Two -->

                          <!-- Tab Pane 3 -->
                          <div class="tab-pane fade" id="7a">
                             <div class="test_list_section">
                              <ul>
                                <li>investigation name<span>$250</span></li>
                                <li>investigation name<span>$250</span></li>
                                <li>investigation name<span>$250</span></li>
                                <li>investigation name<span>$250</span></li>
                                <li>investigation name<span>$250</span></li>
                              </ul>
                              <a href="#" class="btn btn-default btn-more">all view</a>
                            </div><!-- /.test_list_section -->
                          </div><!-- /.tab-pane Three -->

                          <!-- Tab Pane 4 -->
                          <div class="tab-pane fade" id="8a">
                             <div class="time_table table-responsive">
                              <table class="table table-condensed table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>time</th>
                                    <th>monday</th>
                                    <th>tuesday</th>
                                    <th>wednessday</th>
                                    <th>thusday</th>
                                    <th>friday</th>
                                    <th>saturday</th>
                                    <th>sunday</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td>09.00 - 10.00</td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. steven smith</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. steven elliot</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. adam jhon</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. marce hilton</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. williamson</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. asako ayami</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. kristiana</a></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>10.00 - 11.00 </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. steven smith</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. steven elliot</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. adam jhon</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. marce hilton</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. williamson</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. asako ayami</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. kristiana</a></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>15.00 - 16.00 </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. steven smith</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. steven elliot</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. adam jhon</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. marce hilton</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. williamson</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. asako ayami</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. kristiana</a></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>16.00 - 17.00 </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. steven smith</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. steven elliot</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. adam jhon</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. marce hilton</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. williamson</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. asako ayami</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>medicine clinic</h6>
                                      <span><a href="#">dr. kristiana</a></span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div><!-- /.time_table -->
                          </div><!-- /.tab-pane Four -->
                        </div><!-- /.tab-content -->
                      </div><!-- /.panel-body 2 -->
                   </div><!-- /.panel-collapse 2 -->
                </div><!-- /.panel/panel-default 2 -->
                <div class="panel">
                   <div class="panel-heading" role="tab" id="headingThree">
                      <h4 class="panel-title">
                         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                         <span class="panel_title_heading">physical medicine</span>
                         </a>
                      </h4>
                   </div>
                   <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                      <div class="panel-body">
                         <div class="row">
                           <div class="col-md-12">
                              <ul  class="nav nav-pills nav-justified">
                                <li class="active"><a  href="#9a" data-toggle="tab">treatment</a></li>
                                <li><a href="#10a" data-toggle="tab">doctor list</a></li>
                                <li><a href="#11a" data-toggle="tab">investigation</a></li>
                                <li><a href="#12a" data-toggle="tab">timetable</a></li>
                              </ul>
                           </div><!-- /.col-md-12 -->
                        </div><!-- /.row -->

                        <div class="tab-content">
                          <!-- Tab Pane 1 -->
                          <div class="tab-pane  fade in active" id="9a">
                            <div class="test_list_section">
                              <ul>
                                <li>treatment name<span>$250</span></li>
                                <li>treatment name<span>$250</span></li>
                                <li>treatment name<span>$250</span></li>
                                <li>treatment name<span>$250</span></li>
                                <li>treatment name<span>$250</span></li>
                              </ul>
                              <a href="#" class="btn btn-default btn-more">all view</a>
                            </div><!-- /.test_list_section -->
                          </div><!-- /.tab-pane One -->

                          <!-- Tab Pane 2 -->
                          <div class="tab-pane fade" id="10a">
                            <div class="doctor_list">
                              <div class="row">
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-1.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Williamson</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-2.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. kristiana</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                   <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-3.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Asako Ayami</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-4.jpg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Kualpreet Singh</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-1.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Kristiana</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                                  <div class="col-md-4 col-sm-6">
                                    <div class="doctor_box">
                                        <img src="images/doctor-2.jpeg" alt="img">
                                        <div class="profile_view">
                                           <a href="#" class="btn-default btn-prf">View profile</a>
                                        </div>
                                        <div class="doctor_content">
                                            <h3>Dr. Williamson</h3>
                                        </div><!-- /.doctor_conten t -->
                                    </div><!-- /.doctor_box -->
                                  </div><!-- /.col-md-4 -->
                              </div><!-- /.row -->
                            </div><!-- /.doctor_list -->
                          </div><!-- /.tab-pane Two -->

                          <!-- Tab Pane 3 -->
                          <div class="tab-pane fade" id="11a">
                             <div class="test_list_section">
                              <ul>
                                <li>investigation name<span>$250</span></li>
                                <li>investigation name<span>$250</span></li>
                                <li>investigation name<span>$250</span></li>
                                <li>investigation name<span>$250</span></li>
                                <li>investigation name<span>$250</span></li>
                              </ul>
                              <a href="#" class="btn btn-default btn-more">all view</a>
                            </div><!-- /.test_list_section -->
                          </div><!-- /.tab-pane Three -->

                          <!-- Tab Pane 4 -->
                          <div class="tab-pane fade" id="12a">
                             <div class="time_table table-responsive">
                              <table class="table table-condensed table-striped table-bordered">
                                <thead>
                                  <tr>
                                    <th>time</th>
                                    <th>monday</th>
                                    <th>tuesday</th>
                                    <th>wednessday</th>
                                    <th>thusday</th>
                                    <th>friday</th>
                                    <th>saturday</th>
                                    <th>sunday</th>
                                  </tr>
                                </thead>

                                <tbody>
                                  <tr>
                                    <td>09.00 - 10.00</td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. steven smith</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. steven elliot</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. adam jhon</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. marce hilton</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. williamson</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. asako ayami</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. kristiana</a></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>10.00 - 11.00 </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. steven smith</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. steven elliot</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. adam jhon</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. marce hilton</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. williamson</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. asako ayami</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. kristiana</a></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>15.00 - 16.00 </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. steven smith</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. steven elliot</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. adam jhon</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. marce hilton</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. williamson</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. asako ayami</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. kristiana</a></span>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>16.00 - 17.00 </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. steven smith</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. steven elliot</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. adam jhon</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. marce hilton</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. williamson</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. asako ayami</a></span>
                                    </td>
                                    <td class="events">
                                      <h6>physical clinic</h6>
                                      <span><a href="#">dr. kristiana</a></span>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div><!-- /.time_table -->
                          </div><!-- /.tab-pane Four -->
                        </div><!-- /.tab-content -->
                      </div><!-- /.panel-body 3 -->
                   </div><!-- /.panel-collapse 3 -->
                </div><!-- /.panel/panel-default 3 -->
                <div class="panel">
                   <div class="panel-heading" role="tab" id="headingFour">
                      <h4 class="panel-title">
                         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                         <span class="panel_title_heading">pshycreatry clinic</span>
                         </a>
                      </h4>
                   </div>
                   <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                  <div class="panel-body">
                    <div class="row">
                       <div class="col-md-12">
                          <ul  class="nav nav-pills nav-justified">
                            <li class="active"><a  href="#13a" data-toggle="tab">treatment</a></li>
                            <li><a href="#14a" data-toggle="tab">doctor list</a></li>
                            <li><a href="#15a" data-toggle="tab">investigation</a></li>
                            <li><a href="#16a" data-toggle="tab">timetable</a></li>
                          </ul>
                       </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <div class="tab-content">
                      <!-- Tab Pane 1 -->
                      <div class="tab-pane  fade in active" id="13a">
                        <div class="test_list_section">
                          <ul>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                          </ul>
                          <a href="#" class="btn btn-default btn-more">all view</a>
                        </div><!-- /.test_list_section -->
                      </div><!-- /.tab-pane One -->

                      <!-- Tab Pane 2 -->
                      <div class="tab-pane fade" id="14a">
                         <div class="doctor_list">
                            <div class="row">
                              <div class="col-md-4 col-sm-6">
                                <div class="doctor_box">
                                    <img src="images/doctor-1.jpeg" alt="img">
                                    <div class="profile_view">
                                       <a href="#" class="btn-default btn-prf">View profile</a>
                                    </div>
                                    <div class="doctor_content">
                                        <h3>Dr. Williamson</h3>
                                    </div><!-- /.doctor_conten t -->
                                </div><!-- /.doctor_box -->
                              </div><!-- /.col-md-4 -->
                              <div class="col-md-4 col-sm-6">
                                <div class="doctor_box">
                                    <img src="images/doctor-2.jpeg" alt="img">
                                    <div class="profile_view">
                                       <a href="#" class="btn-default btn-prf">View profile</a>
                                    </div>
                                    <div class="doctor_content">
                                        <h3>Dr. kristiana</h3>
                                    </div><!-- /.doctor_conten t -->
                                </div><!-- /.doctor_box -->
                              </div><!-- /.col-md-4 -->
                               <div class="col-md-4 col-sm-6">
                                <div class="doctor_box">
                                    <img src="images/doctor-3.jpeg" alt="img">
                                    <div class="profile_view">
                                       <a href="#" class="btn-default btn-prf">View profile</a>
                                    </div>
                                    <div class="doctor_content">
                                        <h3>Dr. Asako Ayami</h3>
                                    </div><!-- /.doctor_conten t -->
                                </div><!-- /.doctor_box -->
                              </div><!-- /.col-md-4 -->
                              <div class="col-md-4 col-sm-6">
                                <div class="doctor_box">
                                    <img src="images/doctor-4.jpg" alt="img">
                                    <div class="profile_view">
                                       <a href="#" class="btn-default btn-prf">View profile</a>
                                    </div>
                                    <div class="doctor_content">
                                        <h3>Dr. Kualpreet Singh</h3>
                                    </div><!-- /.doctor_conten t -->
                                </div><!-- /.doctor_box -->
                              </div><!-- /.col-md-4 -->
                              <div class="col-md-4 col-sm-6">
                                <div class="doctor_box">
                                    <img src="images/doctor-1.jpeg" alt="img">
                                    <div class="profile_view">
                                       <a href="#" class="btn-default btn-prf">View profile</a>
                                    </div>
                                    <div class="doctor_content">
                                        <h3>Dr. Kristiana</h3>
                                    </div><!-- /.doctor_conten t -->
                                </div><!-- /.doctor_box -->
                              </div><!-- /.col-md-4 -->
                              <div class="col-md-4 col-sm-6">
                                <div class="doctor_box">
                                    <img src="images/doctor-2.jpeg" alt="img">
                                    <div class="profile_view">
                                       <a href="#" class="btn-default btn-prf">View profile</a>
                                    </div>
                                    <div class="doctor_content">
                                        <h3>Dr. Williamson</h3>
                                    </div><!-- /.doctor_conten t -->
                                </div><!-- /.doctor_box -->
                              </div><!-- /.col-md-4 -->
                          </div><!-- /.row -->
                        </div><!-- /.doctor_list -->
                      </div><!-- /.tab-pane Two -->

                      <!-- Tab Pane 3 -->
                      <div class="tab-pane fade" id="15a">
                        <div class="test_list_section">
                          <ul>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                          </ul>
                          <a href="#" class="btn btn-default btn-more">all view</a>
                        </div><!-- /.test_list_section -->
                      </div><!-- /.tab-pane Three -->

                      <!-- Tab Pane 4 -->
                      <div class="tab-pane fade" id="16a">
                        <div class="time_table table-responsive">
                          <table class="table table-condensed table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>time</th>
                                <th>monday</th>
                                <th>tuesday</th>
                                <th>wednessday</th>
                                <th>thusday</th>
                                <th>friday</th>
                                <th>saturday</th>
                                <th>sunday</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>09.00 - 10.00</td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>10.00 - 11.00 </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>15.00 - 16.00 </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>16.00 - 17.00 </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>pshycreatry clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div><!-- /.time_table -->
                      </div><!-- /.tab-pane Four -->
                    </div><!-- /.tab-content -->
                  </div><!-- /.panel-body 4 -->
                 </div><!-- /.panel-collapse 4 -->
                </div><!-- /.panel/panel-default 4 -->
                <div class="panel">
                   <div class="panel-heading" role="tab" id="headingFive">
                      <h4 class="panel-title">
                         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                         <span class="panel_title_heading">urology clinic</span>
                         </a>
                      </h4>
                   </div>
                   <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                  <div class="panel-body">
                    <div class="row">
                     <div class="col-md-12">
                        <ul  class="nav nav-pills nav-justified">
                          <li class="active"><a  href="#17a" data-toggle="tab">treatment</a></li>
                          <li><a href="#18a" data-toggle="tab">doctor list</a></li>
                          <li><a href="#19a" data-toggle="tab">investigation</a></li>
                          <li><a href="#20a" data-toggle="tab">timetable</a></li>
                        </ul>
                     </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <div class="tab-content">
                      <!-- Tab Pane 1 -->
                      <div class="tab-pane  fade in active" id="17a">
                        <div class="test_list_section">
                          <ul>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                          </ul>
                          <a href="#" class="btn btn-default btn-more">all view</a>
                        </div><!-- /.test_list_section -->
                      </div><!-- /.tab-pane One -->

                      <!-- Tab Pane 2 -->
                      <div class="tab-pane fade" id="18a">
                        <div class="doctor_list">
                          <div class="row">
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-1.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Williamson</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-2.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. kristiana</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                             <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-3.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Asako Ayami</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-4.jpg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Kualpreet Singh</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-1.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Kristiana</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-2.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Williamson</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                          </div><!-- /.row -->
                        </div><!-- /.doctor_list -->
                      </div><!-- /.tab-pane Two -->

                      <!-- Tab Pane 3 -->
                      <div class="tab-pane fade" id="19a">
                        <div class="test_list_section">
                          <ul>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                          </ul>
                          <a href="#" class="btn btn-default btn-more">all view</a>
                        </div><!-- /.test_list_section -->
                      </div><!-- /.tab-pane Three -->

                      <!-- Tab Pane 4 -->
                      <div class="tab-pane fade" id="20a">
                        <div class="time_table table-responsive">
                          <table class="table table-condensed table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>time</th>
                                <th>monday</th>
                                <th>tuesday</th>
                                <th>wednessday</th>
                                <th>thusday</th>
                                <th>friday</th>
                                <th>saturday</th>
                                <th>sunday</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>09.00 - 10.00</td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>10.00 - 11.00 </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>15.00 - 16.00 </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>16.00 - 17.00 </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>urology clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div><!-- /.time_table -->
                      </div><!-- /.tab-pane Four -->
                    </div><!-- /.tab-content -->
                  </div><!-- /.panel-body 5 -->
                 </div><!-- /.panel-collapse 5 -->
                </div><!-- /.panel/panel-default 5 -->
                <div class="panel">
                   <div class="panel-heading" role="tab" id="headingSix">
                      <h4 class="panel-title">
                         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                         <span class="panel_title_heading">cardiology clinic</span>
                         </a>
                      </h4>
                   </div>
                   <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                  <div class="panel-body">
                    <div class="row">
                     <div class="col-md-12">
                        <ul  class="nav nav-pills nav-justified">
                          <li class="active"><a  href="#21a" data-toggle="tab">treatment</a></li>
                          <li><a href="#22a" data-toggle="tab">doctor list</a></li>
                          <li><a href="#23a" data-toggle="tab">investigation</a></li>
                          <li><a href="#24a" data-toggle="tab">timetable</a></li>
                        </ul>
                     </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <div class="tab-content">
                      <!-- Tab Pane 1 -->
                      <div class="tab-pane  fade in active" id="21a">
                        <div class="test_list_section">
                          <ul>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                          </ul>
                          <a href="#" class="btn btn-default btn-more">all view</a>
                        </div><!-- /.test_list_section -->
                      </div><!-- /.tab-pane One -->

                      <!-- Tab Pane 2 -->
                      <div class="tab-pane fade" id="22a">
                       <div class="doctor_list">
                        <div class="row">
                          <div class="col-md-4 col-sm-6">
                            <div class="doctor_box">
                                <img src="images/doctor-1.jpeg" alt="img">
                                <div class="profile_view">
                                   <a href="#" class="btn-default btn-prf">View profile</a>
                                </div>
                                <div class="doctor_content">
                                    <h3>Dr. Williamson</h3>
                                </div><!-- /.doctor_conten t -->
                            </div><!-- /.doctor_box -->
                          </div><!-- /.col-md-4 -->
                          <div class="col-md-4 col-sm-6">
                            <div class="doctor_box">
                                <img src="images/doctor-2.jpeg" alt="img">
                                <div class="profile_view">
                                   <a href="#" class="btn-default btn-prf">View profile</a>
                                </div>
                                <div class="doctor_content">
                                    <h3>Dr. kristiana</h3>
                                </div><!-- /.doctor_conten t -->
                            </div><!-- /.doctor_box -->
                          </div><!-- /.col-md-4 -->
                           <div class="col-md-4 col-sm-6">
                            <div class="doctor_box">
                                <img src="images/doctor-3.jpeg" alt="img">
                                <div class="profile_view">
                                   <a href="#" class="btn-default btn-prf">View profile</a>
                                </div>
                                <div class="doctor_content">
                                    <h3>Dr. Asako Ayami</h3>
                                </div><!-- /.doctor_conten t -->
                            </div><!-- /.doctor_box -->
                          </div><!-- /.col-md-4 -->
                          <div class="col-md-4 col-sm-6">
                            <div class="doctor_box">
                                <img src="images/doctor-4.jpg" alt="img">
                                <div class="profile_view">
                                   <a href="#" class="btn-default btn-prf">View profile</a>
                                </div>
                                <div class="doctor_content">
                                    <h3>Dr. Kualpreet Singh</h3>
                                </div><!-- /.doctor_conten t -->
                            </div><!-- /.doctor_box -->
                          </div><!-- /.col-md-4 -->
                          <div class="col-md-4 col-sm-6">
                            <div class="doctor_box">
                                <img src="images/doctor-1.jpeg" alt="img">
                                <div class="profile_view">
                                   <a href="#" class="btn-default btn-prf">View profile</a>
                                </div>
                                <div class="doctor_content">
                                    <h3>Dr. Kristiana</h3>
                                </div><!-- /.doctor_conten t -->
                            </div><!-- /.doctor_box -->
                          </div><!-- /.col-md-4 -->
                          <div class="col-md-4 col-sm-6">
                            <div class="doctor_box">
                                <img src="images/doctor-2.jpeg" alt="img">
                                <div class="profile_view">
                                   <a href="#" class="btn-default btn-prf">View profile</a>
                                </div>
                                <div class="doctor_content">
                                    <h3>Dr. Williamson</h3>
                                </div><!-- /.doctor_conten t -->
                            </div><!-- /.doctor_box -->
                          </div><!-- /.col-md-4 -->
                        </div><!-- /.row -->
                      </div><!-- /.doctor_list -->
                      </div><!-- /.tab-pane Two -->

                      <!-- Tab Pane 3 -->
                      <div class="tab-pane fade" id="23a">
                       <div class="test_list_section">
                          <ul>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                          </ul>
                          <a href="#" class="btn btn-default btn-more">all view</a>
                        </div><!-- /.test_list_section -->
                      </div><!-- /.tab-pane Three -->

                      <!-- Tab Pane 4 -->
                      <div class="tab-pane fade" id="24a">
                       <div class="time_table table-responsive">
                          <table class="table table-condensed table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>time</th>
                                <th>monday</th>
                                <th>tuesday</th>
                                <th>wednessday</th>
                                <th>thusday</th>
                                <th>friday</th>
                                <th>saturday</th>
                                <th>sunday</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>09.00 - 10.00</td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>10.00 - 11.00 </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>15.00 - 16.00 </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>16.00 - 17.00 </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>cardiology clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div><!-- /.time_table -->
                      </div><!-- /.tab-pane Four -->
                    </div><!-- /.tab-content -->
                  </div><!-- /.panel-body 6 -->
                 </div><!-- /.panel-collapse 6 -->
                </div><!-- /.panel/panel-default 6 -->
                <div class="panel">
                   <div class="panel-heading" role="tab" id="headingSeven">
                      <h4 class="panel-title">
                         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                         <span class="panel_title_heading">neprology clinic</span>
                         </a>
                      </h4>
                   </div>
                   <div id="collapseSeven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSeven">
                  <div class="panel-body">
                    <div class="row">
                     <div class="col-md-12">
                        <ul  class="nav nav-pills nav-justified">
                          <li class="active"><a  href="#25a" data-toggle="tab">treatment</a></li>
                          <li><a href="#26a" data-toggle="tab">doctor list</a></li>
                          <li><a href="#27a" data-toggle="tab">investigation</a></li>
                          <li><a href="#28a" data-toggle="tab">timetable</a></li>
                        </ul>
                     </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <div class="tab-content">
                      <!-- Tab Pane 1 -->
                      <div class="tab-pane  fade in active" id="25a">
                        <div class="test_list_section">
                          <ul>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                          </ul>
                          <a href="#" class="btn btn-default btn-more">all view</a>
                        </div><!-- /.test_list_section -->
                      </div><!-- /.tab-pane One -->

                      <!-- Tab Pane 2 -->
                      <div class="tab-pane fade" id="26a">
                        <div class="doctor_list">
                          <div class="row">
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-1.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Williamson</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-2.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. kristiana</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                             <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-3.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Asako Ayami</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-4.jpg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Kualpreet Singh</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-1.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Kristiana</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-2.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Williamson</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                          </div><!-- /.row -->
                        </div><!-- /.doctor_list -->
                      </div><!-- /.tab-pane Two -->

                      <!-- Tab Pane 3 -->
                      <div class="tab-pane fade" id="27a">
                        <div class="test_list_section">
                          <ul>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                          </ul>
                          <a href="#" class="btn btn-default btn-more">all view</a>
                        </div><!-- /.test_list_section -->
                      </div><!-- /.tab-pane Three -->

                      <!-- Tab Pane 4 -->
                      <div class="tab-pane fade" id="28a">
                       <div class="time_table table-responsive">
                          <table class="table table-condensed table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>time</th>
                                <th>monday</th>
                                <th>tuesday</th>
                                <th>wednessday</th>
                                <th>thusday</th>
                                <th>friday</th>
                                <th>saturday</th>
                                <th>sunday</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>09.00 - 10.00</td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>10.00 - 11.00 </td>
                                <td class="events">
                                  <h6>surgery clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>15.00 - 16.00 </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>16.00 - 17.00 </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>surgery clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>neprology clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div><!-- /.time_table -->
                      </div><!-- /.tab-pane Four -->
                    </div><!-- /.tab-content -->
                  </div><!-- /.panel-body 7 -->
                 </div><!-- /.panel-collapse 7 -->
                </div><!-- /.panel/panel-default 7 -->
                <div class="panel">
                   <div class="panel-heading" role="tab" id="headingEight">
                      <h4 class="panel-title">
                         <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                         <span class="panel_title_heading">orthopedics clinic</span>
                         </a>
                      </h4>
                   </div>
                   <div id="collapseEight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingEight">
                  <div class="panel-body">
                   <div class="row">
                     <div class="col-md-12">
                        <ul  class="nav nav-pills nav-justified">
                          <li class="active"><a  href="#29a" data-toggle="tab">treatment</a></li>
                          <li><a href="#30a" data-toggle="tab">doctor list</a></li>
                          <li><a href="#31a" data-toggle="tab">investigation</a></li>
                          <li><a href="#32a" data-toggle="tab">timetable</a></li>
                        </ul>
                     </div><!-- /.col-md-12 -->
                    </div><!-- /.row -->

                    <div class="tab-content">
                      <!-- Tab Pane 1 -->
                      <div class="tab-pane  fade in active" id="29a">
                        <div class="test_list_section">
                          <ul>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                            <li>treatment name<span>$250</span></li>
                          </ul>
                          <a href="#" class="btn btn-default btn-more">all view</a>
                        </div><!-- /.test_list_section -->
                      </div><!-- /.tab-pane One -->

                      <!-- Tab Pane 2 -->
                      <div class="tab-pane fade" id="30a">
                        <div class="doctor_list">
                          <div class="row">
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-1.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Williamson</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-2.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. kristiana</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                             <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-3.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Asako Ayami</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-4.jpg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Kualpreet Singh</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-1.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Kristiana</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                            <div class="col-md-4 col-sm-6">
                              <div class="doctor_box">
                                  <img src="images/doctor-2.jpeg" alt="img">
                                  <div class="profile_view">
                                     <a href="#" class="btn-default btn-prf">View profile</a>
                                  </div>
                                  <div class="doctor_content">
                                      <h3>Dr. Williamson</h3>
                                  </div><!-- /.doctor_conten t -->
                              </div><!-- /.doctor_box -->
                            </div><!-- /.col-md-4 -->
                          </div><!-- /.row -->
                        </div><!-- /.doctor_list -->
                      </div><!-- /.tab-pane Two -->

                      <!-- Tab Pane 3 -->
                      <div class="tab-pane fade" id="31a">
                        <div class="test_list_section">
                          <ul>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                            <li>investigation name<span>$250</span></li>
                          </ul>
                          <a href="#" class="btn btn-default btn-more">all view</a>
                        </div><!-- /.test_list_section -->
                      </div><!-- /.tab-pane Three -->

                      <!-- Tab Pane 4 -->
                      <div class="tab-pane fade" id="32a">
                        <div class="time_table table-responsive">
                          <table class="table table-condensed table-striped table-bordered">
                            <thead>
                              <tr>
                                <th>time</th>
                                <th>monday</th>
                                <th>tuesday</th>
                                <th>wednessday</th>
                                <th>thusday</th>
                                <th>friday</th>
                                <th>saturday</th>
                                <th>sunday</th>
                              </tr>
                            </thead>

                            <tbody>
                              <tr>
                                <td>09.00 - 10.00</td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>10.00 - 11.00 </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>15.00 - 16.00 </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                              <tr>
                                <td>16.00 - 17.00 </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. steven smith</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. steven elliot</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. adam jhon</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. marce hilton</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. williamson</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. asako ayami</a></span>
                                </td>
                                <td class="events">
                                  <h6>orthopedics clinic</h6>
                                  <span><a href="#">dr. kristiana</a></span>
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div><!-- /.time_table -->
                      </div><!-- /.tab-pane Four -->
                    </div><!-- /.tab-content -->
                  </div><!-- /.panel-body 8 -->
                 </div><!-- /.panel-collapse 8 -->
                </div><!-- /.panel/panel-default 8 -->
             </div><!-- /.panel-group -->
            </div><!-- /.doctor_collapse -->
    			</div><!-- /.col-md-7 -->
    			<div class="col-md-3">
    				<div class="department_sidebar">
              <div class="opening_section">
                <div class="opening_header">
                  <h6>opening hours</h6>
                </div><!-- /.opening_header -->
                <ul>
                  <li>monday <span>08 - 15.00</span></li>
                  <li>tuesday <span>08 - 15.00</span></li>
                  <li>wednesday <span>08 - 15.00</span></li>
                  <li>thusday <span>08 - 15.00</span></li>
                  <li>friday <span>closed</span></li>
                  <li>saturday <span>08 - 15.00</span></li>
                  <li>sunday <span>08 - 15.00</span></li>
                </ul>
              </div><!-- /.opening_section -->  

              <div class="sidebar_timetble" style="background: url('images/time_bg.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat;">
                <h6>doctors timetable</h6>
                <p>Almost before we knew it we had left the ground.The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.All their equipment and instruments are alive.It watched the storm, so beautiful yet terrific.</p>
                <a href="#" class="btn btn-default btn-time">learn more</a>
              </div><!-- /.sidebar_timetable -->  
            </div><!-- /.department_sidebar -->
    			</div><!-- /.col-md-4 -->
    		</div><!-- /.row -->
    	</div><!-- /.container -->
    </section><!-- /.blog_section -->



    
      @include('frontview.include.contact')

      @include('frontview.include.footer')
    
      @yield('js_area')
    
  </body>
</html>