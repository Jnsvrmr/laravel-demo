<?php

namespace App\Http\Controllers;

class PageController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function vangsten() {
        return view('pages.vangsten');
    }

    public function hobby() {
        return view('pages.hobby');
    }

    public function contact() {
        return view('pages.contact');
    }
}

