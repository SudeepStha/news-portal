<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function home()
    {
        return view('frontend.pages.home');
    }

    
}
