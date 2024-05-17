<?php

namespace App\Http\Controllers\Admin\Neurologist;

use App\Helpers\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class NeurologistsController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $neurologists = User::where('status', 'Neurologist')->with('userInfo')->get();
        return view('admin.neurologists.index', compact('neurologists'));
    }

    public function detail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $neurologist = User::with('userInfo')->find(Crypt::decrypt($id));
        return view('admin.neurologists.detail', compact('neurologist'));
    }

    public function delete($id)
    {
        try {
            DB::beginTransaction();

            $user_id = Crypt::decrypt($id);
            User::find($user_id)->delete();
            UserDetail::where('user_id', $user_id)->delete();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'User information removed successfully.');
            Log::info('Successfully removed the user info', ['removed' => 'success' ?? '']);

            DB::commit();
            return response()->json($response);
        } catch (Exception $e) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to remove the user information. Please try again later.');
            Log::info('The system is unable to remove the user information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }
}
