<?php

namespace App;

use App\Model;
use App\User;

class Post extends Model
{
    public function comments()
    {
    	return $this->hasMany(Comment::class);
    }
    public function addComment($body)
    {
    	$this->comments()->create(compact('body'));
    }
    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}
