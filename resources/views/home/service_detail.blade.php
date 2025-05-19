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

    <!-- Start Services Details Area -->
    <section class="promo-section ptb-100" style="margin-top: 3rem;margin-bottom: 5rem;">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading mb-5 text-center">
                        <h2>{{$service->title}}</h2>
                    </div>
                </div>
            </div>
            <!--pricing faq start-->
            <div class="row">
                <div class="col-md-12">
                    <img src="{{asset('home/serv/'.$service->photo)}}" alt="image">
                </div>

                <div class="col-lg-12">
                    <p>
                        {!! str_replace('MYSITE',$siteName,$service->content) !!}
                    </p>

                </div>

            </div>

        </div>

    </section>

@endsection
