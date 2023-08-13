<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    public function child()
    {
        return $this->hasMany('App\Models\Comment', 'p_id');
    }
    public function user()
    {
        return $this->belongsTo('App\Models\User', 'user_id');
    }
    public function admin()
    {
        return $this->hasMany('App\Models\Admin', 'admin_id');
    }
    public function code()
    {
        return $this->belongsTo('App\Models\Code', 'code_id');
    }

}
