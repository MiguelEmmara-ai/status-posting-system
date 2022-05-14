<!-- TODO -->
<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class PostController extends Controller
{
    public function index()
    {
        return view('poststatusprocess');
    }
    public function store(Request $request)
    {
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