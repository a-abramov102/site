<?php

namespace App\Models\Category;

use Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = "news";
    protected $primaryKey="id";
    public $timestamps = false;
    protected $fillable = ['title','text'];
    use HasFactory;


}
