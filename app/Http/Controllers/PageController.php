<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
    	
    	return view('welcome');
    }

    public function contact()
    {
    	
    	return view('layouts.pages.contact');
    }

    public function about()
    {
    	
    	return view('layouts.pages.about');
    }

}
