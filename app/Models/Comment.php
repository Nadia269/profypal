<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;
    protected $table = "comments";
    protected $fillable = [
        'body'
    ];
    protected $timestamps = true;
 public function normaluser(){
    return $this ->belongsTo(NormalUser::class,"normal_user_id");// should be in comment table 
 }

 public function post(){
    return $this->belongsTo(Post::class,"post_id"); //should be in comment table 
 }
}
