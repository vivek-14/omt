<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Department extends Model
{
    use HasFactory;

    public function info(): MorphOne
    {
        return $this->morphOne(Info::class, 'infoable');
    }

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function Company(): BelongsTo
    {
        return $this->belongsTo(Company::class);
    }

    public function Employee(): HasOne
    {
        return $this->hasOne(Employee::class, 'dept_id');
    }
}