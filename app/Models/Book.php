<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $guarded = [];
    public function getImageAttribute($value): ?string
    {
        if($value)
            return asset('storage/'.$value);
        return null;
    }
}
