<?php

namespace App\Http\Controllers\Author;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    public function index(){
        $user = Auth::user();
        $articles = Article::where('user_id',$user->id)->paginate(100);
        return view('');
    }
}
