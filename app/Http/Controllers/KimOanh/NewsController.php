<?php

namespace App\Http\Controllers\KimOanh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\News\NewsEloquentReponsiory;
use App\Repositories\Category\CategoryEloquentRepository;

class NewsController extends Controller
{

    protected $newsReponsitory;
    protected $categoryReponsitory;

    public function __construct(NewsEloquentReponsiory $newsReponsitory, CategoryEloquentRepository $categoryReponsitory)
    {
        $this->newsReponsitory = $newsReponsitory;
        $this->categoryReponsitory = $categoryReponsitory;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        try{
            $news = $this->newsReponsitory->all();
            $cats = $this->categoryReponsitory->getSubCategories(2);
            // dd($news);
            return view('kimoanh.news.index', compact('news', 'cats'));
        }catch(Eception $e){

        }

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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
        $cats = $this->categoryReponsitory->getSubCategories(2);
        $news = $this->newsReponsitory->find($id);
        $relateNews = $this->newsReponsitory->getRelateNewsByNews($news);
        // dd($news);
        return view("kimoanh.news.detail", compact('news', 'cats', 'relateNews'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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
