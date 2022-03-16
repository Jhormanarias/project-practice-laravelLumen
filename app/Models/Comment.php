<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'comment';

    protected $fillable = ['comment','comment_id','post_id','user_id'];

    protected $with = ['comentarios.comentarios'];

    public function comentarios(){
        return $this->hasMany(Comment::class, 'comment_id');
    }
    
    /* protected $hidden = [];  */
}
