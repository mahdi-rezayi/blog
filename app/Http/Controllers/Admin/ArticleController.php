<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ArticleController extends Controller
{
    public function index(){
        $articles = Article::all();
        return view('admin.article.index',compact(['articles']));
    }

    public function create(){
        $categories = Category::all();
        $authors = User::where('role','author')->get();
        return view('admin.article.create',compact(['categories','authors']));
    }

    public function store(Request $request){
        $file = $request->file('photo');
        $name = rand().time().'.'.$file->getClientOriginalExtension();
        $file->move('images/poster',$name);

        $article = new Article();
        $article->title = $request->title;
        $article->photo = $name;
        $article->category_id = $request->category;
        $article->user_id = $request->author;
        $article->text = $request->text;
        $article->save();
        Session::flash('success','article is stored');
        return redirect()->route('admin.article.list');
    }

    public function edit($id){
        $article = Article::findOrFail($id);
        $categories = Category::all();
        $authors = User::where('role','author')->get();
        return view('admin.article.edit',compact(['categories','authors','article']));
    }

    public function update(Request $request,$id){
        dd($request->all());
    }

    public function status(Request $request){
        $article = Article::findOrFail($request->id);
        $article->status = $request->value;
        $article->save();
        $data = ['success'=>true,'message'=>'edited'];
        return response()->json($data);
    }
}
