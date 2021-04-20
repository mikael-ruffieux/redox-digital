<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titre',
        'contenu',
        'url',
        'archived',
    ];

    // Relation n:n entre un article et les mots-clés
    public function categories() {
        return $this->belongsToMany(Category::class);
    }
}