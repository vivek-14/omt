<?php

namespace App\Models;

use App\Http\Resources\Employee;
use App\Models\Company;
use App\Models\Department;
use App\Models\Organization;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Authenticatable
{
    use HasApiTokens, HasFactory, SoftDeletes;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'first_name',
        'last_name',
        'username',
        'bio',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Soft deletes
     * @var array<\date>
     */

    protected $dates = [
        'deleted_at'
    ];

    public function employee()
    {
        return $this->hasOne(Employee::class);
    }

    public function organization()
    {
        return $this->hasOne(Organization::class, 'owner_id');
    }

    public function companyAsCeo()
    {
        return $this->hasOne(Company::class, 'ceo_id');
    }

    public function departmentAsManager()
    {
        return $this->hasOne(Department::class, 'manager_id');
    }
}