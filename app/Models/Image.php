<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['project_id', 'type', 'url'];

    public function project() {
        $this->belongsTo(Project::class);
    }
}
