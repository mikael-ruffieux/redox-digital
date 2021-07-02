<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['project_id', 'service_id'];

    public function service() {
        return $this->belongsTo(Service::class);
    }

    public function project() {
        return $this->belongsTo(Project::class);
    }
}
