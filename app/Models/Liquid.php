<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Model;

class Liquid extends Model
{
    protected $guarded = [
        'id',
    ];

    public $timestamps = false;


    public function drugs(): HasMany
    {
        return $this->hasMany(Drug::class);
    }
}
