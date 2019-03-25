<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">
         
         <button class="btn btn-link text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button> 
         <a class="navbar-brand mr-1" href="/"><img class="img-fluid" alt="Udyog TV" src="/img/udyog_logo.png" width="90px"></a>
         <!-- Navbar Search -->
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search" align="left" name="search">
               <div class="input-group-append">
                  <button class="btn btn-light" type="button">
                  <i class="fas fa-search"></i> 
                  </button>
               </div>

            </div>
        </div>
    </form>

    @if (Route::has('login'))
    <div class="top-right links">
        @auth
        <a href="{{ url('/home') }}">Home</a>
        @else
        <a class="btn btn-success" href="{{ route('login') }}">Login</a> 

        @if (Route::has('register'))
        <a class="btn btn-info" href="{{ route('register') }}">Register</a>
        @endif
        @endauth
    </div>
    @endif     

</nav>

