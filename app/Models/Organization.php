<?php

namespace App\Models;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Organization extends Model
{
    use HasFactory, SoftDeletes;

    public function info()
    {
        return $this->morphOne(Info::class, 'entity');
    }

    public function users()
    {
        return $this->belongsTo(Users::class);
    }

    public function company()
    {
        return $this->hasMany(Company::class, 'org_id');
    }

}