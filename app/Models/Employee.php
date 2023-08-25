<?php

namespace App\Models;

use App\Models\Company;
use App\Models\Roles;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Crypt;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'manager_id',
        'position',
        'join_date',
        'leave_date',
        'return_date',
        'status',
        'description',
        'national_identity',
        'identity_proof',
        'immigration_status',
        'immigration_proof',
        'social_number'
    ];

    /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];

    // Accessor to automatically decrypt the SIN attribute when accessed
    public function getSinAttribute($value)
    {
        return $value ? Crypt::decrypt($value) : null;
    }

    // Mutator to automatically encrypt the SIN attribute when set
    public function setSinAttribute($value)
    {
        $this->attributes['sin'] = $value ? Crypt::encrypt($value) : null;
    }


    // Relations
    public function users()
    {
        return $this->belongsTo(Users::class);
    }

    public function roles()
    {
        return $this->belongsTo(Roles::class);
    }

    public function deparment()
    {
        return $this->belongsTo(Department::class);
    }

    public function company()
    {
        return $this->belongsTo(Company::class);
    }

    public function manager()
    {
        return $this->belongsTo(Employee::class, 'manager_id');
    }

    public function employees()
    {
        return $this->hasMany(Employee::class, 'manager_id');
    }
}