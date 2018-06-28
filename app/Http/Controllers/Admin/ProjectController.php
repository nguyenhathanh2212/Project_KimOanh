<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\Project\ProjectInterface;
use App\Repositories\TypeProject\TypeProjectInterface;
use DB;
use Session;
use Exception;
use App\Traits\ProcessFile;

class ProjectController extends Controller
{
    use ProcessFile;

    protected $projectRepository;
    protected $typeProjectRepository;

    public function __construct(
        ProjectInterface $projectRepository,
        TypeProjectInterface $typeProjectRepository
    ) {
        $this->typeProjectRepository = $typeProjectRepository;
        $this->projectRepository = $projectRepository;
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $projects = $this->projectRepository->getAllProjectsPaginate();

            return view('admin.project.index', compact('projects'));
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
            $typeProjects = $this->typeProjectRepository->all();

            return view('admin.project.add', compact('typeProjects'));
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
        try {
            DB::beginTransaction();
            $message = '';

            if (!$request->video_url && !$request->video_upload) {
                $message = "Bạn chưa nhập video!";
                throw new Exception("Error Processing Request", 1);
            }

            $this->projectRepository->createProject($request);

            DB::commit();
            $request->session()->flash('success', 'Thêm dự án thành công!');

            return redirect()->route('admin.project.index');
        } catch (Exception $e) {
            dd($e);
            DB::rollBack();
            $request->session()->flash('error', $message ? $message : 'Thêm dự án thất bại!');

            return redirect()->back();
        }
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
            $typeProjects = $this->typeProjectRepository->all();
            $project = $this->projectRepository->findOrFail($id);

            return view('admin.project.edit', compact('typeProjects', 'project'));
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
            
            $this->projectRepository->updateProject($request, $id);

            DB::commit();
            $request->session()->flash('success', 'Sửa dự án thành công!');
        } catch (Exception $e) {
            dd($e);
            DB::rollBack();
            $request->session()->flash('error', 'Sửa dự án thất bại!');
        }

        return redirect()->route('admin.project.index');
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
            
            $this->projectRepository->deleteProject($id);

            DB::commit();
            Session::flash('success', 'Xóa dự án thành công!');
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('error', 'Xóa dự án thất bại!');
        }

        return redirect()->back();
    }

    public function search(Request $request)
    {
        try {
            if (!$request->ajax()) {
                throw new Exception("Error Processing Request", 1);
            }

            $projects = $this->projectRepository->search($request);

            return response()->json([
                'success' => true,
                'html' => view('admin.project.list-content', compact('projects'))->render(),
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
            ]);
        }
    }
}
