<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return \view('index',[
            'categories' => Category::all(),
        ]);
    }
    public function store()
    {
        $formData = request()->validate([
            "name" => ['required']
        ]);
        Category::create($formData);
        return \redirect('/');
    }
    public function update(Category $category)
    {
        $formData = request()->validate([
            "name" => ['required']
        ]);
        $category->update($formData);
        return \redirect('/');
    }
    public function destory(Category $category){
        $category->delete();
        return \redirect('/');
    }
}
