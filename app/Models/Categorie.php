<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Category extends Model
{
 
    protected $fillable=["title","slug"];
    use HasFactory;
    public function getRoutekeyName(){
        return"slug";
    }

   
    public function posts(){
        return $this->hasmany(Post::class);
    }
}
