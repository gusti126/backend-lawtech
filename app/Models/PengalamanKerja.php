<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengalamanKerja extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'nama_instansi', 'mulai', 'berakhir', 'masih_bekerja'
    ];

    public function user()
    {
        $this->belongsTo('App\Models\User');
    }
}
