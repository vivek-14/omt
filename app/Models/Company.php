<?php

namespace App\Models;

use App\Models\Department;
use App\Models\Industry;
use App\Models\Info;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    public function info()
    {
        return $this->morphOne(Info::class, 'entity');
    }

    public function organization()
    {
        return $this->belongsTo(Organization::class);
    }

    public function users()
    {
        return $this->belongsTo(Users::class);
    }

    public function industry()
    {
        return $this->belongsTo(Industry::class);
    }

    public function department()
    {
        return $this->hasMany(Department::class, 'company_id');
    }

    public function employee()
    {
        return $this->hasMany(Employee::class, 'company_id');
    }
}