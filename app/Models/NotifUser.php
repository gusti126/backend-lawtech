<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class NotifUser extends Model
{
    use HasFactory;

    protected $fillable = [
        'to_user_id', 'title', 'deskripsi', 'link', 'notif_watched'
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'to_user_id', 'id');
    }
}
