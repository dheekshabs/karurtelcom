@extends('layouts.web')

@section('title', 'Home')

@section('content')
 
<!--Start breadcrumb area-->     
<section class="breadcrumb-area" style="background-image:url(images/resources/breadcrumb-bg.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="inner-content text-center clearfix">
                    <div class="breadcrumb-menu">
                        <ul class="clearfix">
                            <li><a href="index-2.html">Home</a></li>
                            <li class="active">About</li>
                        </ul>    
                    </div>
                    <div class="title">
                       <h1>About Us</h1>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area--> 

<!--Start choose-area-->
<section class="choose-area secpd1">
    <div class="container">
        <div class="row">
            <div class="col-xl-6">
                <div class="choose-content-box">
                    <div class="sec-title">
                        <h6>Why Karur Telecom?</h6>
                        <div class="title">Ultra fast and Ultra<br> Reliable</div>
                    </div>
                    <div class="inner-content">
                        <div class="text" style="text-align: justify;">
                            <p>Karur Telecom Pvt Ltd was started in the year 2017 as an ISP with a License from the Department of Telecom.</p>
                            <p>Karur Telecom Pvt Ltd is an Internet Service Provider, specializing in Internet Bandwidth, Internet Data Centers,  Managed Hosting, Remote Infrastructure Monitoring & Management, Mail & Messaging Services and Application Hosting Services.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-6">
                <div class="choose-image-box">
                    <img src="images/resources/choose-image.jpg" alt="Awesome Image">
                </div>
            </div>
            <div class="row">
                <div class="col-xl-12">
                    <p style="text-align: justify;">Karur Telecom Pvt Ltd is engaged in building the next generation Optic Fiber Cable services for providing Broadband and Internet application  services  to Enterprises, government institutions, homes, societies, individuals as well as other service providers.</p>
                    <p style="text-align: justify;">We have multiple carrier-neutral POP’s located  in Tamilnadu.  These  are  equipped  with  best-in-class infrastructure, tools  and  skilled  personnel  giving  our  customers  seamless  connectivity  solutions with redundancy to any of these POP’s. Karur Telecom Pvt Ltd assures mission critical support to its customers in association with its major service providers for local loops and alliance partners for application hosting services.</p>
                    <p style="text-align: justify;">Karur Telecom Pvt Ltd also has the distinction of being the largest Fiber Network operator with more than 40Km’s of owned fiber network in and around Karur deployed and has more than 200+ subscribers.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End choose-area-->

<!--Start Testimonial Area-->
<section  class="testimonial-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="testimonial-box">
                    <div class="testimonial-text">
                        <p>Testimonials</p>    
                    </div>   
                    <div class="testimonial-carousel owl-carousel owl-theme">
                        <!--Start Single Testimonial Item-->
                        <div class="single-testimonial-item text-center">
                            <div class="image-box">
                                <img src="images/testimonial/pp.jpg" alt="Awesome Image">
                                <div class="icon">
                                    <span class="flaticon-quote"></span>
                                </div>
                            </div>
                            <div class="text-box">
                                <p>Very Good Internet service provider. Speeds are good. friendly customer service. Wish they come up soon to many places.</p>
                            </div>
                            <div class="client-name">
                                <h5>Ganesh Thangavel<span>  - Our Customers</span></h5>
                            </div>
                        </div>    
                        <!--End Single Testimonial Item-->
                        <!--Start Single Testimonial Item-->
                        <div class="single-testimonial-item text-center">
                            <div class="image-box">
                                <img src="images/testimonial/tes-1.png" alt="Awesome Image">
                                <div class="icon">
                                    <span class="flaticon-quote"></span>
                                </div>
                            </div>
                            <div class="text-box">
                                <p>This is due to their excellent service, competitive pricing and customer support. It’s throughly refresing to get such a personal touch.</p>
                            </div>
                            <div class="client-name">
                                <h5>Arun<span>  - Our Customers</span></h5>
                            </div>
                        </div>    
                        <!--End Single Testimonial Item-->   
                        <!--Start Single Testimonial Item-->
                        <div class="single-testimonial-item text-center">
                            <div class="image-box">
                                <img src="images/testimonial/tes-1.png" alt="Awesome Image">
                                <div class="icon">
                                    <span class="flaticon-quote"></span>
                                </div>
                            </div>
                            <div class="text-box">
                                <p>i'm using last 1 week it's amazing speed.Only on rare time the network got loss, but it is fine. I am highly satisfied with the service and suggest my friends to have this</p>
                            </div>
                            <div class="client-name">
                                <h5>Suresh Kumar<span>  - Our Customers</span></h5>
                            </div>
                        </div>    
                        <!--End Single Testimonial Item-->       
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--End Testimonial Area-->
@endsection