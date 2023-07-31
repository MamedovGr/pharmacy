<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Drug extends Model
{
    use HasFactory;

    protected $guarded=[
        'id'
    ];

    protected $fillable = [
        'image',
    ];



    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class);
    }

    public function hard_drug(): BelongsTo
    {
        return $this->belongsTo(Hard_drugs::class);
    }

    public function soft_drug(): BelongsTo
    {
        return $this->belongsTo(Soft_drugs::class);
    }

    public function liquid(): BelongsTo
    {
        return $this->belongsTo(Liquid::class);
    }
}
