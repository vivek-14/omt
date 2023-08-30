<?php

namespace App\Models;

use App\Models\Department;
use App\Models\Industry;
use App\Models\Info;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Company extends Model
{
    use HasFactory;

    public function info(): MorphOne
    {
        return $this->morphOne(Info::class, 'infoable');
    }

    public function organization(): BelongsTo
    {
        return $this->belongsTo(Organization::class);
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function industry(): BelongsTo
    {
        return $this->belongsTo(Industry::class);
    }

    public function department(): HasMany
    {
        return $this->hasMany(Department::class, 'company_id');
    }

    public function employee(): HasMany
    {
        return $this->hasMany(Employee::class, 'company_id');
    }
}