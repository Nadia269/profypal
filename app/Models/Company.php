<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;
    protected $table = "companies";
    protected $fillable = [
        'address'
    ];
    protected $timestamps = true;

     public function application(){
        return $this ->hasMany(Application::class);
     }
     public function user(){
        return $this -> belongsToMany(User::class,"users_company");//should add?
     }
}
