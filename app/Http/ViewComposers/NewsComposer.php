<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\TypeNews\TypeNewsInterface;

class NewsComposer
{
    protected $typeNewsRepository;

    public function __construct(TypeNewsInterface $typeNewsRepository)
    {
        $this->typeNewsRepository = $typeNewsRepository;
    }

    public function compose(View $view)
    {
        $view->with('typeNews', $this->typeNewsRepository->getAllTopNews());
    }
}
