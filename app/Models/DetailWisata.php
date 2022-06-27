<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailWisata extends Model
{
    use HasFactory;
    protected $table = 'detailwisata';
    protected $fillable = [
        'id_paketwisata', 'nama_paket', 'harga', 'desc',
    ];

    public function paketFk()
    {
        return $this->belongsTo(PaketWisata::class, 'id_paketwisata', 'id');
    }
}
