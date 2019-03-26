<!DOCTYPE html>
<html lang="en">
   
<head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Askbootstrap">
      <meta name="author" content="Askbootstrap">

      <title>@yield('title')</title>
      
      <!-- Favicon Icon -->
      <link rel="icon" type="image/png" href="/img/udyog_logo.png">
      <!-- Bootstrap core CSS-->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
      <!-- Custom styles for this template-->
      <link href="/css/app.css" rel="stylesheet">
      <link href="/css/style.css" rel="stylesheet">
      <!-- Owl Carousel -->
      <link rel="stylesheet" href="/vendor/owl-carousel/owl.carousel.css">
      <link rel="stylesheet" href="/vendor/owl-carousel/owl.theme.css">
      @stack('topscript')
   </head>
   <body >
      <div class='thetop'></div>

      <!-- TOP NAV BAR -->
      
     @include('layout.nav')

      <!-- TOP NAV BAR END -->


       <div id="wrapper">
         <!-- Sidebar -->
         <ul class="sidebar navbar-nav">
            <li class="nav-item active">
               <a class="nav-link" href="video-page.html">
               <i class="fas fa-fw fa-home"></i>
               <span>Home</span>
               </a>
            </li>
            <li class="nav-item">

               <a class="nav-link dropdown-toggle" href="{{ route('alljob') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-list-alt"></i>
               <span>Job Portal</span>
               </a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('postjob') }}">Post a New Job</a>
                  <a class="dropdown-item" href="{{ route('alljob') }}">Latest Jobs</a>
                  <a class="dropdown-item" href="{{ route('searchjob') }}">Search a Job</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-list-alt"></i>
               <span>Industries</span>
               </a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="categories.html">Bhawana</a>
                  <a class="dropdown-item" href="categories.html">Narela</a>
                  <a class="dropdown-item" href="categories.html">Others</a>
               </div>
            </li>

            <li class="nav-item">
               <a class="nav-link" href="/livesearch">
               <i class="fas fa-fw fa-user-alt"></i>
               <span>Directory</span>
               </a>
            </li>
         </ul>

         <!-- SIDE NAV BAR SHOULD END HERE!!!! -->

         


         <div id="content-wrapper">
            <div class="container-fluid pb-0">
                  @yield('content')
               </div>
            </div>
            <!-- /.container-fluid -->
           
         </div>

            <!-- SIDE NAV BAR END -->


      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->
      {{-- <a class="scroll rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
      </a> --}}

      <div class='scrolltop'>
          <div class='scroll icon '><i class="fa fa-4x fa-angle-up rounded"></i></div>
      </div>
     

      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
      <script type="text/javascript" src="/js/app.js"></script>
      @stack('bottomscript')

   </body>

</html>