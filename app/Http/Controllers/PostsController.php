<?php

namespace App\Http\Controllers;

use App\Models\Posts;
use Illuminate\Http\Response;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return  Response
     */
    public function index():Response {
        //Витянули дані з моделі Posts
        $posts = Posts::paginate(15);

        //показали list.blade.php
        return view('posts.list', compact('posts'));
    }

}
