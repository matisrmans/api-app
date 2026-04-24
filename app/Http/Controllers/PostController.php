<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(){
        return Post::all();
    }

    public function add(Request $request){
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);
        $title = $request->input('title');
        $body = $request->input('body');
        Post::create([
            'title' => $title,
            'body' => $body,
        ]);
        return 'Post created successfully';
    }

    public function destroy($id){
        Post::destroy($id);
        return 'Post deleted successfully';
    }

    public function update(Request $request, $id){
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);
        $title = $request->input('title');
        $body = $request->input('body');
        Post::where('id', $id)->update([
            'title' => $title,
            'body' => $body,
        ]);
        return 'Post updated successfully';
    } 

}
