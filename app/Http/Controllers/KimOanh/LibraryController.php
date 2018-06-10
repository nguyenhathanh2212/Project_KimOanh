<?php

namespace App\Http\Controllers\KimOanh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Library\LibraryInterface;
use App\Repositories\TypeLibrary\TypeLibraryInterface;

class LibraryController extends Controller
{
    protected $libraryRepository;
    protected $typeLibraryRepository;

    public function __construct(
        LibraryInterface $libraryRepository,
        TypeLibraryInterface $typeLibraryRepository
    ) {
        $this->typeLibraryRepository = $typeLibraryRepository;
        $this->libraryRepository = $libraryRepository;
    }

    public function show($name, $id)
    {
        try {
            \Session::put('page_current', config('setting.page.library'));

            $typeLibrary = $this->typeLibraryRepository->findOrFail($id);
            $libraries = $typeLibrary->paginateLibraries();

            return view('kimoanh.library.index', compact('typeLibrary', 'libraries'));
        } catch (Exception $e) {
            return redirect()->name('404');
        }
    }
}
