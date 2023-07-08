<?php

namespace App\Models;

use App\Models\MerkMobil;
use App\Models\Sparepart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'merk_mobil_id',
        'mobil',
        'image'
    ];

    public function merkMobil()
    {
        return $this->belongsTo(MerkMobil::class, 'merk_mobil_id');
    }

    public function spareparts()
    {
        return $this->hasMany(Sparepart::class);
    }
    

}
