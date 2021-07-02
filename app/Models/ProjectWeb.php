<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProjectWeb extends Model {

    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'site_screenshot',
        'site_url',
        'site_desc'
    ];

    public function project() {
        return $this->morphOne(Project::class, 'projectable');
    }
}
