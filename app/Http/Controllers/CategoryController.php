<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function category_list(Category $category)
    {
        return view('categories.show_category_medicine')->with(['medicines'=>$category->getCategory()]);
    }
    
}
