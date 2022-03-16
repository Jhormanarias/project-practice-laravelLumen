<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'post';

    protected $fillable = ['user_id','title','body'];
    
    /* protected $hidden = [];  */
}
