<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ApplyFor extends Model
{
    use HasFactory;
    protected $table = "apply_for";
    protected $fillable = [
        'status' , 'cv'
    ];
    protected $timestamps = true;

}
