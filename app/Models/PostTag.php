<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostTag extends Model
{
    use HasFactory;
    
    public function posts(){
        return $this->hasmany(Post::class);
    }

    public function tags(){
        return $this->hasmany(Tag::class);
    }
}
