<div class="off-canvas position-left light-off-menu dark-off-menu" id="offCanvas" data-off-canvas>
    <div class="off-menu-close">
        <h3>Menu</h3>
        <span data-toggle="offCanvas"><i class="fa fa-times"></i></span>
    </div>
    <ul class="vertical menu off-menu" data-responsive-menu="drilldown">
        <li class="has-submenu">
            <a href="{{route('home')}}"><i class="fa fa-home"></i>Home</a>
            <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
            <li><a class="dropdown-item" href="#">About us</a></li>
                <li><a class="dropdown-item" href="#">about chairman</a></li>
                <!-- <li><a href="index.html"><i class="fa fa-home"></i>Home page v1</a></li>
                <li><a href="home-v2.html"><i class="fa fa-home"></i>Home page v2</a></li>
                <li><a href="home-v3.html"><i class="fa fa-home"></i>Home page v3</a></li>
                <li><a href="home-v4.html"><i class="fa fa-home"></i>Home page v4</a></li>
                <li><a href="home-v5.html"><i class="fa fa-home"></i>Home page v5</a></li>
                <li><a href="home-v6.html"><i class="fa fa-home"></i>Home page v6</a></li>
                <li><a href="home-v7.html"><i class="fa fa-home"></i>Home page v7</a></li>
                <li><a href="home-v8.html"><i class="fa fa-home"></i>Home page v8</a></li>
                <li><a href="home-v9.html"><i class="fa fa-home"></i>Home page v9</a></li>
                <li><a href="home-v10.html"><i class="fa fa-home"></i>Home page v10</a></li> -->
            </ul>
        </li>
        <li class="has-submenu" data-dropdown-menu="example1">
            <a href="#"><i class="fa fa-wrench"></i>Trainings</a>
            <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
            <li><a class="dropdown-item" href="#">PERSONALITY</a></li>
                                                    <li><a class="dropdown-item" href="#">TECHNICAL</a></li>
                                                    <li><a class="dropdown-item" href="#">OFFICE</a></li>
                                                    <li><a class="dropdown-item" href="#">SALES</a></li>
                                                    <li><a class="dropdown-item" href="http://indiantradeportal.in/">EXPORT/ IMPORT</a></li>
                                                    <li><a class="dropdown-item" href="#">INSURANCE</a></li>
                                                    <li><a class="dropdown-item" href="https://www.investindia.gov.in/taxation">TAXATION</a></li>
                                                    <li><a class="dropdown-item" href="https://clc.gov.in/clc/labour-law">LABOUR LAW</a></li>
                                                    <li><a class="dropdown-item" href="http://www.mca.gov.in/">CO. LAW</a></li>
                                                    <li><a class="dropdown-item" href="#">REGISTRATIONS</a></li>
                                                    <li><a class="dropdown-item" href="http://www.ipindia.nic.in/">INTELLECTUAL PROPERTY RIGHTS</a></li>
                                                    <li><a class="dropdown-item" href="https://labdirectory.bis.gov.in/">LABORITORIES</a></li>
                                                    <li><a class="dropdown-item" href="https://data.gov.in/keywords/subsidy">SUBSIDIES</a></li>
                <!-- <li><a href="single-video-v1.html"><i class="fa fa-film"></i>single video v1</a></li>
                <li><a href="single-video-v2.html"><i class="fa fa-film"></i>single video v2</a></li>
                <li><a href="single-video-v3.html"><i class="fa fa-film"></i>single video v3</a></li>
                <li><a href="submit-post.html"><i class="fa fa-film"></i>submit post</a></li> -->
            </ul>
        </li>

        <li><a href="{{ route('industrylist') }}"><i class="fa fa-briefcase"></i>Business</a>
                                        <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                             <li><a class="dropdown-item" href="#">Search</a>
                                                <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                            <li><a class="dropdown-item" href="{{ route('industrylist') }}">Product</a></li>
                                            <li><a class="dropdown-item" href="#">Industrial Property</a></li>
                                            </ul>
                                             </li>
                                            <li><a class="dropdown-item" href="#">upload your product</a></li>
                                            {{--      @if(Auth::check() AND $user->hasRole('Company'))
                                                    <li><a href="{{ route('postjob') }}"><i class="fa fa-th"></i>Post A Job</a>
                                                    <li><a href="{{ route('candidatesearch') }}"><i class="fa fa-th"></i>Search Candidates</a>
                                                </li>
                                                @else
                                                    <li><a href="{{ route('alljob') }}"><i class="fa fa-th"></i>Jobs</a>

                                                </li>
                                                @endif  --}}

                                            {{-- <li><a class="dropdown-item" href="{{route('currentaffairs')}}">Current affairs</a></li>
                                            <li><a class="dropdown-item" href="{{route('training')}}">Training's</a></li>
                                            <li><a class="dropdown-item" href="{{route('labourlaws')}}">Labour Laws</a></li>
                                            <li><a class="dropdown-item" href="{{route('taxation')}}">taxation</a></li>
                                            <li><a class="dropdown-item" href="{{route('newtechnology')}}">New Technology</a></li>
                                            <li><a class="dropdown-item" href="{{route('newproducts')}}">New Products</a></li>
                                            <li><a class="dropdown-item" href="{{route('health')}}">Health</a></li>
                                            <li><a class="dropdown-item" href="{{route('growbusiness')}}">How to grow business</a></li>
                                            <li><a class="dropdown-item" href="{{route('regarademarks')}}">Registerations & Arade Marks</a></li> --}}
                                        </ul>
                                    </li>
                                    <li><a href="{{ route('industrylist') }}"><i class="fa fa-industry"></i>Industries</a>
                                        <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                            <li><a class="dropdown-item">Industrty Related Authority/Ministry</a>
                                                <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                                    <li><a class="dropdown-item" href="https://msme.gov.in/">MSME MIN</a></li>
                                                    <li><a class="dropdown-item" href="https://labour.gov.in/">LABOUR  MIN</a></li>
                                                    <li><a class="dropdown-item" href="http://www.dsiidc.org/">DSIIDC</a></li>
                                                    <li><a class="dropdown-item" href="http://www.mcd.gov.in/">MCD</a></li>
                                                    <li><a class="dropdown-item" href="https://www.tatapower-ddl.com/">TPDDL</a></li>
                                                    <li><a class="dropdown-item" href="http://djb.gov.in/DJBPortal/portals/DJBCustomer.portal">DJB</a></li>
                                                    <li><a class="dropdown-item" href="https://www.dpcc.delhigovt.nic.in/">DPCC</a></li>
                                                    <li><a class="dropdown-item" href="https://www.epfindia.gov.in/site_en/index.php">EPFO</a></li>
                                                    <li><a class="dropdown-item" href="http://www.esic.in/ESICInsurance1/ESICInsurancePortal/PortalLogin.aspx">ESIC</a></li>
                                                </ul>
                                            </li>
                                            <li><a class="dropdown-item">Fin/Support</a>
                                                <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                                    <li><a class="dropdown-item" href="https://www.sidbi.in/en">SIDBI</a></li>
                                                    <li><a class="dropdown-item" href="http://www.nsic.co.in/">NSIC</a></li>
                                                    <li><a class="dropdown-item" href="https://www.standupmitra.in/">STANDUP INDIA</a></li>
                                                    <li><a class="dropdown-item" href="https://www.mudra.org.in/">MUDRA</a></li>
                                                    <li><a class="dropdown-item" href="https://www.sbi.co.in/portal/web/interest-rates/loan-schemes">BANK LOAN</a></li>
                                                    <li><a class="dropdown-item" href="https://rbi.org.in/Scripts/BS_NBFCList.aspx">NBFC</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                
                                    <li class="has-submenu" data-dropdown-menu="example1">
                                        <a href="#"><i class="fa fa-film"></i>Videos</a>
                                        <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                            <li><a class="dropdown-item" href="#">Industry</a></li>
                                            <li><a class="dropdown-item" href="#">Latest</a></li>
                                            {{-- <li><a href="single-video-v3.html"><i class="fa fa-film"></i>single video v3</a></li>
                                            <li><a href="submit-post.html"><i class="fa fa-film"></i>submit post</a></li> --}} 
                                        </ul>
                                    </li>

                                    

                                     <li class="has-submenu" data-dropdown-menu="example1">
                                        <a href="#"><i class="fa fa-male"></i>Employment Exchnage</a>
                                        <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                            <li><a class="dropdown-item" href="#">Employee</a></li>
                                            <li><a class="dropdown-item" href="#">employer</a></li>
                                      </ul>
                                    </li>

                                    <li><a href="contact-us.html"><i class="fa fa-envelope"></i>contact</a></li>

                                    <li class="has-submenu" data-dropdown-menu="example1">
                                        <a href="#"><i class="fa fa-archive"></i>Archive</a>
                                        <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                            <li><a class="dropdown-item" href="#">video</a>
                                                <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                            <li><a class="dropdown-item" href="#">Year</a></li>
                                            <li><a class="dropdown-item" href="#">Month</a></li>
                                        </ul>
                                            </li>
                                            <li><a class="dropdown-item" href="#">Content</a>
                                                 <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                            <li><a class="dropdown-item" href="#">Year</a></li>
                                            <li><a class="dropdown-item" href="#">Month</a></li>
                                        </ul>
                                            </li>
                                       </ul>
                                      </li> 
                                    {{-- <li>
                                        <a href="blog.html"><i class="fa fa-edit"></i>blog</a>
                                        <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                            <li><a href="blog-single-post.html"><i class="fa fa-edit"></i>blog single post</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#"><i class="fa fa-magic"></i>features</a>
                                        <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                            <li><a href="404.html"><i class="fa fa-magic"></i>404 Page</a></li>
                                            <li><a href="archives.html"><i class="fa fa-magic"></i>Archives</a></li>
                                            <li><a href="login.html"><i class="fa fa-magic"></i>login</a></li>
                                            <li><a href="login-forgot-pass.html"><i class="fa fa-magic"></i>Forgot Password</a></li>
                                            <li><a href="login-register.html"><i class="fa fa-magic"></i>Register</a></li>
                                            <li>
                                                <a href="#"><i class="fa fa-magic"></i>profile</a>
                                                <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                                                    <li><a href="profile-page-v1.html"><i class="fa fa-magic"></i>profile v1</a></li>
                                                    <li><a href="profile-page-v2.html"><i class="fa fa-magic"></i>profile v2</a></li>
                                                    <li><a href="profile-about-me.html"><i class="fa fa-magic"></i>Profile About Me</a></li>
                                                    <li><a href="profile-comments.html"><i class="fa fa-magic"></i>profile comments</a></li>
                                                    <li><a href="profile-favorite.html"><i class="fa fa-magic"></i>profile favorites</a></li>
                                                    <li><a href="profile-followers.html"><i class="fa fa-magic"></i>profile followers</a></li>
                                                    <li><a href="profile-settings.html"><i class="fa fa-magic"></i>profile settings</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="profile-video.html"><i class="fa fa-magic"></i>Author Page</a></li>
                                            <li><a href="search-results.html"><i class="fa fa-magic"></i>search results</a></li>
                                            <li><a href="terms-condition.html"><i class="fa fa-magic"></i>Terms &amp; Condition</a></li>
                                        </ul>
                                    </li> --}}
                                    {{-- <li><a href="about-us.html"><i class="fa fa-user"></i>about</a></li> --}}
                                  {{--   <li><a href="contact-us.html"><i class="fa fa-envelope"></i>contact</a></li> --}}
                                </ul>







        <!-- <li><a href="categories.html"><i class="fa fa-th"></i>category</a></li>
        <li>
            <a href="blog.html"><i class="fa fa-edit"></i>blog</a>
            <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                <li><a href="blog-single-post.html"><i class="fa fa-edit"></i>blog single post</a></li>
            </ul>
        </li>
        <li>
            <a href="#"><i class="fa fa-magic"></i>features</a>
            <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                <li><a href="404.html"><i class="fa fa-magic"></i>404 Page</a></li>
                <li><a href="archives.html"><i class="fa fa-magic"></i>Archives</a></li>
                <li><a href="login.html"><i class="fa fa-magic"></i>login</a></li>
                <li><a href="login-forgot-pass.html"><i class="fa fa-magic"></i>Forgot Password</a></li>
                <li><a href="login-register.html"><i class="fa fa-magic"></i>Register</a></li>
                <li>
                    <a href="#"><i class="fa fa-magic"></i>profile</a>
                    <ul class="submenu menu vertical" data-submenu data-animate="slide-in-down slide-out-up">
                        <li><a href="profile-page-v1.html"><i class="fa fa-magic"></i>profile v1</a></li>
                        <li><a href="profile-page-v2.html"><i class="fa fa-magic"></i>profile v2</a></li>
                        <li><a href="profile-about-me.html"><i class="fa fa-magic"></i>Profile About Me</a></li>
                        <li><a href="profile-comments.html"><i class="fa fa-magic"></i>profile comments</a></li>
                        <li><a href="profile-favorite.html"><i class="fa fa-magic"></i>profile favorites</a></li>
                        <li><a href="profile-followers.html"><i class="fa fa-magic"></i>profile followers</a></li>
                        <li><a href="profile-settings.html"><i class="fa fa-magic"></i>profile settings</a></li>
                    </ul>
                </li>
                <li><a href="profile-video.html"><i class="fa fa-magic"></i>Author Page</a></li>
                <li><a href="search-results.html"><i class="fa fa-magic"></i>search results</a></li>
                <li><a href="terms-condition.html"><i class="fa fa-magic"></i>Terms &amp; Condition</a></li>
            </ul>
        </li>
        <li><a href="about-us.html"><i class="fa fa-user"></i>about</a></li>
        <li><a href="contact-us.html"><i class="fa fa-envelope"></i>contact</a></li>
    </ul> -->
    <div class="responsive-search">
        <form method="post">
            <div class="input-group">
                <input class="input-group-field" type="text" placeholder="search Here">
                <div class="input-group-button">
                    <button type="submit" name="search"><i class="fa fa-search"></i></button>
                </div>
            </div>
        </form>
    </div>  
    <div class="off-social">
        <h6>Get Socialize</h6>
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-google-plus"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-vimeo"></i></a>
        <a href="#"><i class="fa fa-youtube"></i></a>
    </div>
    <div class="top-button">
        <ul class="menu">
            <li>
                <a href="submit-post.html">upload Video</a>
            </li>
            <li class="dropdown-login">
                <a href="login.html">login/Register</a>
            </li>
        </ul>
    </div>
</div>