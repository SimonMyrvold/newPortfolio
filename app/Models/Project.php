<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    public function tags() {
        return $this->belongsToMany(Tag::class);
    }

    protected $fillable = [
        'project_name',
        'project_description',
        'github',
        'demo',
        'picture',
    ];

}
