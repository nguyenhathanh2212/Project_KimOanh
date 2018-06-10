<?php

namespace App\Http\Controllers\KimOanh;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IntroduceController extends Controller
{
    public function index()
    {
        \Session::put('page_current', config('setting.page.introduce'));

        return view('kimoanh.introduce.index');
    }
}
