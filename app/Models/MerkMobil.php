<?php

namespace App\Models;

use App\Models\Mobil;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class MerkMobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'merk',
    ];

    public function mobil()
    {
        return $this->hasMany(Mobil::class);
    }

}
