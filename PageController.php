<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
     public function faq()
    {
        return view('pages.faq');
    }

     public function comingsoon()
    {
        return view('comingsoon');
    }
     public function about()
    {
        return view('pages.about');  
    }
     public function volunteers()
    {
    return view('pages.volunteers');
    }
     public function testimonials()
    {
    return view('pages.testimonials');
    }
     public function events()
    {
        return view('pages.news.events');
    }
     public function causes()
    {
        return view('pages.causes.causes');
    }
        public function awards()
    {
        return view('pages.awards');
    }
       public function start_fundraiser()
    {
        return view('pages.donating.start_fundraiser');
    }

public function clean_water()
    {
        return view('pages.donating.clean_water');

    }
    public function donations_disabled_kids()
    {
        return view('pages.donating.donations_disabled_kids');
    }
    public function donations()
    {
        return view('pages.donating.donations');
    }
        public function donations_list()
    {
        return view('pages.donating.donations_list');
    }
        public function give_education()
    {
        return view('pages.donating.give_education');
    }

    public function donate()
    {
        return view('pages.donating.donate');
    }
        public function index()
    {
        return view('pages.blog_details');
    }
           public function careers()
    {
        return view('pages.careers');
    }
               public function gallery()
    {
        return view('pages.gallery');
    }

               public function portifolio()
    {
        return view('pages.portifolio');
    }
}    