<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SebastianBergmann\Template\Template;

class HomeController extends Controller
{
    public function index()
    {
        return view('index');
        // return view('template.template');
        // return view('template.abc');
    }

    public function history()
    {
        return view('history');
    }
    public function visimisi()
    {
        return view('visimisi');
    }
    public function organization()
    {
        return view('organization');
    }
    public function plumping()
    {
        return view('plumping');
    }
    public function electrical()
    {
        return view('electrical');
    }
    public function mechanical()
    {
        return view('mechanical');
    }
    public function electronic()
    {
        return view('electronic');
    }
    public function firegas()
    {
        return view('firegas');
    }
    // public function services()
    // {
    //     return view('services');
    // }
    public function project()
    {
        return view('project');
    }
    public function projecttestpopup()
    {
        return view('projecttestpopup');
    }

    public function testimonial()
    {
        return view('testimonial');
    }
    public function contactus()
    {
        return view('contactus');
    }
}
