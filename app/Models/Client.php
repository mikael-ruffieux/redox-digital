<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable=['name','link', 'logo', 'public'];

    public function projects() {
        return $this->hasMany(Project::class);
    }

    public function cv_projects() {
        return $this->hasMany(CVProject::class);
    }
}