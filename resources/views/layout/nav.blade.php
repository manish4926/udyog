<nav class="navbar navbar-expand navbar-light bg-white static-top osahan-nav sticky-top">

         <button class="btn btn-link btn-sm text-secondary order-1 order-sm-0" id="sidebarToggle">
         <i class="fas fa-bars"></i>
         </button> &nbsp;&nbsp;
         <a class="navbar-brand mr-1" href="/"><img class="img-fluid" alt="Udyog TV" src="{{asset('/img/udyog_logo.png')}}" width="90px"></a>
         <!-- Navbar Search -->
<<<<<<< HEAD

         <li class="nav-item active">
               <a class="nav-link" href="/">

               <i class="fas fa-fw fa-home"></i>
               <span>Home</span>
               </a>
                </li>

            <li class="nav-item dropdown">
               <a class="nav-link dropdown-toggle" href="{{ route('alljob') }}" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               <i class="fas fa-fw fa-list-alt"></i>
               <span>Job Portal</span>
               </a>
               <div class="dropdown-menu">
                  <a class="dropdown-item" href="{{ route('postjob') }}">Post a New Job</a>
                  <a class="dropdown-item" href="{{ route('alljob') }}">Latest Jobs</a>
                  <a class="dropdown-item" href="{{ route('searchjob') }}">Search a Job</a>
                  <a class="dropdown-item" href="{{ route('application') }}">Application Form</a>
               </div>
            </li>
       



=======
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0
         <form class="d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 osahan-navbar-search">
            <div class="input-group">
               <input type="text" class="form-control" placeholder="Search" align="left">

               <div class="input-group-append">
                  <button class="btn btn-light" type="button">
                  <i class="fas fa-search"></i> 
                  </button>
               </div>
<<<<<<< HEAD
            
            </div>
            
        </div>
        
    </form>
    
=======
            </div>
        </div>
    </form>
>>>>>>> d2692a5e98b7dfc23494d27ca3b0d654eb1091c0

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

