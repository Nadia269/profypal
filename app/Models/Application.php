<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Application extends Model
{
    use HasFactory;
    protected $table = "applications";
    protected $fillable = [
        'title' , 'description' , 'location' , 'flag'
    ];
    protected $timestamps = true;

//Relations
    public function company(){
        return $this->belongsTo(Company::class,'company_id'); // company id should be in application table
    }
    public function applyfor(){
        return $this->hasMany(ApplyFor::class);
    }

}
