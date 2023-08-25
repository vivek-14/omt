<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Industry extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public $timestamps = false;

    public function company()
    {
        return $this->hasMany(Company::class, 'industry_id');
    }
}