<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    //
    function index () {
        return view('welcome');
    }
    function shop () {
        return view('shop');
    }
    function blog () {
        return view('blog');
    }
}
