@extends('home.base')
@section('content')
    @push('css')
        <style>
            .pricing-content { position: relative; }
            .pricing_design {
                position: relative;
                margin: 0px 15px;
            }
            .pricing_design .single-pricing {
                background: #8B0000;
                padding: 60px 40px;
                border-radius: 30px;
                box-shadow: 0 10px 40px -10px rgba(0,64,128,.2);
                position: relative;
                z-index: 1;
            }
            .pricing_design .single-pricing:before {
                content: "";
                background-color: #fff;
                width: 100%;
                height: 100%;
                border-radius: 18px 18px 190px 18px;
                border: 1px solid #eee;
                position: absolute;
                bottom: 0;
                right: 0;
                z-index: -1;
            }
            .price-head { }
            .price-head h2 {
                margin-bottom: 20px;
                font-size: 26px;
                font-weight: 600;
            }
            .price-head h1 {
                font-weight: 600;
                margin-top: 30px;
                margin-bottom: 5px;
            }
            .price-head span { }

            .single-pricing ul { list-style: none; margin-top: 30px; }
            .single-pricing ul li {
                line-height: 36px;
            }
            .single-pricing ul li i {
                background: #8B0000;
                color: #fff;
                width: 20px;
                height: 20px;
                border-radius: 30px;
                font-size: 11px;
                text-align: center;
                line-height: 20px;
                margin-right: 6px;
            }
            .pricing-price { }

            .price_btn {
                background: #8B0000;
                padding: 10px 30px;
                color: #fff;
                display: inline-block;
                margin-top: 20px;
                border-radius: 2px;
                -webkit-transition: 0.3s;
                transition: 0.3s;
            }
            .price_btn:hover { background: #B22222; }

            a {
                color: #ffffff;
            }

            .text-center {
                text-align: center !important;
            }
        </style>
    @endpush

    <!-- Main Slider -->
    <section class="slider-one">
        <div class="single-item-carousel owl-carousel owl-theme">

            <!-- Slide -->
            <div class="slide">
                <div class="slider-one_image-layer" style="background-image:url({{ asset('home/images/main-slider/1.jpg') }})"></div>
                <div class="slider-one_pattern-layer" style="background-image:url({{ asset('home/images/main-slider/pattern-1.png') }})"></div>
                <div class="auto-container">
                    <!-- Content Column -->
                    <div class="slider-one-content d-flex justify-content-end">
                        <div class="slider-one_inner">
                            <div class="slider-one_title">SMART INVESTMENTS FOR MODERN TIMES</div>
                            <h1 class="slider-one_heading">Grow Your Wealth <br> Securely, Simply, <br> Powerfully.</h1>
                            <div class="slider-one_text">{{ $siteName }} helps you invest in crypto, real estate, gold, oil, and more — all in one place.</div>
                            <!-- Button Box -->
                            <div class="slider-one_button-box d-flex align-items-center flex-wrap">
                                <a class="btn-style-one theme-btn btn-item" href="{{ route('register') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Create an Account</span>
                                        <span class="text-two">Create an Account</span>
                                    </div>
                                </a>
                                <a class="btn-style-one theme-btn btn-item" href="{{ route('login') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Login</span>
                                        <span class="text-two">Login</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Duplicate Slide (adjust content if needed) -->
            <div class="slide">
                <div class="slider-one_image-layer" style="background-image:url({{ asset('home/images/main-slider/1.jpg') }})"></div>
                <div class="slider-one_pattern-layer" style="background-image:url({{ asset('home/images/main-slider/pattern-1.png') }})"></div>
                <div class="auto-container">
                    <div class="slider-one-content d-flex justify-content-end">
                        <div class="slider-one_inner">
                            <div class="slider-one_title">DIVERSIFY & EARN DAILY</div>
                            <h1 class="slider-one_heading">Invest Confidently <br> with Industry-Leading <br> Tools</h1>
                            <div class="slider-one_text">No stress. No limits. Just smart investing backed by data, automation, and real experts.</div>
                            <div class="slider-one_button-box d-flex align-items-center flex-wrap">
                                <a class="btn-style-one theme-btn btn-item" href="{{ route('register') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Create an Account</span>
                                        <span class="text-two">Create an Account</span>
                                    </div>
                                </a>
                                <a class="btn-style-one theme-btn btn-item" href="{{ route('login') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Login</span>
                                        <span class="text-two">Login</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Duplicate Slide -->
            <div class="slide">
                <div class="slider-one_image-layer" style="background-image:url({{ asset('home/images/main-slider/1.jpg') }})"></div>
                <div class="slider-one_pattern-layer" style="background-image:url({{ asset('home/images/main-slider/pattern-1.png') }})"></div>
                <div class="auto-container">
                    <div class="slider-one-content d-flex justify-content-end">
                        <div class="slider-one_inner">
                            <div class="slider-one_title">MULTI-ASSET OPPORTUNITIES</div>
                            <h1 class="slider-one_heading">From Crypto to Gold, <br> We’ve Got You <br> Covered</h1>
                            <div class="slider-one_text">Join thousands of users leveraging {{ $siteName }} to build secure passive income streams across global markets.</div>
                            <div class="slider-one_button-box d-flex align-items-center flex-wrap">
                                <a class="btn-style-one theme-btn btn-item" href="{{ route('register') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Create an Account</span>
                                        <span class="text-two">Create an Account</span>
                                    </div>
                                </a>
                                <a class="btn-style-one theme-btn btn-item" href="{{ route('login') }}">
                                    <div class="btn-wrap">
                                        <span class="text-one">Login</span>
                                        <span class="text-two">Login</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- End Main Slider -->



    <!-- About One -->
    <section class="about-one">
        <div class="auto-container">
            <div class="about-one-inner_container" style="background-image:url({{ asset('home/images/background/pattern-1.png') }})">
                <div class="row clearfix">

                    <!-- Content Column -->
                    <div class="about-one_content-column col-lg-7 col-md-12 col-sm-12">
                        <div class="about-one_content-inner">
                            <!-- Sec Title -->
                            <div class="sec-title">
                                <div class="sec-title_title">About Us</div>
                                <h2 class="sec-title_heading">Your Trusted Partner in Wealth Creation</h2>
                            </div>
                            <div class="about-one_colored-text">
                                {{ $siteName }} is a modern investment platform helping individuals grow wealth through diversified, secure, and transparent portfolios.
                            </div>
                            <div class="about-one_text">
                                Since 2019, we’ve built a trusted ecosystem that offers access to high-yield opportunities across cryptocurrency, real estate, oil and gas, gold, cannabis, and retirement plans. With automated earnings, detailed analytics, and robust support, {{ $siteName }} empowers investors to take control of their financial future — stress-free.
                            </div>

                            <div class="row clearfix">

                                <!-- Counter Boxed -->
                                <div class="counter-boxed col-lg-6 col-md-6 col-sm-12">
                                    <div class="d-flex align-items-center">
                                        <div class="graph-outer">
                                            <input type="text" class="dial" data-fgColor="#c20b0b" data-bgColor="#ffffff" data-width="110" data-height="110" data-linecap="normal" value="85" data-thickness="0.10">
                                            <div class="inner-text count-box"><span class="count-text" data-stop="85" data-speed="3500"></span>%</div>
                                        </div>
                                        <div class="sub-title">Average Portfolio <br> Growth Rate</div>
                                    </div>
                                </div>

                                <!-- Counter Boxed -->
                                <div class="counter-boxed col-lg-6 col-md-6 col-sm-12">
                                    <div class="d-flex align-items-center">
                                        <div class="graph-outer">
                                            <input type="text" class="dial" data-fgColor="#c20b0b" data-bgColor="#ffffff" data-width="110" data-height="110" data-linecap="normal" value="98" data-thickness="0.10">
                                            <div class="inner-text count-box"><span class="count-text" data-stop="98" data-speed="3500"></span>%</div>
                                        </div>
                                        <div class="sub-title">User <br> Satisfaction Rate</div>
                                    </div>
                                </div>

                            </div>

                        </div>
                    </div>

                    <!-- Image Column -->
                    <div class="about-one_image-column col-lg-5 col-md-12 col-sm-12">
                        <div class="about-one_image-inner">
                            <div class="about-one_counter-box" data-parallax='{"y" : 80}'>
                                <div class="about-one_counter"><span class="odometer" data-count="{{ now()->year - 2019 }}"
                                    ></span><sup>+</sup></div>
                                <div class="about-one_experiance">Years of <br> experience</div>
                            </div>
                            <div class="about-one_image">
                                <img src="{{ asset('home/images/resource/about.jpg') }}" alt="About Image" />
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End About One -->


    <!-- Process One -->
    <section class="process-one">
        <div class="auto-container">
            <div class="process-one_inner-conatiner">
                <div class="four-item-carousel owl-carousel owl-theme">

                    <!-- Year 2019 -->
                    <div class="process-one_block">
                        <div class="process-one_block-inner">
                            <div class="process-one_image">
                                <img src="{{ asset('home/images/resource/process-1.png') }}" alt="Launch Year" />
                            </div>
                            <div class="process-one_year">2019</div>
                            <h5 class="process-one_heading">Platform Launched</h5>
                            <div class="process-one_text">
                                {{ $siteName }} was founded with a mission to simplify access to digital and real-world investment opportunities.
                            </div>
                        </div>
                    </div>

                    <!-- Year 2020 -->
                    <div class="process-one_block">
                        <div class="process-one_block-inner">
                            <div class="process-one_image">
                                <img src="{{ asset('home/images/resource/process-2.png') }}" alt="Early Traction" />
                            </div>
                            <div class="process-one_year style-two">2020</div>
                            <h5 class="process-one_heading">Early Growth & Partnerships</h5>
                            <div class="process-one_text">
                                Expanded into crypto and gold investments. Built our first 5,000+ user milestone through trusted partnerships.
                            </div>
                        </div>
                    </div>

                    <!-- Year 2021 -->
                    <div class="process-one_block">
                        <div class="process-one_block-inner">
                            <div class="process-one_image">
                                <img src="{{ asset('home/images/resource/process-3.png') }}" alt="Product Expansion" />
                            </div>
                            <div class="process-one_year style-three">2021</div>
                            <h5 class="process-one_heading">Diversified Offerings</h5>
                            <div class="process-one_text">
                                Introduced real estate, retirement plans, and cannabis funds to serve a broader range of investor profiles.
                            </div>
                        </div>
                    </div>

                    <!-- Year 2023 -->
                    <div class="process-one_block">
                        <div class="process-one_block-inner">
                            <div class="process-one_image">
                                <img src="{{ asset('home/images/resource/process-4.png') }}" alt="Scaling" />
                            </div>
                            <div class="process-one_year style-four">2023</div>
                            <h5 class="process-one_heading">Global Expansion</h5>
                            <div class="process-one_text">
                                Serving investors across multiple regions with 24/7 access, automated earnings, and localized onboarding.
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- End Process One -->

    <!-- Services One -->
    <section class="services-one" style="background-image:url({{asset('home/images/background/pattern-3.png')}})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Awesome</div>
                <h2 class="sec-title_heading">Investment Packages</h2>
                <div class="sec-title_text">

                </div>
            </div>
            <div class="row clearfix text-center">
                @inject('option','App\Defaults\Custom')
                @foreach($packages as $package)

                    <div class="col-lg-4 col-sm-6 col-xs-12 wow fadeInUp mb-5 mx-auto" data-wow-duration="1s"
                         data-wow-delay="0.1s" data-wow-offset="0"
                         style="visibility: visible; animation-duration: 1s; animation-delay: 0.1s; animation-name: fadeInUp;">
                        <div class="pricing_design">
                            <div class="single-pricing">
                                <div class="price-head">
                                    <h2>{{$package->name}}</h2>
                                    <h1>{{$package->roi}}%</h1>
                                    <span>/{{$option->getReturnType($package->returnType)}}</span>
                                </div>
                                <ul>
                                    <li><b>Minimum</b>  ${{number_format($package->minAmount,2)}}</li>
                                    <li><b>Maximum</b> @if($package->isUnlimited !=1)
                                            ${{number_format($package->maxAmount,2)}}
                                        @else
                                            Unlimited
                                        @endif
                                    </li>
                                    <li><b>{{$option->getReturnType($package->returnType)}} returns</b> at {{$package->roi}}%</li>
                                    <li><b>Referral bonus</b> {{$package->referral}}%</li>
                                    <li><b>Contract</b> {{$package->Duration}}</li>
                                    <li><b>Total</b> {{$package->roi*$package->numberOfReturns}}%</li>
                                </ul>
                                <div class="pricing-price">

                                </div>
                                <a href="{{route('register')}}" class="price_btn">Start Investment</a>
                            </div>
                        </div>
                    </div><!--- END COL -->
                @endforeach


            </div>



        </div>
    </section>
    <!-- End Services One -->

    <!-- Case One -->
    <section class="case-one">
        <div class="case-one_pattern-layer" style="background-image:url({{asset('home/images/background/pattern-12.png')}})"></div>
        <div class="case-one_pattern-layer-two" style="background-image:url({{asset('home/images/background/pattern-9.png')}})"></div>
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title style-two light centered">
                <div class="sec-title_title">Services & Industry</div>
                <h2 class="sec-title_heading">Some of our awesome services to <br> check our quality.</h2>
            </div>

            <div class="row clearfix">
                @foreach($services as $service)
                    <!-- Case Block One -->
                    <div class="case-block_one col-lg-3 col-md-6 col-sm-12">
                        <div class="case-block_one-inner">
                            <div class="case-block_one-image">
                                <img src="{{asset('home/serv/'.$service->photo)}}" alt="" />
                                <div class="case-block_one-content">
                                    <a class="case-block_one-plus fa-solid fa-plus fa-fw" href="#"></a>
                                    <div class="case-block_one-title">{{$service->title}}</div>
                                    <h5 class="case-block_one-heading">
                                        <a href="{{route('service.details',['id'=>$service->id])}}">
                                            {{$service->title}}
                                        </a>
                                    </h5>
                                </div>
                            </div>

                        </div>
                    </div>
                @endforeach

            </div>

        </div>
    </section>
    <!-- End Case One -->

    <!-- Progress One -->
    <section class="progress-one" style="background-image:url({{ asset('home/images/background/pattern-3.png') }})">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Progress One -->
                <div class="progress-one_content-column col-lg-6 col-md-12 col-sm-12">
                    <div class="progress-one_content-inner">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title">Annual Performance</div>
                            <h2 class="sec-title_heading">Steady Growth. Reliable Returns.</h2>
                            <div class="sec-title_text">
                                Since launching in 2019, {{ $siteName }} has consistently delivered growth across multiple investment sectors. Here's a snapshot of our year-on-year performance.
                            </div>
                        </div>

                        <!-- Skills -->
                        <div class="default-skills">

                            <!-- 2019 -->
                            <div class="default-skill-item">
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="45">
                                            <div class="default-skill-percentage"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="default-count-box count-box">
                                    <span class="count-text" data-speed="2000" data-stop="45">0</span>%
                                </div>
                                <div class="default-skill-title">Startup Growth <span>(2019)</span></div>
                            </div>

                            <!-- 2020 -->
                            <div class="default-skill-item">
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="72">
                                            <div class="default-skill-percentage"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="default-count-box count-box">
                                    <span class="count-text" data-speed="2000" data-stop="72">0</span>%
                                </div>
                                <div class="default-skill-title">Investment Returns <span>(2020)</span></div>
                            </div>

                            <!-- 2021 -->
                            <div class="default-skill-item">
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="88">
                                            <div class="default-skill-percentage"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="default-count-box count-box">
                                    <span class="count-text" data-speed="2000" data-stop="88">0</span>%
                                </div>
                                <div class="default-skill-title">Portfolio Growth <span>(2021)</span></div>
                            </div>

                            <!-- 2022 -->
                            <div class="default-skill-item">
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="93">
                                            <div class="default-skill-percentage"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="default-count-box count-box">
                                    <span class="count-text" data-speed="2000" data-stop="93">0</span>%
                                </div>
                                <div class="default-skill-title">User Retention <span>(2022)</span></div>
                            </div>

                            <!-- 2023 -->
                            <div class="default-skill-item">
                                <div class="default-skill-bar">
                                    <div class="default-bar-inner">
                                        <div class="default-bar progress-line" data-width="97">
                                            <div class="default-skill-percentage"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="default-count-box count-box">
                                    <span class="count-text" data-speed="2000" data-stop="97">0</span>%
                                </div>
                                <div class="default-skill-title">Customer Satisfaction <span>(2023)</span></div>
                            </div>
                        </div>

                        <div class="row clearfix mt-4">

                            <!-- Progress Info: Risk -->
                            <div class="progress-info col-lg-6 col-md-6 col-sm-12">
                                <div class="progress-info_inner">
                                    <div class="progress-info_title">
                                        <span class="progress-info_icon flaticon-shield"></span>
                                        <h6>Smart Risk Controls</h6>
                                    </div>
                                    <div class="progress-info_text">
                                        We prioritize capital preservation through diversified portfolios and real-time risk monitoring.
                                    </div>
                                </div>
                            </div>

                            <!-- Progress Info: Growth -->
                            <div class="progress-info col-lg-6 col-md-6 col-sm-12">
                                <div class="progress-info_inner">
                                    <div class="progress-info_title">
                                        <span class="progress-info_icon flaticon-profit"></span>
                                        <h6>Compounding Growth</h6>
                                    </div>
                                    <div class="progress-info_text">
                                        Our platform is built to maximize long-term gains through compounding and reinvestment strategies.
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                </div>

                <!-- Image Column -->
                <div class="progress-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="progress-one_image wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <img src="{{ asset('home/images/resource/progress.png') }}" alt="Growth Illustration" />
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Progress One -->


    <!-- Features One -->
    <section class="services-one" style="background-image:url({{ asset('home/images/background/pattern-2.png') }})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Platform Features</div>
                <h2 class="sec-title_heading">Tools That Power Your Investments</h2>
                <div class="sec-title_text">
                    From crypto to retirement planning, {{ $siteName }} gives you secure, scalable tools to grow your wealth with confidence.
                </div>
            </div>

            <div class="row clearfix">

                <!-- Feature 1 -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon flaticon-website"></div>
                        <h5 class="service-block_one-heading">All-in-One Investment Dashboard</h5>
                        <div class="service-block_one-text">Monitor your portfolios, track returns, and manage deposits — all in one place with real-time updates.</div>
                    </div>
                </div>

                <!-- Feature 2 -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon flaticon-market"></div>
                        <h5 class="service-block_one-heading">Automated Earnings Distribution</h5>
                        <div class="service-block_one-text">Earnings from your investments are automatically calculated and credited on schedule — no manual actions needed.</div>
                    </div>
                </div>

                <!-- Feature 3 -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon flaticon-bank-building-silhouette"></div>
                        <h5 class="service-block_one-heading">Multi-Asset Investment Plans</h5>
                        <div class="service-block_one-text">Diversify across crypto, gold, oil, cannabis, real estate, and retirement-focused options — with flexible risk levels.</div>
                    </div>
                </div>

                <!-- Feature 4 -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon flaticon-charity"></div>
                        <h5 class="service-block_one-heading">Secure Wallet System</h5>
                        <div class="service-block_one-text">Store your assets safely. Every wallet is encrypted, monitored, and supports multiple currencies and tokens.</div>
                    </div>
                </div>

                <!-- Feature 5 -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon flaticon-business-intelligence"></div>
                        <h5 class="service-block_one-heading">Smart Analytics & Reports</h5>
                        <div class="service-block_one-text">Gain insight into your performance with beautifully generated reports, projections, and real-time analytics.</div>
                    </div>
                </div>

                <!-- Feature 6 -->
                <div class="service-block_one col-lg-4 col-md-6 col-sm-12">
                    <div class="service-block_one-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="service-block_one-icon flaticon-shuttle"></div>
                        <h5 class="service-block_one-heading">Global Access, Local Support</h5>
                        <div class="service-block_one-text">Access your account from anywhere in the world, with support tailored to your region and investment style.</div>
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- End Features One -->


    <!-- Business One -->
    <section class="business-one">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title">
                <div class="d-flex justify-content-between align-items-center flex-wrap">
                    <div class="left-box">
                        <div class="sec-title_title">Get in Touch</div>
                        <h2 class="sec-title_heading">We’re Always Available <br> to Support Your Investment Journey</h2>
                    </div>
                    <div class="right-box">
                        <div class="sec-title_text">
                            Whether you’re an experienced investor or just getting started, our team is ready to answer your questions and guide you through every step with confidence and clarity.
                        </div>
                    </div>
                </div>
            </div>

            <div class="row clearfix">
                <!-- Branches Column -->
                <div class="branches-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <!-- Business One Counter -->
                        <div class="business-one_counter-box">
                            <div class="business-one_counter"><span class="odometer" data-count="12"></span><sup>+</sup></div>
                            <div class="business-one_experiance">Locations Served</div>
                        </div>
                        <div class="map">
                            <img src="{{ asset('home/images/background/map.png') }}" alt="World Map" />
                            <div class="dots-outer">
                                <span class="dott"></span>
                                <span class="dott two"></span>
                                <span class="dott three"></span>
                                <span class="dott four"></span>
                                <span class="dott five"></span>
                                <span class="dott six"></span>
                                <span class="dott seven"></span>
                                <span class="dott eight"></span>
                                <span class="dott nine"></span>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Info Column -->
                <div class="form-column col-lg-6 col-md-12 col-sm-12">
                    <div class="inner-column">
                        <h3 class="business-one_title">Contact Information</h3>

                        <ul class="branch-info_list">
                            <li><strong>Address:</strong> {{ $web->address }}</li>
                            <li><strong>Email:</strong> <a href="mailto:{{ $web->email }}">{{ $web->email }}</a></li>
                            @if (!empty($web->phone))
                                <li><strong>Phone:</strong> <a href="tel:{{ $web->phone }}">{{ $web->phone }}</a></li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Business One -->


    <!-- Counter One -->
    <section class="counter-one" style="background-image:url({{ asset('home/images/background/pattern-4.png') }})">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Active Clients -->
                <div class="counter-one_block col-lg-4 col-md-6 col-sm-12">
                    <div class="counter-one_block-inner wow fadeInLeft" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="counter-one_counter"><span class="odometer" data-count="12400"></span> +</div>
                        <div class="counter-one_title">Active Clients</div>
                        <div class="counter-one_text">Investors worldwide trust {{ $siteName }} to grow their wealth securely.</div>
                    </div>
                </div>

                <!-- 5-Star Reviews -->
                <div class="counter-one_block col-lg-4 col-md-6 col-sm-12">
                    <div class="counter-one_block-inner wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="counter-one_counter"><span class="odometer" data-count="9250"></span> +</div>
                        <div class="counter-one_title">5-Star Reviews</div>
                        <div class="counter-one_text">Backed by thousands of positive reviews from satisfied investors and clients.</div>
                    </div>
                </div>

                <!-- Team Members -->
                <div class="counter-one_block col-lg-4 col-md-6 col-sm-12">
                    <div class="counter-one_block-inner wow fadeInRight" data-wow-delay="0ms" data-wow-duration="1500ms">
                        <div class="counter-one_counter"><span class="odometer" data-count="150"></span> +</div>
                        <div class="counter-one_title">Team Members</div>
                        <div class="counter-one_text">Our growing global team includes analysts, advisors, and investment strategists.</div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Counter One -->


    <!-- Testimonial One -->
    <section class="testimonial-one">
        <div class="auto-container">
            <div class="row clearfix">

                <!-- Carousel Column -->
                <div class="testimonial-one_carousel-column col-lg-6 col-md-12 col-sm-12">
                    <div class="testimonial-one_carousel-inner">
                        <!-- Sec Title -->
                        <div class="sec-title">
                            <div class="sec-title_title">Client’s testimonials</div>
                            <h2 class="sec-title_heading">We Are Proud to Share <br> What Our Clients Say</h2>
                        </div>
                        <div class="testimonial-one_review">Clients Reviews:</div>
                        <div class="single-item-carousel owl-carousel owl-theme">

                            <!-- Testimonial Block One -->
                            <div class="testimonial-block_one">
                                <div class="testimonial-block_one-inner">
                                    <div class="testimonial-block_one-text">“{{ $siteName }} makes investing easy. I was able to start with crypto and later expanded into gold and oil without stress. Their platform is simple and reliable.”</div>

                                    <div class="author-box">
                                        <div class="box-inner">
                                        <span class="author-image">
                                            <img src="https://ui-avatars.com/api/?name=Sarah+Jenkins&background=0D8ABC&color=fff" alt="Sarah Jenkins" />
                                        </span>
                                            <h5>Sarah Jenkins</h5>
                                            <div class="designation">Financial Analyst, UK</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block Two -->
                            <div class="testimonial-block_one">
                                <div class="testimonial-block_one-inner">
                                    <div class="testimonial-block_one-text">“Withdrawals are quick, and support is excellent. I’ve used several investment apps, but {{ $siteName }} is by far the most transparent and user-friendly.”</div>

                                    <div class="author-box">
                                        <div class="box-inner">
                                        <span class="author-image">
                                            <img src="https://ui-avatars.com/api/?name=Robert+Fleming&background=0D8ABC&color=fff" alt="Robert Fleming" />
                                        </span>
                                            <h5>Robert Fleming</h5>
                                            <div class="designation">Tech Consultant, USA</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Testimonial Block Three -->
                            <div class="testimonial-block_one">
                                <div class="testimonial-block_one-inner">
                                    <div class="testimonial-block_one-text">“I was skeptical at first, but {{ $siteName }} exceeded my expectations. My real estate investment returned steady growth, and the reporting tools are top-notch.”</div>

                                    <div class="author-box">
                                        <div class="box-inner">
                                        <span class="author-image">
                                            <img src="https://ui-avatars.com/api/?name=Laura+McKinney&background=0D8ABC&color=fff" alt="Laura McKinney" />
                                        </span>
                                            <h5>Laura McKinney</h5>
                                            <div class="designation">Entrepreneur, Canada</div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Image Column -->
                <div class="testimonial-one_image-column col-lg-6 col-md-12 col-sm-12">
                    <div class="testimonial-one_image-inner">
                        <div class="testimonial-one_image">
                            <img src="{{ asset('home/images/resource/testimonial.png') }}" alt="Testimonial Illustration" />
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Testimonial One -->


    <!-- News One -->
    <section class="news-one" style="background-image:url({{ asset('home/images/background/pattern-5.png') }})">
        <div class="auto-container">
            <!-- Sec Title -->
            <div class="sec-title centered">
                <div class="sec-title_title">Our latest news</div>
                <h2 class="sec-title_heading">You can check the news <br> as inspirations.</h2>
            </div>
            <div class="three-item-carousel owl-carousel owl-theme">

                <!-- News Block -->
                <div class="news-block">
                    <div class="inner-box">
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
    </section>
    <!-- End News One -->


@endsection
