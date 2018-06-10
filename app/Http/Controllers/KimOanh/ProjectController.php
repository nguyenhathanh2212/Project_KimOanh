<?php

namespace App\Http\Controllers\KimOanh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Project\ProjectInterface;
use App\Repositories\TypeProject\TypeProjectInterface;

class ProjectController extends Controller
{
    protected $projectRepository;
    protected $typeProjectRepository;

    public function __construct(
        ProjectInterface $projectRepository,
        TypeProjectInterface $typeProjectRepository
    ) {
        $this->typeProjectRepository = $typeProjectRepository;
        $this->projectRepository = $projectRepository;
    }

    public function show($name, $id)
    {
        try {
            \Session::put('page_current', config('setting.page.project'));
            
            $typeProject = $this->typeProjectRepository->findOrFail($id);
            $projects = $typeProject->paginateProjects();

            return view('kimoanh.project.index', compact('typeProject', 'projects'));
        } catch (Exception $e) {
            return redirect()->name('404');
        }
    }

    public function detail($name, $id)
    {
        try {
            $project = $this->projectRepository->findOrFail($id);

            return view('kimoanh.project.detail', compact('project'));
        } catch (Exception $e) {
            return redirect()->name('404');
        }
    }
}
