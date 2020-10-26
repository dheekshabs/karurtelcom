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
                            <li class="active">Plan Selection</li>
                        </ul>    
                    </div>
                    <div class="title">
                       <h1>Selected Plan - ₹{{ $plans }}</h1>
                    </div>
                </div>
            </div>
        </div>
	</div>
</section>
<!--End breadcrumb area--> 

<!--Start Contact Form Area-->
<section class="contact-form-area">
    <div class="container">
        <div class="sec-title text-center">
            <!-- <h6>Enter your details</h6> -->
            <div class="title">Enter your details</div>
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
                                <div class="input-box"> 
                                    <input type="text" name="plan" value="₹{{ $plans }}-Plan" readonly=""> 
                                    <div class="icon">
                                        <i class="fa fa-file-text" aria-hidden="true"></i>
                                    </div>
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