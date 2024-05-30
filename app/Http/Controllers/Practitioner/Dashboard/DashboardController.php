<?php

namespace App\Http\Controllers\Practitioner\Dashboard;

use App\Helpers\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use App\Models\Bread;
use App\Models\Letter;
use App\Models\Resource;
use App\Models\Specie;
use App\Models\User;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function dashboard(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $superAdmin = User::where('status', 'Super Admin')->first();
        $videoInfo = Resource::where('added_by', $superAdmin->id ?? null)->first();
        $resourceInfo = $videoInfo != null ? $videoInfo->getResourceInfo() : null;

        return view('practitioner.dashboard.index', compact('resourceInfo'));
    }

    public function patient(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $species = Specie::all();
        return view('practitioner.dashboard.add_new_patient', compact('species'));
    }

    public function breadOptions($id)
    {
        try {
            $provinces = Bread::where('specie_id', Crypt::decrypt($id))->orderBy('name', 'ASC')->get();
            $options = '<option selected="" value="">Select</option>';
            foreach ($provinces as $province) {
                $options .= '<option value=' . Crypt::encrypt($province->id) . '>' . $province->name . '</option>';
            }
            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Bread options list get successfully.');
            $response['rendered_info'] = $options;
            Log::info('Successfully get the bread options information', ['get' => 'success' ?? '']);
            return response()->json($response);
        } catch (Exception $e) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the bread options information. Please try again later.');
            Log::info('The system is unable to get the bread options information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }
}
