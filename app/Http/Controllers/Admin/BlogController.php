<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Blog;
//extend App\Blog
class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //echo 'Admin/BlogController';
        //Selete all
        $objs = Blog::all();
        //dd($objs);
        $data['objs'] = $objs;
        //set data to view
        return view('admin.list.blog',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //load form show
        return view('admin.form.blog');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //insert to database
        $obj = new Blog();
        $obj->topic = $request['topic'];
        $obj->content = $request['content'];
        $obj->user_id = $request['user_id'];
        $obj->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //Search by id
        $obj = Blog::find($id);
        var_dump($obj);
        //dd($objs);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //update
        $obj = Blog::find($id);
        //load view to edit
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
        //Search by id & Update
        $obj = Blog::find($id);
        $obj->topic = $request['topic'];
        $obj->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //Delete by id
        $obj = Blog::find($id);
        $obj->delete();
    }
}
