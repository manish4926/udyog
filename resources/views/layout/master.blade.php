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
    <link rel="stylesheet" type="text/css" href="layerslider/css/layerslider.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

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
            
            @include('layout.footer')
            
        </div><!--end off canvas content-->
    </div><!--end off canvas wrapper inner-->
</div><!--end off canvas wrapper-->
<!-- script files -->
<script type="text/javascript" src="/js/app.js"></script>
{{-- <script src="bower_components/jquery/dist/jquery.js"></script> --}}

{{-- <script src="bower_components/what-input/what-input.js"></script> --}}
<script src="bower_components/foundation-sites/dist/foundation.js"></script>
<script src="js/jquery.showmore.src.js" type="text/javascript"></script>
<script src="js/main.js"></script>


<script src="layerslider/js/greensock.js" type="text/javascript"></script>

<script src="layerslider/js/layerslider.transitions.js" type="text/javascript"></script>
<script src="layerslider/js/layerslider.kreaturamedia.jquery.js" type="text/javascript"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/inewsticker.js" type="text/javascript"></script>
<script src="js/jquery.kyco.easyshare.js" type="text/javascript"></script>

@stack('bottomscript')
</body>
</html>