<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function consults(){
        return $this->hasMany(Consult::class);
    }
    public function category(){
        return $this->belongsTo(Category::class);
    }
    public function expert(){
        return $this->belongsTo(Expert::class);
    }
}
