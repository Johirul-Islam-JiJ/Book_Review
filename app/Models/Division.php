<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Division extends Model
{
    use HasFactory;
    protected $guarded = [];

    public function districts():HasMany
    {
        return $this->hasMany(District::class);
    }
    public function thanas():HasMany
    {
        return $this->hasMany(Thana::class);
    }

}
