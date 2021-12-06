<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ForumHukum extends Model
{
    use HasFactory;

    protected $fillable = [
        'hukum_kategori_id', 'user_id', 'content', 'like'
    ];

    protected $casts = [
        'created_at' => 'datetime:d-M-Y',
        'updated_at' => 'datetime:d-M-Y',
    ];

    public function kategori()
    {
        return $this->belongsTo(HukumKategori::class, 'hukum_kategori_id', 'id');
    }

    public function like()
    {
        return $this->hasMany(Like::class, 'forum_hukum_id');
    }

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function jawaban()
    {
        return $this->hasMany('App\Models\Jawaban');
    }
}
