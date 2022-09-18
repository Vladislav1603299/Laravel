<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    public static function getAllCategories()
    {
        $getCategories = DB::select('SELECT title FROM categories');
        return $getCategories;
    }

    public static function addCategory($title, $description)
    {
        $addCategory = DB::insert(
            "INSERT INTO categories (title, description, created_at, updated_at)  VALUES ('$title', '$description', now(), now())"
        );
        return $addCategory;
    }

    public static function getCategoryId($category)
    {
        $getCategoryId = DB::select(
            "SELECT id FROM categories WHERE title = '$category'"
        );
        return $getCategoryId;
    }
}
