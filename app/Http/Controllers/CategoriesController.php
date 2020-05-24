<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CategoriesController extends Controller
{
    public function index()
    {
        
        $categories = DB::table('categories')
            ->where('user_id', '=', Auth::user()->id)
            ->select('id','name')
            ->orderBy('name')
            ->paginate(20)
            ;
        
        return view('categories.index',compact('categories'));
    }
}
