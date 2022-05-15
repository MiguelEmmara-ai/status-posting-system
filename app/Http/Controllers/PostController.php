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
            "posts" => Post::all()
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
            "posts" => $post
        ]);
    }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create()
    // {
    //     return view('poststatusform');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request)
    // {
    //     $request->validate([
    //         'status_code' => 'required',
    //         'status_content' => 'required',
    //         'share' => 'required',
    //         'input_date' => 'required',
    //         'permission' => 'required'
    //     ]);

    //     // $post = new Post;
    //     // $post->status_code = $request->statusCode;
    //     // $post->status_content = $request->status;
    //     // $post->share = $request->gridRadios;
    //     // $post->input_date = $request->date;
    //     // $post->permission = $request->input('permissionCheckBox');
    //     // $post->save();

    //     Post::create($request->all());

    //     return redirect('poststatusprocess')->with('success', 'Blog Post Form Data Has Been inserted');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show(Post $post)
    // {
    //     // return view('searchstatusprocess', compact('post'));
    //     return view('searchstatusprocess', [
    //         "title" => "Post",
    //         "post" => $post
    //     ]);
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Post  $post
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy(Post $post)
    // {
    //     $post->delete();

    //     return redirect()->route('home')
    //         ->with('success', 'Product deleted successfully');
    // }
}
