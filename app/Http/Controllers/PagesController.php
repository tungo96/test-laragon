<?php

namespace App\Http\Controllers;

class PagesController extends Controller 
{
    public function pages() {
        return view('Home.home');
    }
}