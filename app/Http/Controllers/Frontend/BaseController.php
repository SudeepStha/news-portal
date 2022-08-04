<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Menu;
use Carbon\Carbon;
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

        $yesterdayarticle = Article::orderBy('id', 'desc')->where('created_at', Carbon::yesterday())->limit('3')->get();
        view()->share([
            'yesterdayarticle' => $yesterdayarticle
        ]);

        $category = Article::orderBy('id', 'desc')->limit('5')->get();
        View::share([
            'category'=> $category
        ]);
    }
}
