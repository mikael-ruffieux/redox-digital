<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'client_id',
        'archived',
        'context',
        'date',
        'project_type',
    ];

    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function categories() {
        return $this->hasMany(Category::class);
    }
 }
