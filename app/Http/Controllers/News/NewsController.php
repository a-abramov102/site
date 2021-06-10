<?php

namespace App\Http\Controllers\News;

use App\Http\Controllers\Controller;
use App\Models\Category\Category;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $category = Category::all();
        return view('news.index',['category'=>$category, 'categories'=>$this->getCategories()]);
    }

    public function showNews($item)
    {
        $category = Category::where('id',$item)->first();
        return view('news.show',['category'=>$category,'categories'=>$this->getCategories()]);
    }
}
