<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ResourceController;
use App\Models\Comment;
use App\Models\Post;

class CommentController extends ResourceController
{
    protected $model = Comment::class;

    
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /* public function show($id)
    {

        $comentario = Comment::find($id);

        return response()->json($comentario);
    } */


    //
}
