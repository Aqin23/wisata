<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;
    protected $table = 'pesanan';
    protected $fillable = [
        'id_user',
        'id_detailwisata',
        'tgl_awal',
        'tgl_akhir',
        'status',
        'total_harga',
        'bukti_bayar',
    ];

    public function detailWisataFk()
    {
        return $this->belongsTo(DetailWisata::class, 'id_detailwisata', 'id');
    }
    public function userFk()
    {
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
