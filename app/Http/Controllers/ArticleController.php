<?php

namespace App\Http\Controllers;
use Image;
use Intervention\Image\Exception\NotReadableException;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

use App\Http\Requests\ArticleRequest;

use App\Article;
use App\Categories;

class ArticleController extends Controller
{
    // // "intervention/image": "^2.5",
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Article::all();
        return view('pages.article.index')->with([
            'article' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Categories::all();
        return view('pages.article.create')->with([
            'categories' => $categories
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ArticleRequest $request)
    {
        $data = $request->all();
        // $data['image'] = $request->file('image')->store(
        //     'image', 'public'
        // );

        $image = $request->file('image');
        $input['image'] = time().'.'.$image->extension();
     
        $destinationPathThum = public_path('thumbnail');
        $img = Image::make($image->path());
        $img->resize(100, 100, function ($constraint) {
            $constraint->aspectRatio();
        })->save($destinationPathThum.'/'.$input['image']);
   
        $destinationPath = public_path('image');
        $image->move($destinationPath, $input['image']);

        $slug = Str::slug($request->title);
 
        Article::create([
            'categories_id' => $request->categories_id,
            'title' => $request->title,
            'slug' => $slug,
            'short_description' => $request->short_description,
            'content' => $request->content,
            'image' => $input['image'],
            'thumbnail' => $$input['image']
        ]);

        // Article::create($data);
 
        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $article = Article::where('slug', $id)->first();
        $categories = Categories::all();
        return view('pages.article.edit')->with([
            'article' => $article,
            'categories' => $categories
        ]);
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
        $article = Article::findOrFail($id);
        $slug = Str::slug($request->title);

        if ($request->has('image') || $request->image != null) {
            $image = $request->file('image');
            $input['image'] = time().'.'.$image->extension();
            $destinationPathThum = public_path('thumbnail');
            $img = Image::make($image->path());
            $img->resize(100, 100, function ($constraint) {
                $constraint->aspectRatio();
            })->save($destinationPathThum.'/'.$input['image']);
    
            $destinationPath = public_path('image');
            $image->move($destinationPath, $input['image']);
            $data = array(
                'categories_id' => $request->categories_id,
                'title' => $request->title,
                'slug' => $slug,
                'short_description' => $request->short_description,
                'content' => $request->content,
                'image' => $input['image'],
                'thumbnail' => $input['image']
            );
        }
        else {
            $data = array(
                'categories_id' => $request->categories_id,
                'title' => $request->title,
                'slug' => $slug,
                'short_description' => $request->short_description,
                'content' => $request->content
            );
        }
        $article->update($data);
 
        return redirect()->route('article.index')->with('success', 'Data Berhasil Diperbarui');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = Article::findOrFail($id);
        $item->delete();

        return redirect()->route('article.index')->with('danger', 'Data Berhasil Dihapus');
    }
}
