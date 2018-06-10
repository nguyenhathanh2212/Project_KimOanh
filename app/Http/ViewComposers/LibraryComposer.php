<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\TypeLibrary\TypeLibraryInterface;

class LibraryComposer
{
    protected $typeLibraryRepository;

    public function __construct(TypeLibraryInterface $typeLibraryRepository)
    {
        $this->typeLibraryRepository = $typeLibraryRepository;
    }

    public function compose(View $view)
    {
        $view->with('typeLibraries', $this->typeLibraryRepository->getAllTypeLibraries());
    }
}
