<?php

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews(int $id = null): array
    {
        $news = [];
        $faker = Factory::create();

        if ($id) {
            return [
                'id' => $id,
                'title' => $faker->jobTitle(),
                'autor' => $faker->userName(),
                'status' => 'DRAFT',
                'description' => $faker->text(100),
                'created_at' => now('Europe/Moscow'),
            ];
        }

        for ($i = 1; $i <= 4; $i++) {
            $news[$i] = [
                'title' => $faker->jobTitle(),
                'autor' => $faker->userName(),
                'status' => 'DRAFT',
                'description' => $faker->text(100),
                'created_at' => now('Europe/Moscow'),
            ];
        }
        return $news;
    }

    public function getCategory(int $id = null): array
    {
        $allCategoryNews = [];
        $faker = Factory::create();

        if ($id) {
            return [
                'id' => $id,
                'category' => $faker->jobTitle(),
                'news' => $this->getNews(),
            ];
        }

        for ($i = 1; $i <= 5; $i++) {
            $allCategoryNews[$i] = [
                'category' => $faker->jobTitle(),
                'news' => $this->getNews(),
            ];
        }

        return $allCategoryNews;
    }
}
