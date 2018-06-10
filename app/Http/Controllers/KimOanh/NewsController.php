<?php

namespace App\Http\Controllers\KimOanh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\News\NewsInterface;
use App\Repositories\TypeNews\TypeNewsInterface;

class NewsController extends Controller
{
    protected $newsRepository;
    protected $typeNewsRepository;

    public function __construct(
        NewsInterface $newsRepository,
        TypeNewsInterface $typeNewsRepository
    ) {
        $this->newsRepository = $newsRepository;
        $this->typeNewsRepository = $typeNewsRepository;
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try{
            \Session::put('page_current', config('setting.page.news'));
            
            $news = $this->newsRepository->getAllNewPaginate();

            return view('kimoanh.news.index', compact('news'));
        }catch(Eception $e){
            return redirect()->name('404');
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
    public function show($name, $id)
    {
        try{
            $typeNew = $this->typeNewsRepository->findOrFail($id);
            $news = $typeNew->paginateNews();

            return view('kimoanh.news.index', compact('typeNew', 'news'));
        }catch(Eception $e){
            return redirect()->name('404');
        }
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

    public function detail($name, $id)
    {
        try{
            $news = $this->newsRepository->findOrFail($id);
            $typeNew = $news->typeNews;
            $newsRelateds = $this->newsRepository->getNewsRelateds($typeNew, $news);

            return view('kimoanh.news.detail', compact([
                'typeNew',
                'news',
                'newsRelateds',
            ]));
        }catch(Eception $e){
            return redirect()->name('404');
        }
    }
}
