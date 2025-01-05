<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function create(Request $request){
//    return $request->all();
$request->validate([
    'name' =>'required',
]);
      Category::create ([
       'name' => $request->name
        ]);
      return back()->with('msg','Category added successfully');
    }
}
