<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Http\Requests\StoreAboutRequest;
use App\Http\Requests\UpdateAboutRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $about = About::first();
        $array = explode('lang=',$request->getQueryString());
        $lang = isset($array[1])? $array[1]:"fa";
        return view($lang.'.abouts.index',compact('about'));
    }


}
