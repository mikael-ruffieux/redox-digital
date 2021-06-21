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
        $this->belongsTo(Client::class);
    }
}
