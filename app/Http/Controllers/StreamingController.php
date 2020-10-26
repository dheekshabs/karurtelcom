<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StreamingController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    
    public function streaming(Request $request)
    {
        return view('live-streaming');
    } 
}
