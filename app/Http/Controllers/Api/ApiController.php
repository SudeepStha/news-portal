<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Resources\ArticleResource;
use App\Http\Resources\MenuResource;
use App\Models\Article;
use App\Models\Menu;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    //politics News
    public function article(Request $request)
    {
        $slug = $request->slug;
        $category = Menu::where('slug',$slug)->first();
        $articles = $category->articles;
        return ArticleResource::collection($articles);
    }

    //menus
    public function menus(Request $request)
    {
        $slug = $request->slug;
        $menu = Menu::where('slug', $slug)->first();
        return MenuResource::collection($menu);
    }
}
