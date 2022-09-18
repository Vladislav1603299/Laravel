<?php
namespace App\Http\Controllers\User;
use App\Http\Controllers\Controller;
use App\Models\News;

class NewsController extends Controller
{
    public function index(string $category)
    {
        $category = ucfirst($category);
        $getNews = News::getNewsByCategory($category);
        return view('user/news/index', [
            'news' => $getNews,
            'category' => $category,
        ]);
    }

    public function show(int $newsid)
    {
        $getNews = News::getOneNews($newsid);
        return view('user/news/show', [
            'news' => $getNews,
        ]);
    }
}
