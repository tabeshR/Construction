<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index(Request $request)
    {
        $categories = Category::all();
        $array = explode('lang=',$request->getQueryString());
        $lang = isset($array[1])? $array[1]:"fa";
        return view($lang.'.categories.index',compact('categories'));
    }

    public function single(Request $request,Category $category)
    {
        $projects = $category->projects;
        $array = explode('lang=',$request->getQueryString());
        $lang = isset($array[1])? $array[1]:"fa";
        return view($lang.'.categories.single',compact('projects','category'));
    }

}
