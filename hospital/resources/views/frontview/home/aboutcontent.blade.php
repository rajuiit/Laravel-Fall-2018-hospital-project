<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Digital Smart Healthcare System - Responsive Template">
    <meta name="keywords" content="theme, best htm5 template, bootstrap, template, wordpress theme, best premium template, premium theme, best medical template, best medical theme, medical template, medical theme clinic template,clinic theme, best clinic theme, premium clinic theme">
    <meta name="author" content="Soft-Theme">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>About</title>
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
    <section class="banner-section" style="background: url('{{ asset('styles') }}/images/department_bg.jpg'); background-position: center center; background-size: cover; background-repeat: no-repeat; height: 277px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="banner_header">
              <h2>about us</h2>
              <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">about us</a></li>
              </ul>
            </div><!-- /.banner_header -->
          </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.banner-section -->
    <!-- =========================
        About Page SECTION
    ========================= -->
    <section class="about_page_section">
      <div class="container">
        <div class="row">
          <div class="col-md-7">
            <div class="about_left_side">
              <div class="about_header">
                <h2>welcome to our medisoft</h2>
              </div><!-- /.about_header -->
              <div class="about_content">
                <p>Almost before we knew it we had left the ground.The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.All their equipment and instruments are alive.It watched the storm, so beautiful yet terrific.Almost before we knew it we had left the ground.The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.All their equipment and instruments are alive.It watched the storm, so beautiful yet terrific.Almost before we knew it we had left the ground.The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.All their equipment and instruments are alive.It watched the storm, so beautiful yet terrific.Almost before we knew it we had left the ground.The face of the moon was in shadow.The spectacle before us was indeed sublime.All their equipment and instruments are alive.All their equipment and instruments are alive.It watched the storm, so beautiful yet terrific.</p>
                <ul>
                  <li>lorem ipsum dolor sit amet</li>
                  <li>lorem ipsum dolor sit amet</li>
                  <li>lorem ipsum dolor sit amet</li>
                  <li>lorem ipsum dolor sit amet</li>
                  <li>lorem ipsum dolor sit amet</li>
                  <li>lorem ipsum dolor sit amet</li>
                </ul>
              </div><!-- /.about_content -->
            </div><!-- /.about_left_side -->
          </div><!-- /.col-md-6 -->
          <div class="col-md-5">
            <div class="about_right_side">
              <div class="about_thumbnail">
                <img src="{{ asset('styles')}}/images/about_doctor.png" alt="img">
              
              </div><!-- /.about_thumbnail -->
            </div><!-- /.about_right_side -->
          </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.about_page_section -->
     
      @include('frontview.include.doctor')

       <!-- =========================
          Call Us SECTION
    ========================= -->
    <section class="call_us_section sec_padding">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6">
            <div class="call_left_side">
              <div class="call_header text-center">
                <h3>openning hours</h3>
              </div><!-- /.call_header -->
              <div class="call_content text-center">
                <ul>
                  <li>mon - fri: 08.00 - 18.00</li>
                  <li>mon - sat: 08.00 - 18.00</li>
                  <li>mon - sun: 08.00 - 18.00</li>
                </ul>
              </div><!-- /.call_content -->
            </div><!-- /.call_left_side -->
          </div><!-- /.col-md-6 -->
          <div class="col-md-6 col-sm-6">
            <div class="call_right_side">
              <div class="call_header text-center">
                <h3>emergency call</h3>
              </div><!-- /.call_header -->
              <div class="call_content text-center">
                <span><i class="icofont icofont-ui-call"></i>+123456789</span>
                <p>lorem ipsumdolor sit amet</p>
              </div><!-- /.call_content -->
            </div><!-- /.call_right_side -->
          </div><!-- /.col-md-6 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.call_us_section -->



    
      @include('frontview.include.contact')

      @include('frontview.include.footer')
    
      @yield('js_area')
    
  </body>
</html>