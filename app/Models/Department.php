<?php

namespace App\Models;

use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Department extends Model
{
    use HasFactory;

    public function info()
    {
        return $this->morphOne(Info::class, 'entity');
    }

    public function users()
    {
        return $this->belongsTo(Users::class);
    }

    public function Company()
    {
        return $this->belongsTo(Company::class);
    }
}