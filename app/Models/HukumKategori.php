<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HukumKategori extends Model
{
    use HasFactory;

    protected $fillable = ['nama'];

    public function forum()
    {
        return $this->hasOne('App\Models\ForumHukum');
    }
    public function forumMany()
    {
        return $this->hasMany('App\Models\ForumHukum');
    }
}
