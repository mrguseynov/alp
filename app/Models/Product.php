<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = ['title', 'img', 'text', 'description', 'slug', 'active', 'vip', 'vip_ends', 'user_id', 'cat_id'];
    public function category()
    {
        return $this->belongsTo(Category::class, 'cat_id');
    }

    public function author()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
