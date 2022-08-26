<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'category_id',
        'user_id',
        'title',
        'excerpt',
        'body',
        'image',
        'published_at'
    ];

//    Here are two ways to get published_at in Date object as they are stored as string in DBMS
//    protected $dates = ['published_at']; OR protected $casts = ['published_at' => 'datetime'];
    protected $casts = [
        'published_at' => 'datetime'
    ];

    /** RELATIONSHIP METHODS */
    public function tags()
    {
        return $this->belongsToMany(Tag::class)->withTimestamps();
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
