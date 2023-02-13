<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $casts=[
         'body'=>'array'
    ];

    public function post(){

    	return $this->belongsTo(Post::class,'post_id');
    }

    public function users(){

    	return $this->belongsToMany(User::class,'post_user','post_id','user_id');
    }
}
