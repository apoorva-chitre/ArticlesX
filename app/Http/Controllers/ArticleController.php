<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Article;
use App\Http\Resources\ArticleResource;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // Get articles

        $articles = Article::orderBy('created_at', 'desc')->paginate(5);

        // Return collection of articles as a resource

        return ArticleResource::collection($articles);
    }

   
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // Get an article if update else create a new article

        $article = $request->isMethod('put') ? Article::findOrFail($request->article_id) : new Article;

        // Store request data to the article

        $article->id = $request->input('article_id');

        $article->title = $request->input('title');

        $article->body = $request->input('body');

        // Save and return the article as a resource

        if($article->save()){

            return new ArticleResource($article);

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // Get a single article

        $article = Article::findOrFail($id);

        // Return a single article as a resource

        return new ArticleResource($article);
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
         // Get the article

        $article = Article::findOrFail($id);

        // Delete the article

        if($article->delete()) {
            return new ArticleResource($article);
        }

    }
}
