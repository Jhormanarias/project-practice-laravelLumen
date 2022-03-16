<?php

namespace App\Http\Controllers;

use App\Http\Controllers\ResourceController;
use App\Models\Post;

class PostController extends ResourceController
{
    protected $model = Post::class;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    

    //
}
