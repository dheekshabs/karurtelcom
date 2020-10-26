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
                            <li class="active">Contact Us</li>
                        </ul>    
                    </div>
                    <div class="title">
                       <h1>Contact Us</h1>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area--> 

<!--Start Contact Info area-->
<section class="contact-info-area">
    <div class="container">
        <div class="row">
            <!--Start single info box-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-info-box text-center wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1200ms">
                    <div class="title-holder">
                        <span>get to know</span>
                        <h3>About Karur Telecom</h3>
                    </div>
                    <ul class="icon-holder">
                        <li><span class="flaticon-doctor"></span></li>
                    </ul>
                    <ul class="text">
                        <li>Karur Telecom is an Internet Service Provider, specializing in Internet Bandwidth...</li> 
                    </ul>
                </div>
            </div>
            <!--End single info box-->
            <!--Start single info box-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-info-box text-center wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1200ms">
                    <div class="title-holder">
                        <span>visit us</span>
                        <h3>Our Address</h3>
                    </div>
                    <ul class="icon-holder">
                        <li><span class="flaticon-fast clr2"></span></li>
                    </ul>
                    <ul class="text">
                        <li>SKS Complex, Karur West, Karur - 639001</li>
                        <li>(Opposite Bus Stand Behind Eswaran Kovil)</li>
                    </ul>
                </div>
            </div>
            <!--End single info box-->
            <!--Start single info box-->
            <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                <div class="single-info-box text-center wow fadeInUp" data-wow-delay="600ms" data-wow-duration="1200ms">
                    <div class="title-holder">
                        <span>Call or write</span>
                        <h3>Phone & Email</h3>
                    </div>
                    <ul class="icon-holder">
                        <li><span class="flaticon-call clr3"></span></li>
                        <li><span class="flaticon-message"></span></li>
                    </ul>
                    <ul class="text">
                        <li>9768797688, 7373736269</li>
                        <li>info@karurtelecom.com</li>
                    </ul>
                </div>
            </div>
            <!--End single info box-->
        </div>
    </div>
</section>
<!--End Contact Info Area-->

<!--Start Contact Form Area-->
<section class="contact-form-area">
    <div class="container">
        <div class="sec-title text-center">
            <h6>Contact with us</h6>
            <div class="title">Write us a Message</div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="contact-form text-center">
                    <form method="POST" action="{{ route('plansubmit') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-box">   
                                    <input type="text" name="name" value="" placeholder="Your Name" required="">
                                    <div class="icon">
                                        <i class="fa fa-user" aria-hidden="true"></i>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <div class="input-box"> 
                                    <input type="email" name="email" value="" placeholder="Email Address" required="">
                                    <div class="icon">
                                        <i class="fa fa-envelope" aria-hidden="true"></i>
                                    </div>
                                </div>    
                            </div>    
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-box"> 
                                    <input type="text" name="phone" value="" placeholder="Phone Number" required="">
                                    <div class="icon">
                                        <i class="fa fa-phone" aria-hidden="true"></i>
                                    </div>
                                </div>    
                            </div>
                            <div class="col-md-6">
                                <div class="select-box"> 
                                    <select name="plan">
                                        <option value="">Please Select Your Plan</option>
                                        <option value="₹229-Plan">₹229-Plan</option>
                                        <option value="₹229-Plan">₹350-Plan</option>
                                        <option value="₹229-Plan">₹550-Plan</option>
                                        <option value="₹229-Plan">₹700-Plan</option>
                                        <option value="₹229-Plan">₹850-Plan</option>
                                        <option value="₹229-Plan">₹1000-Plan</option>
                                        <option value="₹229-Plan">₹700-Unlimited Plan</option>
                                        <option value="₹229-Plan">₹800-Unlimited Plan</option>
                                        <option value="₹229-Plan">₹1000-Unlimited Plan</option>
                                        <option value="₹229-Plan">₹1099-Unlimited Plan</option>
                                        <option value="₹229-Plan">₹1199-Unlimited Plan</option>
                                        <option value="₹229-Plan">₹1299-Unlimited Plan</option>
                                    </select> 
                                </div>    
                            </div>      
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="input-box">    
                                    <textarea name="address" placeholder="Your Address" required=""></textarea> 
                                    <div class="icon">
                                        <i class="fa fa-comment" aria-hidden="true"></i>
                                    </div>
                                </div>   
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="button">
                                    <input type="submit" class="btn-one" name="Submit">
                                </div>      
                            </div>
                        </div>
                    </form>
                </div>
                    
            </div>
        </div>
    </div>
</section>
<!--End Contact Form Area-->
@endsection