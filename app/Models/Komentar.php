<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Komentar extends Model
{
    use HasFactory;

    protected $fillable = [
        'jawaban_id', 'content', 'user_id'
    ];
    protected $casts = [
        'created_at' => 'datetime:Y-M-d M:m:s',
        'updated_at' => 'datetime:Y-M-d M:m:s',
    ];

    public function jawaban()
    {
        return $this->belongsTo('App\Models\Jawaban');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
