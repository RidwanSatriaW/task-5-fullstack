<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class DashboardPostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.posts.index',[
            'posts' =>Article::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'tittle'=>'required|max:255',
            'category_id'=>'required',
            'user_id'=>'required',
            'content'=>'required',
            'image'=>'required'
        ]);

        Article::create($validatedData);

        return redirect('/dashboard/posts');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Article  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Article $post)
    {
        return view('dashboard.posts.show',[
            'post' => $post
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Article  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Article $post)
    {
        return view('dashboard.posts.edit',[
            'post'=> $post
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Article  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Article $post)
    {
        $validatedData = $request->validate([
            'tittle'=>'required|max:255',
            'category_id'=>'required',
            'user_id'=>'required',
            'content'=>'required',
            'image'=>'required'
        ]);

        Article::where('id',$post->id)
                ->update($validatedData);

        return redirect('/dashboard/posts');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Article  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Article $post)
    {
        Article::destroy($post->id);

        return redirect('/dashboard/posts');
    }
}
