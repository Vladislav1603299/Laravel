<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStoreRequest;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\News;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $getCategory = $_GET['category'];
        $news = News::getNewsByCategory($getCategory);
        return view('admin/news/index', [
            'newsList' => $news,
            'category' => $getCategory,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $getAllCategories = Category::getAllCategories();
        return view('admin/news/create', [
            'categoryList' => $getAllCategories,
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsStoreRequest $request)
    {
        $record = $request->validated();
        //return response()->download(public_path('robots.txt'));
        if ($record) {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                //$path = $image->storeAs('news', 'kosmos.' . $image->getClientOriginalExtension());
                $image->store('news');
                $getImage = $image->hashName();
                //dd($path);
            }
            if ($request['category'] !== 'Выбрать категорию') {
                $category_id = Category::getCategoryId($request['category']);
                foreach ($category_id as $id) {
                    $id = $id->id;
                }
                $title = $request['title'];
                $autor = $request['autor'];
                $spoiler = $request['spoiler'];
                $description = $request['description'];
                News::addNews(
                    $id,
                    $title,
                    $spoiler,
                    $getImage,
                    $description,
                    $autor
                );
                return back()
                    ->withInput()
                    ->with('success', 'Новость была успешно добавлена!');
            }
        }

        return back()
            ->withInput()
            ->with('error', 'Выберете категорию!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(int $id)
    {
        foreach ($this->news as $news) {
            $newsList = $news['newsList'];
            foreach ($newsList as $oneNews) {
                if ($oneNews['id'] == $id) {
                    $getNews = $oneNews;
                    $getId = $oneNews['id'];
                }
            }
        }
        return view('admin/news/edit', [
            'id' => $getId,
            'news' => $getNews,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        return back()
            ->withInput()
            ->with('success', 'Запись была успешно добавлена');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
