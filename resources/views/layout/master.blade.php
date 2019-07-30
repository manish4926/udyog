<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>BCI - Bawana Chamber of Industries</title>
    
    <link rel="icon" type="image/png" href="{{asset('/img/udyog_logo.png')}}">

    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="{{ asset('layerslider/css/layerslider.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">

    @stack('topscript')

    <script type="text/javascript">
        function googleTranslateElementInit() {
            new google.translate.TranslateElement({pageLanguage: 'en',includedLanguages: 'hi',
            autoDisplay: false}, 'google_translate_element');
        }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>

</head>
<body>
<div id="app"></div>
<div class="off-canvas-wrapper">
    <div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
        <div class="google-language-box">
            <div id="google_translate_element"></div>
        </div>
        <!--header-->
        @include('layout.nav-mobile')
        <div class="off-canvas-content" data-off-canvas-content>
            @include('layout.nav')          
            @yield('content')
            @include('partials.content-divider')
        </div> <!--end off canvas content--> 
        <!--Footer-->
        @include('layout.footer')     
    </div> <!--end off canvas wrapper inner-->
</div><!--end off canvas wrapper-->
<!-- script files -->
<script type="text/javascript" src="{{ asset('js/app.js') }}"></script>

<script type="text/javascript">
jQuery(document).ready(function(jQuery){
    "use strict";
    /*Layer slider trigger*/
    //login register click
    jQuery(".loginReg").on("click", function(e){
        e.preventDefault();
        jQuery(this).next().slideToggle();
        jQuery(this).toggleClass("active");
    });

    //search bar
    jQuery(".search").on("click", function(){
        if(jQuery(this).children().hasClass("fa-search")){
            jQuery(this).children().removeClass("fa-search");
            jQuery(this).children().addClass("fa-times");
        }else{
            jQuery(this).children().removeClass("fa-times");
            jQuery(this).children().addClass("fa-search");
        }
        jQuery(this).toggleClass("search-active");
        jQuery("#search-bar").slideToggle();

    });

    
    //grid system
    
    //back to top
    var backtotop = '#back-to-top';
    if (jQuery(backtotop).length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    jQuery(backtotop).addClass('show');
                } else {
                    jQuery(backtotop).removeClass('show');
                }
            };
        backToTop();
        jQuery(window).on('scroll', function () {
            backToTop();
        });
        jQuery('#back-to-top').on('click', function (e) {
            e.preventDefault();
            jQuery('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
    
    

});
</script>


{{-- <script src="bower_components/jquery/dist/jquery.js"></script> --}}

{{-- <script src="bower_components/what-input/what-input.js"></script> --}}
<script src="{{ asset('bower_components/foundation-sites/dist/foundation.js') }}"></script>
<script src="{{ asset('js/jquery.showmore.src.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/main.js') }}"></script>


<script src="{{ asset('layerslider/js/greensock.js') }}" type="text/javascript"></script>

<script src="{{ asset('layerslider/js/layerslider.transitions.js') }}" type="text/javascript"></script>
<script src="{{ asset('layerslider/js/layerslider.kreaturamedia.jquery.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('js/inewsticker.js') }}" type="text/javascript"></script>
<script src="{{ asset('js/jquery.kyco.easyshare.js') }}" type="text/javascript"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
@stack('bottomscript')
<script src="http://parsleyjs.org/dist/parsley.js"></script>
</body>
</html>