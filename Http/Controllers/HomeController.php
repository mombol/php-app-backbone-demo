<?php

namespace App\Http\Controllers;

use \App\Models\Article as ArticleModel;

/**
 * \HomeController
 */
class HomeController extends BaseController
{

    public function index()
    {
        $content = ArticleModel::first();
        $content = json_decode($content, true);
        print_r($content);
    }
}