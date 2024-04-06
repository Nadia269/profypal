<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NormalUser extends Model
{
    use HasFactory;
    protected $table = "normal_user";
    protected $fillable = [
        'age' , 'degree' , 'skills' , 'years_of_experience', 'current_company'
    ];
    protected $timestamps = true;

    public function user(){
        return $this ->belongsToMany(User ::class,"users_normal_user");// should add ?
    }
   public function applyfor(){
    return $this ->hasMany(ApplyFor::class,"normal_user_id"); //should add?
   }
  
   public function comment(){
    return $this ->hasMany(Comment::class,"normal_user_id");//should add ?
   }
}
