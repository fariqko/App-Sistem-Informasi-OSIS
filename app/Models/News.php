<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    use HasFactory;

    protected $fillable = [
        'admins_id', 
        'news_category_id',
        'title',
        'slug',
        'thumbnail',
        'content',
    ];

    public function Admin()
    {
        return $this->belongsTo(Admin::class, 'admins_id');
    }

    public function NewsCategory()
    {
        return $this->belongsTo(NewsCategory::class, 'news_category_id');
    }
}