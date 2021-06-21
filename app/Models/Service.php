<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'isChild', 'description', 'image', 'parent_id'];

    public function children() {
        $this->hasMany(self::class, 'parent_id');
    }

    public function parent() {
        $this->belongsTo(self::class, 'parent_id');
    }
}
