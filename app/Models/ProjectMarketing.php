<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectMarketing extends Model {

    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'mark_desc',
    ];

    public function project() {
        return $this->morphOne(Project::class, 'projectable');
    }
}
