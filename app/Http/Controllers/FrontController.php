<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index(){
        return view('front.index');
    }

    public function about(){
        return view('front.about');
    }

    public function activities(){
        return view('front.activities');
    }

    public function panelistes(){
        return view('front.panelistes');
    }

    public function calendrier(){
        return view('front.calendrier');
    }

    public function stands(){
        return view('front.stands');
    }

    public function b2b(){
        return view('front.b2b');
    }

    public function b2g(){
        return view('front.b2g');
    }

    public function tablesRondes(){
        return view('front.tables-rondes');
    }

    public function partenaires(){
        return view('front.partenaires');
    }

    public function contact(){
        return view('front.contact');
    }

    public function test (){
        return view('front.test');
    }
}
