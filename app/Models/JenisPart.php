<?php

namespace App\Models;

use App\Models\Sparepart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JenisPart extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'merk',
    ];

    public function spareparts()
    {
        return $this->hasMany(Sparepart::class);
    }
}    
