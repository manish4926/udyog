<div class="sticky-header">

  <div class="google-language-box">
  <div id="google_translate_element"></div>

    <div class="clearfix"></div>
</div>
<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav">


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

</div>
<<<<<<< HEAD
=======
</div>
>>>>>>> 31c92751442d530dc41e08fedc1cb44f0a3a3ded
