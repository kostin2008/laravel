<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    public static function getCategories(){
        return view('news/categories', ['categories' => Category::getCategories(), 'news' => News::getNews()]);
    }
}