<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    use HasFactory;
    protected $table = "follows";
    protected $fillable = [
        'status'
    ];
    protected $timestamps = true;

    public function user(){
        return $this ->belongsToMany(User::class,"users_follow");// should add ?
    }

}
