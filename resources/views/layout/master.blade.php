<!DOCTYPE html>
<html lang="en">

<head>


      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">
     <meta name="csrf-token" content="{{ csrf_token() }}">
      <title>@yield('title')</title>

      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="{{asset('/img/udyog_logo.png')}}">

      <link href="public/css/search.css" rel="stylesheet">
      <link href="public/sidebar/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

      <!-- Custom styles for this template -->
      <link href="public/sidebar/css/simple-sidebar.css" rel="stylesheet">
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
           @stack('topscript')


      <script type="text/javascript">
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages: 'hi',
            autoDisplay: false}, 'google_translate_element');
      }
      </script>

      <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
   </head>
   <body >
      <div class='thetop'></div>

      <!-- TOP NAV BAR -->

     @include('layout.nav')

         <div id="content-wrapper">
            <div class="container-fluid pb-0" id="manish-test">
               @yield('content')
               @include('partials.content-divider')
            </div>
         </div>
         <!-- /.container-fluid -->
                 @include('layout.footer')


         <!-- /.container-fluid -->
      </div>
         <!-- SIDE NAV BAR END -->


         <!-- /#wrapper -->

         <!-- Scroll to Top Button-->

      <div class='scrolltop'>
          <div class='scroll icon '><i class="fas fa-chevron-up" style="font-size:20px;color:white"></i>
      </div>

      <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
      @stack('bottomscript')

   </body>
  <!-- Bootstrap core JavaScript -->
  <script src="public/sidebar/vendor/jquery/jquery.min.js"></script>
  <script src="public/sidebar/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Menu Toggle Script -->


  <!-- <div class='scrolltop'>
      <div class='scroll icon '><i class="fa fa-4x fa-angle-up rounded"></i></div>
   </div>
   <script type="text/javascript" src="/js/app.js"></script>
   ody>-->
</html>
