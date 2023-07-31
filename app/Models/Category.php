<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

/**
 * @property mixed name
 */
class Category extends Model
{
    protected $guarded=[
        'id'
    ];

    public $timestamps=false;

    public function drugs(): HasMany
    {
        return $this->hasMany(Drug::class);
    }
}
