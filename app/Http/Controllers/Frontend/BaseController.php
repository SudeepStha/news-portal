<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Menu;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class BaseController extends Controller
{
    public function __construct()
    {
        $menus = Menu::orderBy('position','asc')->where('status','1')->get();
        View::share([
            'menus' => $menus
        ]);

        $toparticles = Article::orderBy('id', 'desc')->limit('3')->get();
        View::share([
            'toparticles' => $toparticles
        ]);
    }
}
