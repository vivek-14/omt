<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Info extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'info';
    protected $fillable = [
        'type',
        'status',
        'slogan',
        'logo',
        'address',
        'city',
        'state',
        'country',
        'pin_code',
        'description'
    ];

    protected $dates = [
        'deleted_at'
    ];

    public function entity()
    {
        return $this->morphTo();
    }

}