<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable=['category','category_url'];
    
    public function projects() {
        return $this->belongsToMany(Project::class); // chaque mot-clé peut être référencé par
    }                                                // plusieurs articles
}