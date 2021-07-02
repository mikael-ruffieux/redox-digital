<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Service extends Model
{
    use HasFactory;
    
    public $timestamps = false;

    protected $fillable = ['title', 'isChild', 'description', 'image', 'parent_id'];

    public function getSlug() {
        return Str::slug($this->title);
    }

    public function children() {
        return $this->hasMany(self::class, 'parent_id');
    }

    public function parent() {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function accordions() {
        return $this->hasMany(Accordion::class);
    }

    public function projects() {
        return $this->belongsToMany(Project::class);
    }
}
