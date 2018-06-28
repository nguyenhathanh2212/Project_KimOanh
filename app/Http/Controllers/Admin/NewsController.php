<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\News\NewsInterface;
use App\Repositories\TypeNews\TypeNewsInterface;
use App\Http\Requests\Admin\NewsRequest;
use DB;
use Session;
use Exception;

class NewsController extends Controller
{
    protected $newsRepository;

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
        try {
            $newses = $this->newsRepository->getAllNewPaginate();

            return view('admin.news.index', compact('newses'));
        } catch (Exception $e) {
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
        try {
            $typeNews = $this->typeNewsRepository->all();

            return view('admin.news.add', compact('typeNews'));
        } catch (Exception $e) {
            return redirect()->name('404');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsRequest $request)
    {
        try {
            DB::beginTransaction();
            
            $this->newsRepository->createNews($request);

            DB::commit();
            $request->session()->flash('success', 'Thêm tin tức thành công!');
        } catch (Exception $e) {
            DB::rollBack();
            $request->session()->flash('error', 'Thêm tin tức thất bại!');
        }

        return redirect()->route('admin.news.index');
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
    public function edit($id)
    {
        try {
            $typeNews = $this->typeNewsRepository->all();
            $news = $this->newsRepository->findOrFail($id);

            return view('admin.news.edit', compact('news', 'typeNews'));
        } catch (Exception $e) {
            return redirect()->name('404');
        }
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
        try {
            DB::beginTransaction();
            
            $this->newsRepository->updateNews($request, $id);

            DB::commit();
            $request->session()->flash('success', 'Sửa tin tức thành công!');
        } catch (Exception $e) {
            DB::rollBack();
            $request->session()->flash('error', 'Sửa tin tức thất bại!');
        }

        return redirect()->route('admin.news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            DB::beginTransaction();
            
            $this->newsRepository->deleteNews($id);

            DB::commit();
            Session::flash('success', 'Xóa tin tức thành công!');
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('error', 'Xóa tin tức thất bại!');
        }

        return redirect()->back();
    }

    public function search(Request $request)
    {
        try {
            if (!$request->ajax()) {
                throw new Exception("Error Processing Request", 1);
            }

            $newses = $this->newsRepository->search($request);

            return response()->json([
                'success' => true,
                'html' => view('admin.news.list-content', compact('newses'))->render(),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
            ]);
        }
    }
}
