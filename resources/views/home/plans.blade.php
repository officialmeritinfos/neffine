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


@endsection
