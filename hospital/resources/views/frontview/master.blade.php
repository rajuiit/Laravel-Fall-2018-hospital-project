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
    <title>@yield('title_area')</title>

    @yield('csslink_area')
    
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
    
      @include('frontview.include.slider')     
    
      @include('frontview.include.welcome')
    


      @include('frontview.include.gallery')
      
      @include('frontview.include.doctor')
    
      @include('frontview.include.contact')

      @include('frontview.include.footer')
    
      @yield('js_area')
    
  </body>
</html>