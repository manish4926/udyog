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
<div class="marquee-message">
  <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">
    Flash Message: Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
  </marquee>
</div>