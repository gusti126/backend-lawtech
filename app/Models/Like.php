<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Like extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id', 'forum_hukum_id'
    ];

    public function forum()
    {
        return $this->belongsTo('App\Models\ForumHukum');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}
