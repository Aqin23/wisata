<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketWisata extends Model
{
    use HasFactory;
    protected $table = 'paketwisata';
    protected $fillable = [
        'nama_wisata', 'foto',
    ];
}
