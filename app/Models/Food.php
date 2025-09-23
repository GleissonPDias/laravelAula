<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{   

    protected $fillable = ['name', 'description', 'calories', 'category_id'];

    public function category(){
        return $this->belongsTo(Category::class);
    }
}

//hasMany = 1 -> N
//belongsTo = 1 -> 1