<?php

namespace App\Http\Controllers\Admin;

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
        $this->libraryRepository = $libraryRepository;
        $this->typeLibraryRepository = $typeLibraryRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $libraries = $this->libraryRepository->paginate(config('setting.paginate_admin'));

            return view('admin.library.index', compact('libraries'));
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
            $typeLibrary = $this->typeLibraryRepository->all();

            return view('admin.library.add', compact('typeLibrary'));
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
}
