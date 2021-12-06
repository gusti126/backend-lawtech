<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RegisLawyer extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'provinsi', 'kota', 'kecamatan', 'alamat', 'skl_pendidikan_terakhir',
        'sk_advokat', 'harga_muali', 'status'
    ];
}
