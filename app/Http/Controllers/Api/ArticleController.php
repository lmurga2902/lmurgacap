<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Core\Eloquent\Article;

class ArticleController extends Controller
{
    public function listArticles(Request $request){
        if($request->ajax()){
            return abort(401);
        }
        return response()->json(
            Article::with(['resourcesCover','category'])->get()
        );

        //return "Test";
    }
}
