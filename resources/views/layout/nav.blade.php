<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">

         <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button> &nbsp;&nbsp;
         <a class="navbar-brand mr-1" href="/"><img class="img-fluid" alt="Udyog TV" src="{{asset('/img/udyog_logo.png')}}" width="90px"></a>
         <!-- Navbar Search -->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search" align="left">

               <div class="input-group-append">
                  <button class="btn btn-light" type="button">
                  <i class="fas fa-search"></i> 
                  </button>

               </div>

            </div>
            
        </div>
<div id="google_translate_element"></div>

<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en'}, 'google_translate_element');
}
</script>

<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

    </form>

    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <button  class="login_btn "><a class="text-dark" href="{{ route('login') }}">Login</a></button>
        @if (Route::has('register'))
        <button  class="reg_btn "><a class="text-dark" href="{{ route('register') }}">Register</a></button>
        @endif
        @endauth
    </div>
    @endif     

</nav>