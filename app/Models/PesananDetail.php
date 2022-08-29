<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesananDetail extends Model
{
    use HasFactory;
    protected $table = 'pesanan_detail';
    protected $fillable = [
        'user_id',
        'menu_id',
        'harga',
        'jumlahOrder',
        'keterangan',
    ];
}
