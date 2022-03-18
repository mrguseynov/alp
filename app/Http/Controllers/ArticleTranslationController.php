<?php

namespace App\Http\Controllers;

use App\Models\ArticleTranslation;
use App\Http\Requests\StoreArticleTranslationRequest;
use App\Http\Requests\UpdateArticleTranslationRequest;

class ArticleTranslationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreArticleTranslationRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreArticleTranslationRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ArticleTranslation  $articleTranslation
     * @return \Illuminate\Http\Response
     */
    public function show(ArticleTranslation $articleTranslation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ArticleTranslation  $articleTranslation
     * @return \Illuminate\Http\Response
     */
    public function edit(ArticleTranslation $articleTranslation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateArticleTranslationRequest  $request
     * @param  \App\Models\ArticleTranslation  $articleTranslation
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateArticleTranslationRequest $request, ArticleTranslation $articleTranslation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ArticleTranslation  $articleTranslation
     * @return \Illuminate\Http\Response
     */
    public function destroy(ArticleTranslation $articleTranslation)
    {
        //
    }
}
