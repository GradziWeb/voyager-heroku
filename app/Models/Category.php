<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
       //Mise en place des liens des tables par laravel
       public function posts(){
          return $this->hasMany(Post::class);
    } 
}
