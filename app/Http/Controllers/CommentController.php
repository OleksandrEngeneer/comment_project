<?php

namespace App\Http\Controllers;

use App\Comment as Comment;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::where('status', 'confirmed')->orderBy('created_at', 'desc')->get();
        return view(
            'pages.index',
            ['comments' => $comments]
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //$path = $request->file('file_path')->store('app/files');
        Comment::insert([
            'id' => null,
            'name' => $request['name'],
            'email' => $request['email'],
            'message' => $request['message'],
            //'file_path' => $path,
            'status' => 'new',
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        return redirect()->action('CommentController@index');;
    }
}
