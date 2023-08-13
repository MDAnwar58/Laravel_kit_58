<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    public function sub_category()
    {
        return $this->hasMany('App\Models\SubCategory', 'category_id');
    }
    public function code()
    {
        return $this->hasMany('App\Models\Code', 'category_id');
    }
}
