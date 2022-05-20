<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('searchstatusprocess', [
            "title" => "Search Status Result",
            "posts" => Post::all(),
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $post = Post::select("*")
            ->where("status_content", $request->status)
            ->get();

        return view('searchstatusprocess', [
            "title" => "Search Status Result",
            "posts" => $post,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('poststatusform', [
            'title' => 'Post Status Form',
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'status_code' => 'required|unique:posts',
            'status_content' => 'required',
            'share' => 'required|in:Public,Friends,Only Me',
            'input_date' => 'required',
            'permission' => 'required',
        ]);

        // Convert Array to String for checkbox
        $arrayToString = implode(', ', $request->input('permission'));
        $validated['permission'] = $arrayToString;

        Post::create($validated);

        return redirect('/poststatusprocess')->with('success', 'Blog Post Form Data Has Been inserted');
    }
}
