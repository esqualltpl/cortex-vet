<?php

namespace App\Http\Controllers\Admin\Practitioner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PractitionersController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.practitioners.index');
    }

    public function detail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.practitioners.detail');
    }

    public function delete(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.practitioners.index');
    }
}
