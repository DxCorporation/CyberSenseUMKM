<?php

namespace App\Models;

use App\Models\Representasi;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class RepresentasiCategory extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'slug'];

    public function Representasi(): HasMany
    {
        return $this->hasMany(Representasi::class);
    }
}