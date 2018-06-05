<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\News\NewsInterface;
use App\Repositories\TypeNews\TypeNewsInterface;
use App\Repositories\TypeProject\TypeProjectInterface;
use App\Repositories\Project\ProjectInterface;
use App\Repositories\Library\LibraryInterface;

class HomeController extends Controller
{
    protected $newsRepository;
    protected $typeNewsRepository;
    protected $typeProjectRepository;
    protected $libraryRepository;
    protected $projectRepository;

    public function __construct(
        NewsInterface $newsRepository,
        ProjectInterface $projectRepository,
        LibraryInterface $libraryRepository,
        TypeNewsInterface $typeNewsRepository,
        TypeProjectInterface $typeProjectRepository
    ) {
        $this->newsRepository = $newsRepository;
        $this->projectRepository = $projectRepository;
        $this->libraryRepository = $libraryRepository;
        $this->typeNewsRepository = $typeNewsRepository;
        $this->typeProjectRepository = $typeProjectRepository;
    }

    public function index()
    {
        $typeNews = $this->typeNewsRepository->getAllTopNews();
        $newProjects = $this->projectRepository->getNewProjects();
        $newLibraries = $this->libraryRepository->getTop3Libraries();

        return view('kimoanh.index.index', compact(
            'typeNews',
            'newProjects',
            'newLibraries')
        );
    }

    // public function getAllNews(){

    //  $news = $this->newsRepository->getAllNews();
    //  dd($news);
    // }

    // public function getNewsByType(){
    //  $news = $this->newsRepository->getNewsByType(1);
    //  dd($news);
    // }

    // public function getAllProjects(){
    //  $p = $this->projectRepository->getAllProjects();
    //  dd($p);
    // }

    // public function getProjectsByType(){
    //  $news = $this->projectRepository->getProjectsByType(1);
    //  dd($news);
    // }

    // public function getAllLibraries(){
    //  $p = $this->libraryRepository->getAllLibraries();
    //  dd($p);
    // }

    // public function getLibrariesByType(){
    //  $news = $this->libraryRepository->getLibrariesByType(1);
    //  dd($news);
    // }
}
