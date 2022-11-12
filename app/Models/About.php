<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class About extends Model
{
    use HasFactory;

    public function contacts(){
        return $this->hasMany(Contact::class);
    }

    public function Certificates(){
        return $this->hasMany(Certificate::class);
    }

    public function picture_category(){
        return $this->belongsToMany(Picture::class);
    }

    protected $fillable = [
        'description'
    ];
}
