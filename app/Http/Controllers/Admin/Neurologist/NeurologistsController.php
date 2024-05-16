<?php

namespace App\Http\Controllers\Admin\Neurologist;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NeurologistsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $neurologists = User::where('status', 'Neurologist')->with('userInfo')->get();
        return view('admin.neurologists.index', compact('neurologists'));
    }

    public function detail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.neurologists.detail');
    }

    public function delete(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.neurologists.index');
    }
}
