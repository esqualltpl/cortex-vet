<?php

namespace App\Http\Controllers\Admin\Practitioner;

use Flasher\Prime\FlasherInterface;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class PractitionersController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $practitioners = User::where('status', 'Practitioner')->with('userInfo')->get();
        return view('admin.practitioners.index', compact('practitioners'));
    }

    public function detail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('admin.practitioners.detail');
    }

    public function delete($id)
    {
//        return view('admin.practitioners.index');
    }
}
