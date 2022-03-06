<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
        //Mise en place des liens des tables par laravel
        public function category(){
            return $this->belongsTo(Category::class,'category_id');
        }
}
