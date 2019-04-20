<head>
        <link href="public/css/search.css" rel="stylesheet">
</head>

<div class="sticky-header">


    <div class="clearfix"></div>
</div>


<nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom">
    <a class="navbar-brand mr-1" href="/"><img class="img-fluid" alt="Udyog TV" src="{{asset('/img/udyog_logo.png')}}" width="90px"></a>

          <div class="col-sm-4">
            <input type="text" class="form-control" placeholder="Search">
          </div>


    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">

                        <li class="nav-item dropdown active">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                        Job Portal
                        </a>
                        <div class="dropdown-menu">
                                <a class="dropdown-item" href="{{ route('postjob') }}">Post a New Job</a>
                                <a class="dropdown-item" href="{{ route('latestjobs') }}">Latest Jobs</a>
                                <a class="dropdown-item" href="{{ route('searchjob') }}">Search a Job</a>
                                {{-- <a class="dropdown-item" href="{{ route('application') }}">Application Form</a> --}}
                            </div>
                        </li>

                         <li class="nav-item dropdown active">
                                <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Industries</a>
                                <div class="dropdown-menu">
                                   <a class="dropdown-item" href="categories.html">Bawana</a>
                                   <a class="dropdown-item" href="categories.html">Narela</a>
                                   <a class="dropdown-item" href="categories.html">Others</a>
                                </div>
                             </li>
                             <li class="nav-item active">
                                    <a class="nav-link" href="{{route('IndustryList')}}">Directory</a>
                            </li>
                            <li class="nav-item dropdown active">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                    Business
                                    </a>
                                    <div class="dropdown-menu">
                                            <a class="dropdown-item" href="{{route('IndustryList')}}">Directory</a>
                                            <a class="dropdown-item" href="{{route('currentaffairs')}}">Current affairs</a>
                                            <a class="dropdown-item" href="{{route('training')}}">Training's</a>
                                            <a class="dropdown-item" href="{{route('labourlaws')}}">Labour Laws</a>
                                            <a class="dropdown-item" href="{{route('taxation')}}">taxation</a>
                                            <a class="dropdown-item" href="{{route('newtechnology')}}">New Technology</a>
                                            <a class="dropdown-item" href="{{route('newproducts')}}">New Products</a>
                                            <a class="dropdown-item" href="{{route('health')}}">Health</a>
                                            <a class="dropdown-item" href="{{route('growbusiness')}}">How to grow business</a>
                                            <a class="dropdown-item" href="{{route('regarademarks')}}">Registerations & Arade Marks</a></li>
                                        </div>
                                    </li>
                            <li class="nav-item dropdown no-bullets">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown">
                                Login / Register
                            </a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                @if (Route::has('login'))
                                <div class="top-right links">
                                    @auth
                                    <a href="{{ url('/home') }}">Home</a>
                                    @else
                                    <button type="button" class="btn btn-block btn-success btn-flat"><a class="text-dark" href="{{ route('login') }}">Login</a></button>
                                    @if (Route::has('register'))
                                    <button type="button" class="btn btn-block btn-primary btn-flat"><a class="text-dark" href="{{ route('register') }}">Register</a></button>
                                    @endif

                                    @endauth
                                </div>
                                @endif
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Forget Password</a>
                            </div>
                            </li>
      </ul>
    </div>
  </nav>

</div>

</div>


