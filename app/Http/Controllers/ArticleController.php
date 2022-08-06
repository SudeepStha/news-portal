<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Menu;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $article = Article::all();
        $menu = Menu::all();
        return View('backend.article.index', compact('article', 'menu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $menu = Menu::all();
        return view('backend.article.create', compact('menu'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request -> validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
            'image' => 'required'
        ]);


        $article = new Article();
        $article->title = $request->title;
        $article->slug = Str::slug($request->slug);
        $article->description = $request->description;

        if($request->hasFile('image')){
            $fileName = $request->image;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('article',$newName);
            $article->image = "article/$newName";

        }

        $article->save();

        $article->menus()->attach($request->menu_id);

        return redirect()->back()->with('status', 'Your article has been posted successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::find($id);
        return view('backend.article.show', compact('article'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::find($id);
        $menu = Menu::all();
        return view('backend.article.edit', compact('article', 'menu'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request -> validate([
            'title' => 'required',
            'slug' => 'required',
            'description' => 'required',
        ]);


        $article =  Article::find($id);
        $article->title = $request->title;
        $article->slug = Str::slug($request->slug);
        $article->description = $request->description;

        if($request->hasFile('image')){
            $fileName = $request->image;
            $newName = time() . $fileName->getClientOriginalName();
            $fileName->move('article',$newName);
            $article->image = "article/$newName";

        }

        $article->update();

        $article->menus()->sync($request->menu_id);

        return redirect()->back()->with('status', 'Your article has been updated successfully.');
   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $article = Article::find($id);
        $article->delete();

        return redirect()->back()->with('status','Your article has been deleted successfully.');
    }

    public function upload(Request $request)
    {
        if($request->hasFile('upload')){
            $file = $request->upload;
            $newName = time() . $file->getClientOriginalExtension();
            $file->move('article_image', $newName);
            $url = asset("article_image/$newName");
            return response()->json([
                'filename' => $newName, 'uploaded' => 1, 
                'url' => $url
            ]);
        }
    }
}
