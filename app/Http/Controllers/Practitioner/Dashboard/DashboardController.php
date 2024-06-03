<?php

namespace App\Http\Controllers\Practitioner\Dashboard;

use App\Helpers\ResponseMessage;
use App\Http\Controllers\Controller;
use App\Models\Affiliate;
use App\Models\Breed;
use App\Models\Letter;
use App\Models\Patient;
use App\Models\Resource;
use App\Models\Specie;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class DashboardController extends Controller
{
    public function dashboard(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $superAdmin = User::where('status', 'Super Admin')->first();
        $videoInfo = Resource::where('added_by', $superAdmin->id ?? null)->first();
        $resourceInfo = $videoInfo != null ? $videoInfo->getResourceInfo() : null;

        $caninePatients = Patient::where('specie_type', '1')->count() ?? 0;
        $felinePatients = Patient::where('specie_type', '2')->count() ?? 0;
        $exoticPatients = Patient::where('specie_type', '3')->orWhere('specie_type', '3')->count() ?? 0;

        return view('practitioner.dashboard.index', compact('resourceInfo', 'caninePatients', 'felinePatients', 'exoticPatients'));
    }

    public function patient(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        $species = Specie::all();
        $patient_id = $this->generateUniquePatientId();
        return view('practitioner.dashboard.add_new_patient', compact('species', 'patient_id'));
    }

    public function breedOptions($id)
    {
        try {
            $specie_info = Specie::find(Crypt::decrypt($id));
            $breeds = Breed::where('specie_id', $specie_info->id)->orderBy('name', 'ASC')->get();
            $options = '<option selected="" value="">Select</option>';
            foreach ($breeds as $breed) {
                $options .= '<option value="' . Crypt::encrypt($breed->id) . '" data-breed-image="' . $breed->getBreedImage($specie_info->name ?? null) . '">' . $breed->name . '</option>';
            }
            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Bread options list get successfully.');
            $response['rendered_info'] = $options;
            Log::info('Successfully get the breed options information', ['get' => 'success' ?? '']);
            return response()->json($response);
        } catch (Exception $e) {
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to get the breed options information. Please try again later.');
            Log::info('The system is unable to get the breed options information. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function patientInfoSave(Request $request)
    {
        $request->validate([
            'patient_id' => ['required', 'string', 'max:255'],
            'patient_name' => ['required', 'string', 'max:255'],
            'owner_name' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'string', 'max:255'],
            'specie_type' => ['required'],
            'weight_type' => ['required'],
            'breed' => ['required'],
            'weight' => ['required', 'string', 'max:255'],
        ]);

        try {
            DB::beginTransaction();

            //Check the Patient ID
            if(Patient::where('patient_id', $request->patient_id)->first()){
                $response = ResponseMessage::ResponseNotifyError('Error!', 'The patient id is already taken. Please enter new patient id.');
                Log::info('The system is unable to add the new patient. Please try again later.', ['patient-id' => 'Already Taken']);

                return redirect()->back()->with($response);
            }

            $patientInfo = new Patient;
            $patient_id = $request->patient_id;
            $patient_name = $request->patient_name;
            $owner_name = $request->owner_name;
            $dob = $request->dob;
            $sex = Crypt::decrypt($request->sex);
            $specie_type = Crypt::decrypt($request->specie_type);
            $breed = Crypt::decrypt($request->breed);
            $weight_type = Crypt::decrypt($request->weight_type);
            $weight = $request->weight;

            $patientInfo->patient_id = $patient_id;
            $patientInfo->patient_name = $patient_name;
            $patientInfo->owner_name = $owner_name;
            $patientInfo->dob = $dob;
            $patientInfo->sex = $sex;
            $patientInfo->specie_type = $specie_type;
            $patientInfo->weight_type = $weight_type;
            $patientInfo->breed = $breed;
            $patientInfo->weight = $weight;
            $patientInfo->added_by = auth()->user()->id;
            $patientInfo->save();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'New patient added successfully.');
            Log::info('Successfully add the new patient', ['updated' => 'success' ?? '']);
            DB::commit();
           return redirect()->back()->with($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to add the new patient. Please try again later.');
            Log::info('The system is unable to add the new patient. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return redirect()->back()->with($response);
        }
    }

    public function patientInfoUpdate(Request $request)
    {
        $request->validate([
            'patient_name' => ['required', 'string', 'max:255'],
            'owner_name' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'sex' => ['required', 'string', 'max:255'],
            'specie_type' => ['required'],
            'weight_type' => ['required'],
            'breed' => ['required'],
            'weight' => ['required', 'string', 'max:255'],
        ]);

        try {
            DB::beginTransaction();

            $patient_id = Crypt::decrypt($request->patient_id);
            $patient_name = $request->patient_name;
            $owner_name = $request->owner_name;
            $dob = $request->dob;
            $sex = Crypt::decrypt($request->sex);
            $specie_type = Crypt::decrypt($request->specie_type);
            $breed = Crypt::decrypt($request->breed);
            $weight_type = Crypt::decrypt($request->weight_type);
            $weight = $request->weight;

            $patientInfo = Patient::find($patient_id);
            $patientInfo->patient_name = $patient_name;
            $patientInfo->owner_name = $owner_name;
            $patientInfo->dob = $dob;
            $patientInfo->sex = $sex;
            $patientInfo->specie_type = $specie_type;
            $patientInfo->weight_type = $weight_type;
            $patientInfo->breed = $breed;
            $patientInfo->weight = $weight;
            $patientInfo->save();

            $response = ResponseMessage::ResponseNotifySuccess('Success!', 'Patient information updated successfully.');
            $response['redirect_url'] = route('practitioner.patient.detail', $request->patient_id);
            Log::info('Successfully update the patient information', ['updated' => 'success' ?? '']);
            DB::commit();
           return response()->json($response);
        } catch (Exception $e) {
            DB::rollBack();
            $response = ResponseMessage::ResponseNotifyError('Error!', 'The system is unable to update the patient information. Please try again later.');
            Log::info('The system is unable to update the patient informationD. Please try again later.', ['title' => $e->getMessage(), 'error', $e]);

            return response()->json($response);
        }
    }

    public function generateUniquePatientId($prefix = 'PID-', $startingPoint = 1): string
    {
        do {
            $currentCount = Patient::count();
            $patient_id = $currentCount + $startingPoint;
            $formattedPatienId = str_pad($patient_id, 3, '0', STR_PAD_LEFT);
            $exists = Patient::where('patient_id', $prefix . $formattedPatienId)->exists();

            if ($exists) {
                $startingPoint++;
            }
        } while ($exists);

        return $prefix . $formattedPatienId;
    }
}
