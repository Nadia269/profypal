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

}
