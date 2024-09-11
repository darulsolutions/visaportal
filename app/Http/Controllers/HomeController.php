<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $title='';
        $page='';
        $link='';
        return view('frontend.home',compact('title','page','link'));
    }
}
