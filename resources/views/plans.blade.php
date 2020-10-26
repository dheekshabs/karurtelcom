@extends('layouts.web')

@section('title', 'Plans')

@section('content')
 
 <!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image:url(images/resources/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content text-center clearfix">
                    <div class="breadcrumb-menu">
                        <ul class="clearfix">
                            <li><a href="{{ url('/') }}">Home</a></li>
                            <li class="active">Plans</li>
                        </ul>    
                    </div>
                    <div class="title">
                       <h1>Plans</h1>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area--> 

<!--Start services style1 area-->
<section class="services-style1-area secpd1">
    <div class="container">
        <div class="sec-title text-center">
            <h6>Our Broadband Plans</h6>
            <div class="title">Limited Plans</div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="service-carousel owl-carousel owl-theme"> 
                    <!--Start single service style1--> 
                    <div class="single-service-style1 text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="title-holder">
                            <h3>₹229.00</h3>
                            <span>per month</span>
                        </div>
                        <div class="details-box">
                            <ul class="single-box">
                                <li class="top" style="color: #dd0041;">15 Mbps Speed</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">200 GB Data</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">FUP 2 Mbps Unlimited</li>
                            </ul>
                            <br>
                            <div class="button">
                                <a class="btn-two" href="{{ route('planselection', ['plan' => '229']) }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1--> 
                    <div class="single-service-style1 text-center wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                        <div class="title-holder">
                            <h3>₹350.00</h3>
                            <span>per month</span>
                        </div>
                        <div class="details-box">
                            <ul class="single-box">
                                <li class="top" style="color: #dd0041;">30 Mbps Speed</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">200 GB Data</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">FUP 2 Mbps Unlimited</li>
                            </ul>
                            <br>
                            <div class="button">
                                <a class="btn-two" href="{{ route('planselection', ['plan' => '350']) }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1--> 
                    <div class="single-service-style1 text-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1200ms">
                        <div class="title-holder">
                            <h3>₹550.00</h3>
                            <span>per month</span>
                        </div>
                        <div class="details-box">
                            <ul class="single-box">
                                <li class="top" style="color: #dd0041;">50 Mbps Speed</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">350 GB Data</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">FUP 2 Mbps Unlimited</li>
                            </ul>
                            <br>
                            <div class="button">
                                <a class="btn-two" href="{{ route('planselection', ['plan' => '550']) }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    
                    <!--Start single service style1--> 
                    <div class="single-service-style1 text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="title-holder">
                            <h3>₹700.00</h3>
                            <span>per month</span>
                        </div>
                        <div class="details-box">
                            <ul class="single-box">
                                <li class="top" style="color: #dd0041;">75 Mbps Speed</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">450 GB Data</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">FUP 4 Mbps Unlimited</li>
                            </ul>
                            <br>
                            <div class="button">
                                <a class="btn-two" href="{{ route('planselection', ['plan' => '700']) }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1--> 
                    <div class="single-service-style1 text-center wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                        <div class="title-holder">
                            <h3>₹850.00</h3>
                            <span>per month</span>
                        </div>
                        <div class="details-box">
                            <ul class="single-box">
                                <li class="top" style="color: #dd0041;">100 Mbps Speed</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">500 GB Data</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">FUP 4 Mbps Unlimited</li>
                            </ul>
                            <br>
                            <div class="button">
                                <a class="btn-two" href="{{ route('planselection', ['plan' => '850']) }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1--> 
                    <div class="single-service-style1 text-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1200ms">
                        <div class="title-holder">
                            <h3>₹1000.00</h3>
                            <span>per month</span>
                        </div>
                        <div class="details-box">
                            <ul class="single-box">
                                <li class="top" style="color: #dd0041;">150 Mbps Speed</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">500 GB Data</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">FUP 5 Mbps Unlimited</li>
                            </ul>
                            <br>
                            <div class="button">
                                <a class="btn-two" href="{{ route('planselection', ['plan' => '1000']) }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End services style1 area-->

<!--Start services style1 area-->
<section class="services-style1-area">
    <div class="container">
        <div class="sec-title text-center">
            <h6>Our Broadband Plans</h6>
            <div class="title">Unlimited Plans</div>
        </div>
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                <div class="service-carousel owl-carousel owl-theme"> 
                    
                    <!--Start single service style1--> 
                    <div class="single-service-style1 text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="title-holder">
                            <h3>₹700.00</h3>
                            <span>per month</span>
                        </div>
                        <div class="details-box">
                            <ul class="single-box">
                                <li class="top" style="color: #dd0041;">20 Mbps Speed</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">Unlimited Data</li>
                            </ul>
                            <br>
                            <div class="button">
                                <a class="btn-two" href="{{ route('planselection', ['plan' => '700 Unlimited']) }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1--> 
                    <div class="single-service-style1 text-center wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                        <div class="title-holder">
                            <h3>₹800.00</h3>
                            <span>per month</span>
                        </div>
                        <div class="details-box">
                            <ul class="single-box">
                                <li class="top" style="color: #dd0041;">30 Mbps Speed</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">Unlimited Data</li>
                            </ul>
                            <br>
                            <div class="button">
                                <a class="btn-two" href="{{ route('planselection', ['plan' => '800 Unlimited']) }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                    <!--Start single service style1--> 
                    <div class="single-service-style1 text-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1200ms">
                        <div class="title-holder">
                            <h3>₹1000.00</h3>
                            <span>per month</span>
                        </div>
                        <div class="details-box">
                            <ul class="single-box">
                                <li class="top" style="color: #dd0041;">40 Mbps Speed</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">Unlimited Data</li>
                            </ul>
                            <br>
                            <div class="button">
                                <a class="btn-two" href="{{ route('planselection', ['plan' => '1000 Unlimited']) }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-style1 text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                        <div class="title-holder">
                            <h3>₹1099.00</h3>
                            <span>per month</span>
                        </div>
                        <div class="details-box">
                            <ul class="single-box">
                                <li class="top" style="color: #dd0041;">50 Mbps Speed</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">Unlimited Data</li>
                            </ul>
                            <br>
                            <div class="button">
                                <a class="btn-two" href="{{ route('planselection', ['plan' => '1099 Unlimited']) }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-style1 text-center wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                        <div class="title-holder">
                            <h3>₹1199.00</h3>
                            <span>per month</span>
                        </div>
                        <div class="details-box">
                            <ul class="single-box">
                                <li class="top" style="color: #dd0041;">100 Mbps Speed</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">Unlimited Data</li>
                            </ul>
                            <br>
                            <div class="button">
                                <a class="btn-two" href="{{ route('planselection', ['plan' => '1199 Unlimited']) }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="single-service-style1 text-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1200ms">
                        <div class="title-holder">
                            <h3>₹1299.00</h3>
                            <span>per month</span>
                        </div>
                        <div class="details-box">
                            <ul class="single-box">
                                <li class="top" style="color: #dd0041;">200 Mbps Speed</li>
                            </ul>
                            <ul class="single-box">
                                <li class="top clr2" style="color: #03a5a6;">Unlimited Data</li>
                            </ul>
                            <br>
                            <div class="button">
                                <a class="btn-two" href="{{ route('planselection', ['plan' => '1299 Unlimited']) }}">Book Now</a>
                            </div>
                        </div>
                    </div>
                    <!--End single service style1-->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End services style1 area-->

@endsection