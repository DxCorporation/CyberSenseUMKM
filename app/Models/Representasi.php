<?php

namespace App\Models;

use App\Models\RepresentasiCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Representasi extends Model
{
    use HasFactory;

    protected $fillable = ['kode', 'representasi_category_id', 'kondisi', 'skor_resiko', 'rekomendasi'];

    public function RepresentasiCategory(): BelongsTo
    {
        return $this->belongsTo(RepresentasiCategory::class);
    }
}
