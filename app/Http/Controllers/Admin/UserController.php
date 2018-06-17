<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Repositories\User\UserInterface;
use App\Http\Requests\Admin\UserRequest;
use DB;
use Session;
use Exception;
use Auth;

class UserController extends Controller
{
    protected $userRepository;

    public function __construct(UserInterface $userRepository)
    {
        $this->userRepository = $userRepository;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        try {
            $users = $this->userRepository->paginate(config('setting.paginate_admin'));

            return view('admin.user.index', compact('users'));
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
        return view('admin.user.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRequest $request)
    { 
        try {
            DB::beginTransaction();
            $data = $request->only([
                'email',
                'password',
                'fullname',
            ]);
            $data['admin'] = config('setting.admin.user');
            
            $this->userRepository->createUser($data);

            DB::commit();
            $request->session()->flash('success', 'Thêm user thành công!');
        } catch (Exception $e) {
            DB::rollBack();
            $request->session()->flash('error', 'Thêm user thất bại!');
        }

        return redirect()->route('admin.user.index');
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
            $user = $this->userRepository->findOrFail($id);

            return view('admin.user.edit', compact('user'));
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
            $user = Auth::user();
            $message = '';

            if ($user->id != $id && $user->admin != config('setting.admin.admin')) {
                $message = 'Bạn không có quyền thực sửa user này!';
                throw new Exception("Error Processing Request", 1); 
            }
            DB::beginTransaction();

            $data = $request->only(['fullname']);

            if ($request->password) {
                if ($request->password != $request->repassword) {
                    $message = 'Mật khẩu xác nhân sai';

                    throw new Exception("Error Processing Request", 1);
                }

                $data['password'] = $request->password;
            }
            $this->userRepository->updateUser($id, $data);
            DB::commit();

            return redirect()->route('admin.user.index')->with('success', 'Sửa user thành công!');
        } catch (Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('error', $message ? $message : 'Sửa user thất bại!');
        }
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
            $user = Auth::user();
            $message = '';

            if ($user->admin != config('setting.admin.admin')) {
                return redirect()->name('403');
            }

            if ($user->id == $id) {
                $message = 'Bạn không thể xóa admin';
                throw new Exception("Error Processing Request", 1);                
            }

            DB::beginTransaction();
            
            $this->userRepository->deleteUser($id);

            DB::commit();
            Session::flash('success', 'Xóa user thành công!');
        } catch (Exception $e) {
            DB::rollBack();
            Session::flash('error', $message ? $message : 'Xóa user thất bại!');
        }

        return redirect()->back();
    }
}
