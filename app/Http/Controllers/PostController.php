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

    public function destroy(Request $request){
        $id = $request->input('id');
        Post::destroy($id); 
        return 'Post deleted successfully';
    }

    public function update(Request $request){
        $request->validate([
            'title' => 'required|string',
            'body' => 'required|string',
        ]);
        $id = $request->input('id');
        $title = $request->input('title');
        $body = $request->input('body');
        Post::where('id', $id)->update([
            'title' => $title,
            'body' => $body,
        ]);
        return 'Post updated successfully';
    } 

}
