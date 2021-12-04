<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Project extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = [
        'title',
        'client_id',
        'archived',
        'date',
        'custom_summary',
        'external_link',

        'context_title',
        'context_desc',

        'video_source',
        'video_url',

        'design_desc',

        'solution_title',
        'solution_desc'
    ];

    public function dateValue() {
        return Carbon::parse($this->date)->format('Y-m-d');
    }

    public function images() {
        return $this->hasMany(Image::class);
    }
 
    public function client() {
        return $this->belongsTo(Client::class);
    }

    public function services() {
        return $this->belongsToMany(Service::class);
    }

    public function categoriesId() {
        $ids = [];
        foreach ($this->services as $category) {
            array_push($ids, $category->id);
        }
        return $ids;
    }
}