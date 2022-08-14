<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $news = $this->getCategory();
        //dd($this->getCategory());
        //list news
        return view('/news/index', [
            'category' => $news,
        ]);
    }

    public function categoryNews(int $idCategory)
    {
        $news = $this->getCategory($idCategory);
        //dd($this->getCategory($id));
        //list news
        return view('/news/categoryNews', [
            'newsList' => $news,
        ]);
    }

    public function show(int $id)
    {
        //current news
        $news = $this->getNews($id);
        return view('/news/show', [
            'news' => $news,
        ]);
    }
}
