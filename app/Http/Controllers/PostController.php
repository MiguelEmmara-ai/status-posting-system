<?php
// TODO
namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('poststatusprocess');
        return view('poststatusprocess', [
            "title" => "Post Status Result"
        ]);
    }
    public function store(Request $request)
    {
        $request->validate([
            'status_code' => 'required',
            'status_content' => 'required',
            'share' => 'required',
            'input_date' => 'required',
            'permission' => 'required'
        ]);

        $post = new Post;
        $post->status_code = $request->statusCode;
        $post->status_content = $request->status;
        $post->share = $request->gridRadios;
        $post->input_date = $request->date;
        $post->permission = $request->input('permissionCheckBox');
        $post->save();
        return redirect('poststatusprocess')->with('status', 'Blog Post Form Data Has Been inserted');
    }
}