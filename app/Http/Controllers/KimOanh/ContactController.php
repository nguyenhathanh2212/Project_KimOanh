<?php

namespace App\Http\Controllers\KimOanh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Exception;
use App\Repositories\Contact\ContactInterface;
use App\Http\Requests\KimOanh\ContactRequest;

class ContactController extends Controller
{
    protected $contactRepository;

    public function __construct(ContactInterface $contactRepository)
    {
        $this->contactRepository = $contactRepository;
    }
    
    public function index()
    {
        \Session::put('page_current', config('setting.page.contact'));

        return view('kimoanh.contact.index');
    }

    public function store(ContactRequest $request)
    {
        try {
            $data = $request->only([
                'name',
                'email',
                'phone',
                'title',
                'content'
            ]);
            $this->contactRepository->store($data);

            return redirect()->back()->with('success', 'Gửi liên hệ thành công!');
        } catch (Exception $e) {
            dd($e);
            return redirect()->back()->with('success', 'Gửi liên hệ thất bại!');
        }
    }
}
