
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <!-- Stylesheets -->
    <link href="{{ asset('home/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Libre+Caslon+Text:wght@400;700&amp;display=swap" rel="stylesheet">

    <meta name="og:title" content="{{$siteName}}" />
    <meta name="og:type" content="company" />
    <meta name="og:url" content="/" />
    <meta name="og:image" content="{{asset('home/images/'.$web->logo)}}" />
    <meta name="og:site_name" content="{{$siteName}}" />
    <meta name="og:description"
          content="Comprehensive financial advice and investment services that are tailored to meet your individual needs." />
    <meta name="description" content="{{$web->description}}">
    <meta name="keywords" content="business, marketing, agency">
    <title> {{$siteName}} | {{$pageName}}</title>
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

    <!-- favicons Icons -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('home/images/'.$web->logo)}}" />
    @stack('css')
    <style>
        /* Custom CSS for the Float widget */
        .telegram-float-widget {
            position: fixed;
            left: 10px;
            /* Adjust the left positioning as needed */
            bottom: 25rem;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }

        .whatsapp-float-widget {
            position: fixed;
            right: 10px;
            /* Adjust the left positioning as needed */
            bottom: 25rem;
            /* Adjust the bottom positioning as needed */
            z-index: 9999;
        }
    </style>
    <style>
        .watkey {
            z-index: 9;
            position: fixed;
            bottom: 40px;
            left: 15px;
            padding: 4px;
            border: 1px solid #0d9f16;
            border-radius: 50%;
        }
    </style>
</head>

<body>
@inject('injected','App\Defaults\Custom')
<div class="page-wrapper">

    <!-- Preloader -->
    <div class="preloader"></div>
    <!-- End Preloader -->

    <!-- Main Header / Header Style Two -->
    <header class="main-header header-style-two">

        <!-- Header Upper -->
        <div class="header-upper">
            <div class="auto-container">
                <div class="inner-container d-flex justify-content-between align-items-center flex-wrap">
                    <!-- Logo Box -->
                    <div class="logo"><a href="index"><img src="{{ asset('home/images/'.$web->logo) }}" alt="" title=""  style="width: 100px;"></a></div>

                    <!-- Upper Right -->
                    <div class="upper-right d-flex align-items-center flex-wrap">
                        <!-- Info Box -->
                        <div class="upper-column info-box">
                            <div class="icon-box flaticon-mail"></div>
                            {{ $web->email }}
                            <strong>Mail us</strong>
                        </div>
                        @if(!empty($web->phone))
                            <!-- Info Box -->
                            <div class="upper-column info-box">
                                <div class="icon-box flaticon-phone-call"></div>
                                Requesting a Call:
                                <strong><a href="tel:{{ $web->phone }}">{{ $web->phone }}</a></strong>
                            </div>
                        @endif
                        <!-- Info Box -->
                        <!-- Info Box -->
                        <div class="upper-column info-box">
                            <div class="icon-box flaticon-pin"></div>
                            {!! $web->address !!}
                        </div>
                    </div>

                </div>
            </div>
        </div>

        <!-- Header Lower -->
        <div class="header-lower">

            <div class="auto-container">
                <div class="inner-container">

                    <div class="nav-outer d-flex justify-content-between align-items-center flex-wrap">

                        <!-- Main Menu -->
                        <nav class="main-menu show navbar-expand-md d-flex align-items-center">
                            <div class="navbar-header">
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>

                            <div class="navbar-collapse collapse clearfix" id="navbarSupportedContent">
                                <ul class="navigation clearfix">
                                    <li><a href="{{ url('/') }}">Home</a></li>
                                    <li><a href="{{ url('about') }}">About</a></li>

                                    <li class="dropdown"><a href="#">Pages</a>
                                        <ul>
                                            <li ><a href="{{url('plans')}}" >Plans</a></li>
                                            <li><a href="{{url('faqs')}}" >Frequently Asked
                                                    Questions</a></li>
                                            <li ><a href="{{url('terms')}}" >Terms &
                                                    Conditions</a></li>
                                            <li ><a href="{{url('privacy')}}" >Privacy
                                                    policy</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Services</a>
                                        <ul>
                                            @foreach($injected->getServices() as $service)
                                                <li ><a href="{{route('service.details',['id'=>$service->id])}}">{{$service->title}}</a></li>
                                            @endforeach
                                        </ul>
                                    </li>
                                    <li class="dropdown"><a href="#">Investor Panel</a>
                                        <ul>
                                            <li ><a href="{{route('login')}}">Login</a></li>

                                            <li ><a href="{{route('register')}}" >Register</a>
                                        </ul>
                                    </li>
                                    <li><a href="{{ url('contact') }}">Contact</a></li>
                                </ul>
                            </div>


                            <!-- Cart Box -->
                            <div class="cart-box">
                                <a class="cart fa-solid fa-sign-in fa-fw" href="{{ route('login') }}"></a>
                            </div>

                        </nav>
                        <!-- Main Menu End-->

                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>

                    </div>

                </div>

            </div>
        </div>
        <!-- End Header Lower -->

        <!-- Sticky Header  -->
        <div class="sticky-header">
            <div class="auto-container">
                <div class="d-flex justify-content-between align-items-center">
                    <!-- Logo -->
                    <div class="logo">
                        <a href="index" title=""><img src="{{ asset('home/images/'.$web->logo) }}"  style="width: 100px;" alt="" title=""></a>
                    </div>

                    <!-- Right Col -->
                    <div class="right-box d-flex align-items-center flex-wrap">
                        <!-- Main Menu -->
                        <nav class="main-menu d-flex align-items-center">
                            <!--Keep This Empty / Menu will come through Javascript-->
                        </nav>
                        <!-- Main Menu End-->

                        <div class="outer-box d-flex align-items-center">

                            <!-- Social Box -->
                            <ul class="header-social_box style-two">
                                <li><a href="https://www.twitter.com/" class="fa-brands fa-facebook-f fa-fw"></a></li>
                                <li><a href="https://www.facebook.com/" class="fa-brands fa-twitter fa-fw"></a></li>
                                <li><a href="https://www.linkedin.com/" class="fa-brands fa-linkedin fa-fw"></a></li>
                                <li><a href="https://instagram.com/" class="fa-solid fa-instagram fa-fw"></a></li>
                            </ul>

                        </div>

                        <!-- Mobile Navigation Toggler -->
                        <div class="mobile-nav-toggler"><span class="icon fa-solid fa-bars fa-fw"></span></div>

                    </div>

                </div>
            </div>
        </div>
        <!-- End Sticky Menu -->

        <!-- Mobile Menu  -->
        <div class="mobile-menu">
            <div class="menu-backdrop"></div>
            <div class="close-btn"><span class="icon fas fa-window-close fa-fw"></span></div>
            <nav class="menu-box">
                <div class="nav-logo"><a href="index"><img src="{{ asset('home/images/'.$web->logo) }}" alt="" title=""></a></div>

                <div class="menu-outer"><!--Here Menu Will Come Automatically Via Javascript / Same Menu as in Header--></div>
            </nav>
        </div>
        <!-- End Mobile Menu -->

    </header>
    <!-- End Main Header -->

    @yield('content')

    <!-- CTA One -->
    <section class="cta-one">
        <div class="auto-container">
            <div class="d-flex justify-content-between align-items-center flex-wrap">
                <div class="left-box">
                    <h3 class="cta-one_heading">Looking for the Best Investment and Asset manager?</h3>
                    <div class="cta-one_text">{{ $siteName }} is poised to help change your financial story.</div>
                </div>
                <div class="right-box">
                    <a class="btn-style-seven theme-btn clearfix" href="#">
                        <div class="btn-wrap">
                            <span class="text-one">Get a quote</span>
                            <span class="text-two">Get a quote</span>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- End CTA One -->

    <!-- Footer -->
    <footer class="main-footer style-three" style="background-image:url({{ asset('home/images/background/pattern-11.png') }})">
        <div class="auto-container">
            <!-- Widgets Section -->
            <div class="widgets-section">
                <div class="row clearfix">

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12">
                                <div class="footer-widget logo-widget">
                                    <div class="logo">
                                        <a href="index"><img src="{{ asset('home/images/'.$web->logo) }}" alt="" /></a>
                                    </div>
                                    <div class="text">
                                        {{ $siteName }} is a trailblazing company that leverages the power of AI to provide
                                        unparalleled cryptocurrency investment, mining, and trading solutions.
                                    </div>
                                    <a href="{{ url('about') }}" class="theme-btn about-btn">About us</a>
                                </div>
                            </div>



                        </div>
                    </div>

                    <!-- Big Column -->
                    <div class="big-column col-lg-6 col-md-12 col-sm-12 col-12">
                        <div class="row clearfix">

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="footer-widget contact-widget">
                                    <h4>Official info:</h4>
                                    <ul class="contact-list">
                                        <li><span class="icon fa fa-map"></span>{!! $web->address !!}</li>
                                        <li><span class="icon fa fa-envelope"></span> {{ $web->email }}</li>
                                    </ul>
                                    <div class="timing">
                                        <strong>Open Hours: </strong>
                                        Mon - Sun:  24/7
                                    </div>
                                </div>
                            </div>

                            <!-- Footer Column -->
                            <div class="footer-column col-lg-6 col-md-6 col-sm-12 col-12">
                                <div class="footer-widget instagram-widget">
                                    <h4>Latest News</h4>
                                    <div class="widget-content">
                                        <div class="images-outer clearfix">
                                            <!-- TradingView Widget BEGIN -->
                                            <div class="tradingview-widget-container">
                                                <div class="tradingview-widget-container__widget"></div>
                                                <div class="tradingview-widget-copyright"><a href="https://www.tradingview.com/" rel="noopener nofollow" target="_blank"><span class="blue-text">Track all markets on TradingView</span></a></div>
                                                <script type="text/javascript" src="https://s3.tradingview.com/external-embedding/embed-widget-timeline.js" async>
                                                    {
                                                        "feedMode": "market",
                                                        "market": "stock",
                                                        "isTransparent": false,
                                                        "displayMode": "regular",
                                                        "width": "100%",
                                                        "height": "400",
                                                        "colorTheme": "light",
                                                        "locale": "en"
                                                    }
                                                </script>
                                            </div>
                                            <!-- TradingView Widget END -->
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

            <div class="footer-bottom">
                <div class="copyright">2017 - {{ date('Y') }} &copy; All rights reserved by <a href="{{ url('/') }}">{{ $siteName }}</a></div>
            </div>

        </div>
    </footer>
    <!-- Footer -->



    @if (!empty($web->phone))
        <div class="whatsapp-float-widget">
            <a href="https://wa.me/{{ $web->phone }}" target="_blank">
                <img src="https://cdn2.iconfinder.com/data/icons/social-media-applications/64/social_media_applications_23-whatsapp-256.png"
                     alt="" width="50">
            </a>
        </div>
    @endif

    @if (!empty($web->telegram))
    <div class="telegram-float-widget">
        <a href="{{ $web->telegram }}" target="_blank">
            <img src="https://cdn3.iconfinder.com/data/icons/social-icons-33/512/Telegram-512.png"
                 alt="" width="50">
        </a>
    </div>
    @endif
</div>
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fas fa-long-arrow-up fa-fw"></span></div>

<script src="{{ asset('home/js/jquery.js') }}"></script>
<script src="{{ asset('home/js/appear.js') }}"></script>
<script src="{{ asset('home/js/owl.js') }}"></script>
<script src="{{ asset('home/js/wow.js') }}"></script>
<script src="{{ asset('home/js/odometer.js') }}"></script>
<script src="{{ asset('home/js/mixitup.js') }}"></script>
<script src="{{ asset('home/js/knob.js') }}"></script>
<script src="{{ asset('home/js/popper.min.js') }}"></script>
<script src="{{ asset('home/js/parallax-scroll.js') }}"></script>
<script src="{{ asset('home/js/parallax.min.js') }}"></script>
<script src="{{ asset('home/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('home/js/tilt.jquery.min.js') }}"></script>
<script src="{{ asset('home/js/magnific-popup.min.js') }}"></script>

<script src="{{ asset('home/js/script.js') }}"></script>

<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="{{ asset('home/js/respond.js') }}"></script><![endif]-->
<!-- Google language start -->
<style>
    #google_translate_element {
        z-index: 9999999;
        position: fixed;
        bottom: 25px;
        left: 15px;
    }

    .goog-te-gadget {
        font-family: Roboto, "Open Sans", sans-serif !important;
        text-transform: uppercase;
    }

    .goog-te-gadget-simple {
        padding: 0px !important;
        line-height: 1.428571429;
        color: white;
        vertical-align: middle;
        background-color: black;
        border: 1px solid #a5a5a599;
        border-radius: 4px;
        float: right;
        margin-top: -4px;
        z-index: 999999;
    }

    .goog-te-banner-frame.skiptranslate {
        display: none !important;
        color: white;
    }

    .goog-te-gadget-icon {
        background: none !important;
        display: none;
        color: white;
    }

    .goog-te-gadget-simple .goog-te-menu-value {
        font-size: 12px;
        color: white;
        font-family: 'Open Sans', sans-serif;
    }
</style>
<div id="google_translate_element"></div>
<script type="text/javascript">
    window.onload = function googleTranslateElementInit() {
        new google.translate.TranslateElement({ pageLanguage: 'en' }, 'google_translate_element');
    }
</script>
<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit">
</script>
<!-- start popup massage -->
<div class="notifier" style="display: none;">
    <div class="txt" style="color:black;">While you are waiting,someone from <b></b> just traded with <a
            href="javascript:void(0);" onclick="javascript:void(0);"></a></div>
</div>
<style>
    .notifier {
        border-radius: 7px;
        position: fixed;
        z-index: 90;
        bottom: 80px;
        right: 50px;
        background: #fff;
        padding: 15px 40px;
        box-shadow: 0px 5px 13px 0px rgba(0, 0, 0, .3);
    }

    .notifier a {
        font-weight: 700;
        display: block;
        color: #0080FF;
    }

    .notifier a,
    .notifier a:active {
        transition: all .2s ease;
        color: #0080FF;
    }
</style>
<script data-cfasync="false" src="#"></script>
<script type="text/javascript">
    var listCountries = ['Germany', 'Spain', 'Russia', 'Italy',
        'Italy',  'United States', 'Egypt',
        'United Kingdom', "United States","England","Germany","Germany","United States","Switzerland",
        "Austria","Austria","Austria","Australia","Australia","Australia","Russia","Russia",
        "United States","United Kingdom","Spain","Spain","India","England","Italy","Ukraine"
    ];
    var listPlans = ['$500','$5000','$1,000','$1000','$550','$3000','$690', '$360',
        '$700', '$600',"$500","$700","$1,000","$1289","$5000","$7000","$10000"];
    interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
    var run = setInterval(request, interval);

    function request() {
        clearInterval(run);
        interval = Math.floor(Math.random() * (40000 - 8000 + 1) + 8000);
        var country = listCountries[Math.floor(Math.random() * listCountries.length)];
        var plan = listPlans[Math.floor(Math.random() * listPlans.length)];
        var msg = 'While you are still contemplating ,an investor from <b>' + country + '</b> ' +
            'just traded with <a href="javascript:void(0);" onclick="javascript:void(0);">' + plan + ' .</a>';
        $(".notifier .txt")(msg);
        $(".notifier").stop(true).fadeIn(300);
        window.setTimeout(function() {
            $(".notifier").stop(true).fadeOut(300);
        }, 6000);
        run = setInterval(request, interval);
    }
</script>
<!-- end popup massage -->
@stack('js')

<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
    var _smartsupp = _smartsupp || {};
    _smartsupp.key = '295ace2a0b9ec5716abd95c9a324c3ea035954e8';
    window.smartsupp||(function(d) {
        var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
        s=d.getElementsByTagName('script')[0];c=d.createElement('script');
        c.type='text/javascript';c.charset='utf-8';c.async=true;
        c.src='https://www.smartsuppchat.com/loader.js?';s.parentNode.insertBefore(c,s);
    })(document);
</script>
<noscript> Powered by <a href=“https://www.smartsupp.com” target=“_blank”>Smartsupp</a></noscript>
</body>

</html>
