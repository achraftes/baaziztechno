<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    // public function user(){
    //     return $this->belongsto(User::class);
    // }

    // public function comments(){
    //     return $this->hasmany(Comment::class);
    // }

    // public function post_tags(){
    //     return $this->hasmany(PostTag::class);
    // }
    
    // public function category(){
    //     return $this->belongsto(Category::class);
    // }
    protected $fillable =["title","description","image","detail"];
}
