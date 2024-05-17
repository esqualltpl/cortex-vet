<?php

namespace App\Http\Controllers\Admin\Practitioner;

use App\Helpers\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class PractitionersController extends Controller
{
    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $practitioners = User::where('status', 'Practitioner')->with('userInfo')->get();
        return view('admin.practitioners.index', compact('practitioners'));
    }

    public function detail($id): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $practitioner = User::with('userInfo')->find(Crypt::decrypt($id));
        return view('admin.practitioners.detail', compact('practitioner'));
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
