<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = ['project_id', 'service_id'];

    public function service() {
        $this->belongsTo(Service::class);
    }

    public function project() {
        $this->belongsTo(Project::class);
    }
}
