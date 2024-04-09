<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CategoryController extends Controller
{
    public function index(){
        $categories = Category::all();
        return view('admin.category.index',compact(['categories']));
    }

    public function create(){
        return view('admin.category.create');
    }

    public function store(Request $request){
        $category = new Category();
        $category->title = $request->title;
        $category->save();
        Session::flash('success','the category is stored');
        return redirect()->route('admin.category.list');
    }

    public function edit($id){
        $category = Category::findOrFail($id);
        return view('admin.category.edit',compact(['category']));
    }

    public function update(Request $request,$id){
        $category = Category::findOrFail($id);
        $category->title = $request->title;
        $category->save();
        Session::flash('success','the category is updated');
        return redirect()->back();
    }

    public function destroy($id){
        $category = Category::findOrFail($id);
        $category->delete();
        Session::flash('success','the category is deleted');
        return redirect()->back();
    }
}
