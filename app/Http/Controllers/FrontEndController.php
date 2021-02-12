<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Categories;
use App\Article;

class FrontEndController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Article::orderBy('created_at', 'DESC')->get();
        $categories = Categories::all();
        $data_article = array();
        foreach ($articles as $article) {
            $category = Categories::findOrFail($article->categories_id);
            $data = (object) array(
                "id" => $article->id,
                "categories_id" => $article->categories_id,
                "categories_name" => $category->name,
                "categories_slug" => $category->slug,
                "title" => $article->title,
                "slug" => $article->slug,
                "short_description" => $article->short_description,
                "content" => $article->content,
                "image" => $article->image,
                "thumbnail" => $article->thumbnail,
                "created_at" => $article->created_at,
                "updated_at" => $article->updated_at
            );
            array_push($data_article, $data);
        }
        return view('index')->with([
            "article" => $data_article,
            "categories" => $categories
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $article = Article::where('slug', $id)->first();
        if ($article) {
            $article_serupa = Article::where('categories_id', $article->categories_id)->where('id', '!=', $article->id)->get();
            $categories = Categories::all();
            return view('detail')->with([
                "article" => $article,
                "article_serupa" => $article_serupa,
                "categories" => $categories
            ]);
        }
        return redirect()->route('front')->with('danger', 'Data Tidak Ditemukan');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function showCategory($id)
    {
        $categories = Categories::all();
        $category = Categories::where('slug', $id)->first();
        $article = Article::where('categories_id', $category->id)->get();
        return view('list')->with([
            "categories" => $categories,
            "article" => $article,
            "category" => $category
        ]);
    }
}
