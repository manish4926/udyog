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
      <!-- Bootstrap core CSS-->
      <!-- Custom styles for this template-->
      <link href="/css/app.css" rel="stylesheet">
           @stack('topscript')

      <!-- Owl Carousel -->
      {{-- <link rel="stylesheet" href="/vendor/owl-carousel/owl.carousel.css"> --}}
      {{-- <link rel="stylesheet" href="/vendor/owl-carousel/owl.theme.css"> --}}
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
               <a class="nav-link" href="/">

               <i class="fas fa-fw fa-home"></i>
               <span>Home</span>
               </a>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-briefcase"></i>
                <span>Job Portal</span></a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('postjob') }}">Post a New Job</a>
                  <a class="dropdown-item" href="{{ route('alljob') }}">Latest Jobs</a>
                  <a class="dropdown-item" href="{{ route('searchjob') }}">Search a Job</a>
                  <a class="dropdown-item" href="{{ route('application') }}">Application Form</a>
               </div>
            </li>
            <div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-industry"></i>
                  <span>Industries</span>
               </a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="categories.html">Bhawana</a>
                  <a class="dropdown-item" href="categories.html">Narela</a>
                  <a class="dropdown-item" href="categories.html">Others</a>
               </div>
            </li>


            <li class="nav-item">
               <a class="nav-link" href="{{route('IndustryList')}}"><i class="fas fa-fw fa-book"></i>
                  <span>Directory</span>
               </a>
            </li>
         
         <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-fw fa-shopping-cart"></i>
                  <span>Product</span>
               </a>
         </li>
         <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-fw fa-newspaper"></i>
                  <span> Current affairs</span>
              </a>
         </li>
         <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-fw fa-user"></i>
                  <span>Training's</span>
               </a>
         </li>
         <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-fw fa-exclamation"></i>
                  <span>Current Law Affecting Industry </span>
               </a>
         </li>
         <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-fw fa-globe-americas"></i>
                  <span>Enviroment</span>
               </a>
         </li>
         <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-fw fa-exclamation"></i>
                  <span>Labour Laws</span>
               </a>
         </li>
         <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-fw fa-exclamation"></i>
                  <span>Taxestion's</span>
               </a>
                </li>
               <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-fw fa-user"></i>
                  <span>Personality Development</span>
               </a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-fw fa-laptop"></i>
                  <span>New Technology</span>
               </a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-fw fa-shopping-cart"></i>
                  <span>New Products</span>
               </a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-fw fa-heartbeat"></i>
                  <span>Health</span>
               </a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-fw fa-chart-line"></i>
                  <span>How to grow business</span>
               </a>
               </li>
               <li class="nav-item">
               <a class="nav-link" href="#"><i class="fas fa-fw fa-wpforms"></i>
                  <span>Registerations & Arade Marks</span>
               </a></li>
               </ul>

         <!-- SIDE NAV BAR SHOULD END HERE!!!! -->

         <div id="content-wrapper">
            <div class="container-fluid pb-0">
                  @yield('content')
                  @include('partials.content-divider')
               </div>
            </div>
            <!-- /.container-fluid -->
           
            <!-- /.container-fluid -->  
         </div>

            <!-- SIDE NAV BAR END -->


      <!-- /#wrapper -->
      <!-- Scroll to Top Button-->

   </body>

      <div class='scrolltop'>
          <div class='scroll icon '><i class="fa fa-4x fa-angle-up rounded"></i></div>
      </div>
      <script type="text/javascript" src="/js/app.js"></script>
      @stack('bottomscript')
   </body>
</html>