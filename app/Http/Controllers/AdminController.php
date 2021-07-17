<?php

namespace App\Http\Controllers;

use App\Comment as Comment;
use App\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $comments = Comment::all();
        return view(
            'pages_admin.index',
            ['comments' => $comments]
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function update_store(Request $request)
    {
        $key = $request['id'];
        $status = $request['status'];
        $date = date("Y-m-d H:i:s");
        Comment::where('id', $key)
            ->update(['status' =>  $status]);
        return redirect()->action('AdminController@index');;
    }
}
