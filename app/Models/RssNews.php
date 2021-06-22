<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RssNews extends Model
{
    public $timestamps = false;
    protected $table = "RssNews";
    protected $primaryKey="id";
    protected $fillable = ['title','url','description','create_date','autor','img'];
    use HasFactory;
}
