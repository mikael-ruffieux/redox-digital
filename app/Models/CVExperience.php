<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CVExperience extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $fillable=['job','period', 'company', 'company_url', 'place', 'desc', 'filters'];
}
