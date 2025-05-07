<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    public function index(Request $request)
    {
        $userName = auth()->user()->name; 
        return view('categories.index', compact('userName'));

    }
    public function create()
    {
      
        $categories = Category::select('id', 'name')->get();
        $userName = auth()->user()->name; 
        return view('categories.create', compact('categories','userName'));

    }
}
