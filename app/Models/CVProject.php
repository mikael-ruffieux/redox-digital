<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class CVProject extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable=['client_id', 'title', 'project_url', 'categories', 'desc', 'image', 'date'];

    public function dateValue() {
        return Carbon::parse($this->date)->format('Y-m-d');
    }

    public function client() {
        return $this->belongsTo(Client::class);
    }
}
