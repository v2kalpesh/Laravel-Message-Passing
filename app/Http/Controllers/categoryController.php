<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class categoryController extends Controller
{
    public function index()
    {
        $categorys = DB::table('category')->select('catname','cat_parent_id')->get();
        return view('categoryList',['categorys' => $categorys ]);  
    }
}
