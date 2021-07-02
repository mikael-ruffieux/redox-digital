<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectVideo extends Model {

    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'vid_link',
        'vid_desc',
    ];

    public function project() {
        return $this->morphOne(Project::class, 'projectable');
    }
}