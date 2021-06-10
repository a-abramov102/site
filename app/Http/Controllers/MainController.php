<?php

namespace App\Http\Controllers;

use App\Models\User\DBUser;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //главная страница
    public function index()
    {
        return view('main.index',['categories'=>$this->getCategories()]);
    }

}
