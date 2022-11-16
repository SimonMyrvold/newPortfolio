<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Picture_category extends Model
{
    use HasFactory;

    public function about(){
        return $this->belongsToMany(About::class);
    }   
}
