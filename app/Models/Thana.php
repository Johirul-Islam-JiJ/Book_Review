<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Thana extends Model
{
    use HasFactory;
    protected $guarded = [];


public function district():BelongsTo
    {
        return $this->belongsTo(District::class);
    }

public function division():BelongsTo
    {
        return $this->belongsTo(Division::class);
    }
}

