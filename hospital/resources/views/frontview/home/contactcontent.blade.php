<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Digital Smart Healthcare System - Responsive Template">
    <meta name="keywords" content="theme, best htm5 template, bootstrap, template, wordpress theme, best premium template, premium theme, best medical template, best medical theme, medical template, medical theme clinic template,clinic theme, best clinic theme, premium clinic theme">
    <meta name="author" content="Soft-Theme">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <title>Contact Us</title>

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
              <h2>contact us</h2>
              <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">contact us</a></li>
              </ul>
            </div><!-- /.banner_header -->
          </div><!-- /.col-md-12 -->
        </div><!-- /.row -->
      </div><!-- /.container -->
    </section><!-- /.banner-section -->

    
      @include('frontview.include.contact')

      @include('frontview.include.footer')
    
      @yield('js_area')
    
  </body>
</html>