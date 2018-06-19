<?php

namespace App\Http\Controllers\KimOanh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Project\ProjectInterface;
use App\Repositories\News\NewsInterface;
use Illuminate\Pagination\LengthAwarePaginator;

class SearchController extends Controller
{
    protected $newsRepository;
    protected $projectRepository;

    public function __construct(
        NewsInterface $newsRepository,
        ProjectInterface $projectRepository
    ) {
        $this->newsRepository = $newsRepository;
        $this->projectRepository = $projectRepository;
    }

    public function search(Request $request)
    {
        try {
            $newses = collect($this->newsRepository->where('title', 'LIKE', '%' . $request->text . '%')->get());
            $projects = collect($this->projectRepository->where('title', 'LIKE', '%' . $request->text . '%')->get());

            $data = $newses->merge($projects);
            $data = $data->sortByDesc('created_at');

            $countResult = $data->count();
            $page = isset($request->page) ? $request->page : 1;
            $perPage = 10;

            $data = new LengthAwarePaginator(
                $data->forPage($page, $perPage),
                $data->count(),
                $perPage,
                $page,
                ['path' => route('kimoanh.search.index', $request->text)]
            );

            return view('kimoanh.search.index', compact('data', 'projects'));
        }catch(Eception $e){
            return redirect()->name('404');
        }
    }
}
