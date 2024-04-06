<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    protected $table = "posts";
    protected $fillable = [
        'body' , 'image' , 'num_of_likes'
    ];
    protected $timestamps = true;
  
     public function comment(){
        return $this ->hasMany(Comment::class,"post_id");// should add ?
     }
}
