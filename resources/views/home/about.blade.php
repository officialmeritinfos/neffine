@extends('home.base')
@section('content')
    <!-- Page Title -->
    <section class="page-title" style="background-image:url({{asset('home/images/background/3.jpg')}})">
        <div class="auto-container">
            <h2>{{$pageName}}</h2>
            <ul class="bread-crumb clearfix">
                <li><a href="{{url('/')}}">Home</a></li>
                <li>{{$pageName}}</li>
            </ul>
        </div>
    </section>
    <!-- End Page Title -->
    <main>
        <!-- section content begin -->
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-10 col-lg-9 text-center">
                        <h1>Putting our clients first <span class="text-highlight">since 2019</span></h1>
                        <p class="lead text-muted">
                            For more than 5 years, we’ve been empowering clients by helping them take
                            control of their financial lives.
                        </p>
                    </div>
                    <div class="col-12 mt-3">
                        <div class="row gy-2 gy-md-2 gx-0 gx-md-2 gx-lg-4">
                            <div class="col-md-12 d-flex align-items-start">
                                <div class="icon-wrap bg-primary rounded-circle flex-shrink-0 me-2">
                                    <i class="fas fa-leaf fa-lg text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="h4">About Us</h3>
                                    <p class="mb-0">
                                        {{$siteName}} is an investment company that allows investors - small and large scale to
                                        seamlessly invest in crypto mining with guaranteed returns.
                                        Powered by advanced artificial intelligence (AI) algorithms, {{$siteName}} provides
                                        cutting-edge solutions to help clients earn from the dynamic world of cryptocurrencies
                                        with confidence and success.<br/>
                                        With our AI-driven investment strategies, we analyze extensive market data, historical
                                        trends, and real-time indicators to make informed investment decisions and optimize
                                        portfolio performance.
                                        <br/>
                                        Moreover, our AI-powered trading systems revolutionize the way our clients approach the
                                        market. By leveraging real-time analysis, historical patterns, and indicators, our
                                        trading algorithms execute trades with precision and accuracy, enabling our clients
                                        to capitalize on market opportunities and enhance their trading performance.
                                    </p>
                                </div>
                            </div>
                            <div class="col-md-12 d-flex align-items-start">
                                <div class="icon-wrap bg-primary rounded-circle flex-shrink-0 me-2">
                                    <i class="fas fa-hourglass-end fa-lg text-primary"></i>
                                </div>
                                <div>
                                    <h3 class="h4">History</h3>
                                    <p class="mb-0">
                                        In 20015, {{$siteName}} was founded by Leonard Zurich, an Irish American, envisioning a future where cryptocurrencies and AI intersect
                                        to revolutionize the financial landscape. By 2018-2019,
                                        the company focuses on research and development, exploring the potential of
                                        cryptocurrencies and laying the foundation for AI-driven solutions. By 2019-2012,
                                        {{$siteName}} establishes itself as a trusted name in the cryptocurrency industry,
                                        offering innovative investment strategies and attracting a growing client base.
                                        By 2021,{{$siteName}} reaches a milestone, managing a diverse portfolio of clients and establishing
                                        itself as a leader in AI-powered cryptocurrency solutions. The company's commitment to
                                        innovation, expertise, and client success sets it apart in the industry.
                                        2022-2023,{{$siteName}} continues to adapt to the evolving cryptocurrency landscape, embracing new
                                        technologies and expanding its range of services. They stay at the forefront of AI
                                        advancements, further optimizing their investment strategies, mining operations,
                                        and trading algorithms.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section content end -->

        <!-- section content begin -->
        <section class="py-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-9">
                        <div class="row row-cols-1 row-cols-lg-2 align-items-center gy-3">
                            <div class="col text-md-center text-lg-start">
                                <h4 class="text-secondary mb-1">Number speaks</h4>
                                <h1>We always ready<br>for a challenge.</h1>
                            </div>
                            <div class="col">
                                <div class="row align-items-start gx-0 mb-2 mb-md-4">
                                    <div class="col-12 col-md-4 text-md-end border-bottom border-primary">
                                        <h1 class="text-primary">
                                            <span class="count" data-counter-end="410">410</span>
                                        </h1>
                                    </div>
                                    <div class="col-12 col-md-8 mt-2 mt-md-0 ps-md-4">
                                        <h5>Trading instruments</h5>
                                        <p>
                                            Because we believe in diversification of portfolio, we engage in diverse activities
                                            from cryptocurrency investments, to precious mineral mining to NFTs, to stocks,
                                            and to ETFs.
                                        </p>
                                    </div>
                                </div>
                                <div class="row align-items-start gx-0">
                                    <div class="col-12 col-md-4 text-md-end border-bottom border-primary">
                                        <h1 class="text-primary">
                                            <span class="count" data-counter-end="107">50+</span>
                                        </h1>
                                    </div>
                                    <div class="col-12 col-md-8 mt-2 mt-md-0 ps-md-4">
                                        <h5>Countries covered</h5>
                                        <p>
                                            We are present in over 100 countries including the United States, United Kingdom,
                                            Australia, Denmark, Israel, Saudi Arabia, Canada, China and Switzerland to name
                                            but a few.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- section content end -->

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

        <!-- Services One -->
        <section class="services-one style-two">
            <div class="auto-container">
                <!-- Sec Title -->
                <div class="sec-title style-two centered">
                    <div class="sec-title_title">Who Choose Us</div>
                    <h2 class="sec-title_heading">We are dedicated to serve <br> you all time.</h2>
                </div>
                <div class="row clearfix">

                    <!-- Service Block One / Style Two -->
                    <div class="service-block_one style-two col-lg-4 col-md-6 col-sm-12">
                        <div class="service-block_one-inner">
                            <div class="service-block_one-icon flaticon-website"></div>
                            <h5 class="service-block_one-heading">Strategy & Planning</h5>
                            <div class="service-block_one-text">
                                At {{$siteName}}, we strategize for every investment opportunity presented to our users.
                            </div>
                            <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/service.jpg')}})">
                                <div class="service-block_one-overlay-inner">
                                    <div class="upper-box">
                                        <div class="service-block_one-icon-two flaticon-website"></div>
                                        <h5 class="service-block_one-heading-two"><a href="#">Strategy & Planning</a></h5>
                                    </div>
                                    <div class="service-block_one-text-two">
                                        At {{$siteName}}, we strategize for every investment opportunity presented to our users.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block One / Style Two -->
                    <div class="service-block_one style-two col-lg-4 col-md-6 col-sm-12">
                        <div class="service-block_one-inner">
                            <div class="service-block_one-icon flaticon-market"></div>
                            <h5 class="service-block_one-heading">Program management</h5>
                            <div class="service-block_one-text">
                                Each user is given a dedicated account manager to help guide them in their
                                portfolio growth.
                            </div>
                            <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/service.jpg')}})">
                                <div class="service-block_one-overlay-inner">
                                    <div class="upper-box">
                                        <div class="service-block_one-icon-two flaticon-market"></div>
                                        <h5 class="service-block_one-heading-two"><a href="#">Program management</a></h5>
                                    </div>
                                    <div class="service-block_one-text-two">
                                        Each user is given a dedicated account manager to help guide them in their
                                        portfolio growth.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block One / Style Two -->
                    <div class="service-block_one style-two col-lg-4 col-md-6 col-sm-12">
                        <div class="service-block_one-inner">
                            <div class="service-block_one-icon flaticon-bank-building-silhouette"></div>
                            <h5 class="service-block_one-heading">Automated Returns</h5>
                            <div class="service-block_one-text">
                                Follow through with your investment as it counts and watch your earning grow by the day.
                            </div>
                            <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/service.jpg')}})">
                                <div class="service-block_one-overlay-inner">
                                    <div class="upper-box">
                                        <div class="service-block_one-icon-two flaticon-bank-building-silhouette"></div>
                                        <h5 class="service-block_one-heading-two"><a href="#">Automated Returns</a></h5>
                                    </div>
                                    <div class="service-block_one-text-two">
                                        Follow through with your investment as it counts and watch your earning grow by the day.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block One / Style Two -->
                    <div class="service-block_one style-two col-lg-4 col-md-6 col-sm-12">
                        <div class="service-block_one-inner">
                            <div class="service-block_one-icon flaticon-charity"></div>
                            <h5 class="service-block_one-heading">Investment Policy</h5>
                            <div class="service-block_one-text">
                                At {{$siteName}} is where AI meets Human kmowledge for efficient policies that provide for
                                the best result.
                            </div>
                            <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/service.jpg')}})">
                                <div class="service-block_one-overlay-inner">
                                    <div class="upper-box">
                                        <div class="service-block_one-icon-two flaticon-charity"></div>
                                        <h5 class="service-block_one-heading-two"><a href="#">Investment Policy</a></h5>
                                    </div>
                                    <div class="service-block_one-text-two">
                                        At {{$siteName}} is where AI meets Human kmowledge for efficient policies that provide for
                                        the best result.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block One / Style Two -->
                    <div class="service-block_one style-two col-lg-4 col-md-6 col-sm-12">
                        <div class="service-block_one-inner">
                            <div class="service-block_one-icon flaticon-business-intelligence"></div>
                            <h5 class="service-block_one-heading">Financial Advices</h5>
                            <div class="service-block_one-text">
                                We engage our clients on their financial need and guide them properly to it.
                            </div>
                            <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/service.jpg')}})">
                                <div class="service-block_one-overlay-inner">
                                    <div class="upper-box">
                                        <div class="service-block_one-icon-two flaticon-business-intelligence"></div>
                                        <h5 class="service-block_one-heading-two"><a href="#">Financial Advices</a></h5>
                                    </div>
                                    <div class="service-block_one-text-two">
                                        We engage our clients on their financial need and guide them properly to it.
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Service Block One / Style Two -->
                    <div class="service-block_one style-two col-lg-4 col-md-6 col-sm-12">
                        <div class="service-block_one-inner">
                            <div class="service-block_one-icon flaticon-shuttle"></div>
                            <h5 class="service-block_one-heading">Zero risk  Plan</h5>
                            <div class="service-block_one-text">
                                Because we are using a super-model, our market analysis are always 99% accurate, and 1% due to
                                human error. However, over the years, we have come to diversify and that has cut down the risk
                                ratio to zero(0)
                            </div>
                            <div class="service-block_one-overlay" style="background-image:url({{asset('home/images/resource/service.jpg')}})">
                                <div class="service-block_one-overlay-inner">
                                    <div class="upper-box">
                                        <div class="service-block_one-icon-two flaticon-shuttle"></div>
                                        <h5 class="service-block_one-heading-two"><a href="#">Zero risk  Plan</a></h5>
                                    </div>
                                    <div class="service-block_one-text-two">
                                        Because we are using a super-model, our market analysis are always 99% accurate, and 1% due to
                                        human error. However, over the years, we have come to diversify and that has cut down the risk
                                        ratio to zero(0)
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section>
        <!-- End Services One -->

    </main>

@endsection
