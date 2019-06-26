<?php

namespace App\Http\Controllers\backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
	/*
	*	Create new Controller instanse	
	*	@return void
	*/
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function dashboard(){
    	return view('backend.dashboard');
    }
}
