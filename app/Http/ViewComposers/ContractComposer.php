<?php

namespace App\Http\ViewComposers;

use Illuminate\View\View;
use App\Repositories\Contract\ContractInterface;

class ContractComposer
{
    protected $contractRepository;

    public function __construct(ContractInterface $contractRepository)
    {
        $this->contractRepository = $contractRepository;
    }

    public function compose(View $view)
    {
        $view->with('contract', $this->contractRepository->getAll()->first());
    }
}
