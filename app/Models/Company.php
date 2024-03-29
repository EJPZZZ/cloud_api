<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Company extends Model
{
    use HasFactory;


public function loans(): HasMany
{
    return $this->hasMany(Loan::class);
}

public function customers(): BelongsToMany
{
    return $this->belongsToMany(Customer::class);
}
}