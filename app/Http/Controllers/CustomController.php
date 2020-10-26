<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use App\Mail\EnquiryMail;
use Mail;
use App\Models\Enquiry;

class CustomController extends Controller
{
    public function index()
    {
    	return view('welcome');
    }

    public function about()
    {
    	return view('about-us');
    }

    public function plans()
    {
    	return view('plans');
    }

    public function contact()
    {
    	return view('contact-us');
    }

    public function planSelection(Request $request)
    {
    	$plans = $request->get('plan');

    	return view('plan-selection', compact('plans'));
    }

    public function planSubmit(Request $request)
    {   
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $plan = $request->input('plan');
        $address = $request->input('address');

        $enquiry = new Enquiry;
        $enquiry->name = $name;
        $enquiry->email = $email;
        $enquiry->mobile_number = $phone;
        $enquiry->address = $address;
        $enquiry->notes = 'Submitted';
        $enquiry->plan = $plan;
        $enquiry->status = 'wip';
        $enquiry->save();


        $myEmail = 'info@karurtelecom.in';
   
        $details = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'plan' => $plan,
            'address' => $address
        ];
  
        Mail::to($myEmail)->cc($email)->send(new EnquiryMail($details));

        return view('plans');
    } 

    public function contactSubmit(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $phone = $request->input('phone');
        $plan = $request->input('plan');
        $address = $request->input('address');

        $enquiry = new Enquiry;
        $enquiry->name = $name;
        $enquiry->email = $email;
        $enquiry->mobile_number = $phone;
        $enquiry->address = $address;
        $enquiry->notes = 'Submitted';
        $enquiry->plan = $plan;
        $enquiry->status = 'wip';
        $enquiry->save();

        $myEmail = 'info@karurtelecom.in';
   
        $details = [
            'name' => $name,
            'email' => $email,
            'phone' => $phone,
            'plan' => $plan,
            'address' => $address
        ];

        Mail::to($myEmail)->cc($email)->send(new EnquiryMail($details));

        return view('contact-us');
    } 

}
