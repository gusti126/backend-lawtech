<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jawaban extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'forum_hukum_id', 'content'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-M-d M:m:s',
        'updated_at' => 'datetime:Y-M-d M:m:s',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
    public function forum()
    {
        return $this->belongsTo('App\Models\ForumHukum', 'forum_hukum_id', 'id');
    }
    public function komentar()
    {
        return $this->hasMany('App\Models\Komentar');
    }
}
