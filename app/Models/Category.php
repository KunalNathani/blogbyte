<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name'
    ];

    /* RELATIONSHIP METHODS */
    public function posts() {
        return $this->hasMany(Post::class);
    }

    /* ACCESSORS */
    public function getPostsCountAttribute(){
        return $this->posts()->count();
    }
}
