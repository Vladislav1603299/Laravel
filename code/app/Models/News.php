<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    public static function getNews()
    {
        $getNews = DB::select(' SELECT * FROM news ');
        return $getNews;
    }

    public static function getNewsByCategory($category)
    {
        $getNews = DB::select(
            "SELECT news.id as news_id, categories.title as category_title, news.title as news_title, news.spoiler as news_spoiler, news.image as news_image, news.autor as news_autor  FROM news INNER JOIN categories ON categories.id =  news.category_id  WHERE categories.title = '$category'"
        );
        return $getNews;
    }

    public static function getOneNews($id)
    {
        $getNews = DB::select("SELECT * FROM news WHERE id = $id");
        return $getNews;
    }

    public static function addNews(
        $category_id,
        $title,
        $spoiler,
        $image,
        $description,
        $autor
    ) {
        $addNews = DB::insert(
            "INSERT INTO news (category_id, title, spoiler, image, description, autor, created_at, updated_at)  VALUES ($category_id, '$title', '$spoiler', '$image', '$description', '$autor', now(), now())"
        );
        return $addNews;
    }
}
