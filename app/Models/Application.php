<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Application extends Model
{
    use HasFactory;
    protected $table = "applications";
    protected $fillable = [
        'title' , 'description' , 'location' , 'flag'
    ];
    protected $timestamps = true;

}
