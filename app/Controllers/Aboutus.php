<?php
namespace App\Controllers;

class Aboutus extends BaseController
{
    public function index()
    {
        return view('about/recent_post');
    }

    public function contact()
    {
        echo "contact page";
    }

    public function faqs()
    {
        echo "Faqs page";
    }

}