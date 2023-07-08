<?php

namespace App\Models;

use App\Models\Mobil;
use App\Models\JenisPart;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Sparepart extends Model
{
    use HasFactory;

    protected $fillable = [
        'mobil_id',
        'jenispart_id',
        'nama',
        'merek',
        'harga',
        'detail',
        'image',
    ];

    public function mobil()
    {
        return $this->belongsTo(Mobil::class);
    }

    public function jenispart()
    {
        return $this->belongsTo(JenisPart::class);
    }
}
