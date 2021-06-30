<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Accordion extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable = ['service_id', 'title', 'description'];

    public function service() {
        return $this->belongsTo(Service::class);
    }
}
