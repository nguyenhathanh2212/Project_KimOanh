<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\TypeProject\TypeProjectInterface;

class ProjectComposer
{
    protected $typeProjectRepository;

    public function __construct(TypeProjectInterface $typeProjectRepository)
    {
        $this->typeProjectRepository = $typeProjectRepository;
    }

    public function compose(View $view)
    {
        $view->with('typeProjects', $this->typeProjectRepository->getAllTopProjects());
    }
}
