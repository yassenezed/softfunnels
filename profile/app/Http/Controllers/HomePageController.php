<?php

namespace App\Http\Controllers;


class HomePageController extends Controller
{
  
    public function index()
    {
        return view('homepagefront.index');
    }
    public function about()
    {
        return view('homepagefront.about');
    }
    public function contact()
    {
        return view('homepagefront.contact');
    }  
    public function services()
    {
        return view('homepagefront.services');
    }

}
