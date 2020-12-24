<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Posts;
use Illuminate\Http\Request;
use voku\helper\ASCII;
use function React\Promise\reduce;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   $posts=Posts::all();
        return view('admin_panel.blog.index', ['posts'=>$posts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin_panel.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {  $post=new Posts();
       $post->title=$request->input('title');
       $post->text=$request->input('text');
       $post->type_id=$request->input('type_id');
        $post->tag_id=$request->input('tag_id');
        $post->save();
        return redirect()->route('blog.create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Posts  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $post)
    {
       return view('admin_panel.blog.details',['post'=>$post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $post)
    {
        return view('admin_panel.blog.edit',['post'=>$post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Posts  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $post)
    {
        $post->title=$request->input('title');
        $post->text=$request->input('text');
        $post->type_id=$request->input('type_id');
        $post->tag_id=$request->input('tag_id');
        $post->save();
        return redirect()->route('blog.edit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $post)
    {
        $post->delete();
        return redirect()-route('blog.index');
    }
}
