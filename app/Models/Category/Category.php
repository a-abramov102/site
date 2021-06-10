<?php

namespace App\Models\Category;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = "categories";
    protected $primaryKey="id";
    public $timestamps = false;
    protected $fillable = ['title','info'];
    use HasFactory;

    public function news()
    {
        return $this->belongsToMany(News::class, 'news_to_category', 'category_id',
            'news_id', 'id');
    }
}
